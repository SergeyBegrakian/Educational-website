<?php

namespace App\Http\Controllers;
use Stripe\Stripe;
use App\Models\Order;
use App\Models\Course;
use App\Models\Mentor;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\UpdateRequest;
use Illuminate\Support\Facades\File;
use App\Http\Requests\StorePostRequest;
use RealRashid\SweetAlert\Facades\Alert;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use App\Mail\PaymentConfirmationEmail;
use Illuminate\Support\Facades\Mail;

class CourseController extends Controller
{
    /**
     * 
     * 
     */
    public function index(){
        $courses = Course::with('mentor')->paginate(3);
        $mentors = Mentor::with('getCourses')->paginate(3);
        $courses = Course::with('category')->paginate(3);
        $categories = Category::with('getCourses')->paginate(3);
        return view('courses.list', compact('courses', 'mentors','categories'));
    } 

    public function showArchive(){
        $courses = Course::onlyTrashed()->get();
        return view('courses.archive', compact('courses'));
    } 

    public function create(){
        $mentors = Mentor::all();
        $categories = Category::all();
        return view('courses.create', compact('mentors' , 'categories'));
    }   

    /**
     * 
     * 
     * @param Request $request
     * 
     * 
     */
    public function store(StorePostRequest $request){

        $slug = Str::slug($request -> title, '-');
        $validated = $request->validated(); 
        $imageName = time() . '-' . $request->name . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        $data = $request->all();
        $data['image_path'] = $imageName;
        $data['slug'] = $slug;
        
        $cource = Course::create($data);
        if ($cource) {
            return redirect('/admin/courses')->with('message', 'The course has been successfully created');
        } else {
             return redirect('/admin/courses')->with('error', 'The course has not been created');
        }
    }

    public function show(){

        $courses = Course::all();
        $mentors = Mentor::all();
        $categories = Category::all();
        return view('welcome', compact('courses', 'mentors', 'categories'));
    }

    public function edit(Request $request, $id){
        $cource = Course::find($id);    

        $mentors = Mentor::all();
        $categories = Category::all();
        if ($cource) {
            return view('courses.edit', compact('cource','mentors','categories'));
        } else {
            return redirect('/admin/courses')->with('error', 'Course with the following id does not exist');
        }
    } 

    public function update(UpdateRequest $request, $id){
        $cource = Course::findOrFail($id);
        $data = $request->all();
        $path = 'images/' . $cource->image_path;
            if ($request->has('image')) { 
                $newImage = $data['image'];
                $imageName = time() . '-' . $request->name . '.' . $request->image->extension();
                $request->image->move(public_path('images'), $imageName);
                $data['image_path'] = $imageName;
                
                $slug = Str::slug($request->title, '-');
                File::delete($path);
                $cource->update($data);
                return redirect('/admin/courses')->with('message', 'Data updated');
            } else {
                $slug = Str::slug($request->title, '-');
                $cource->update($data);
                return redirect('/admin/courses')->with('message', 'Data updated');
            }  
    }
    
    public function destroy($id){
        $course = Course::find($id);  
        if ($course) { 
            $course->delete();
            return redirect('/admin/courses')->with('message', 'The course has been deleted');
        }
        else{
            return redirect('/admin/courses')->with('error', 'No file found with the following path');
        }  
    } 

    public function destroyArchive($id){

        $course = Course::withTrashed()->find($id);
        $path = 'images/' . $course->image_path;
        File::delete($path);
        $course->forceDelete();
        
        return redirect('/admin/courses')->with('message', 'The courses has been Force deleted');
    } 

    public function restore($id){
        $course = Course::withTrashed()->find($id);
        $course->restore();
        return back();
    }
    public function checkout($id){
        \Stripe\Stripe::setApiKey(env('sk_test_51MtBmJKzhpzNDLI1sUL8TonemqY8Y6WvL8T5ymFAdoKSCNezUivhVeTBKLu83v4eip04xmM5BWNlv2jdg9yzi9I400mNDGGXqB'));
        $course = Course::findOrFail($id);
        $lineItems = [];
        $totalPrice = 0;
        $lineItems = [
            [
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => $course->title,
                    ],
                    'unit_amount' => $course->price * 100,
                ],
                'quantity' => 1,
            ]
        ];

        \Stripe\Stripe::setApiKey('sk_test_51MtBmJKzhpzNDLI1sUL8TonemqY8Y6WvL8T5ymFAdoKSCNezUivhVeTBKLu83v4eip04xmM5BWNlv2jdg9yzi9I400mNDGGXqB');
        $session = \Stripe\Checkout\Session::create([
            'line_items' => $lineItems,
            'mode' => 'payment',
            'success_url' => route('checkout.success', [], true) . '?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => route('checkout.cancel', [], true),
        ]);
        
            $order = new Order();
            $order->status = 'unpaid';
            $order->total_price = $course->price;
            $order->session_id = $session->id;
            $order->save();

          return redirect($session->url);
    }

    public function success(Request $request){
    \Stripe\Stripe::setApiKey('sk_test_51MtBmJKzhpzNDLI1sUL8TonemqY8Y6WvL8T5ymFAdoKSCNezUivhVeTBKLu83v4eip04xmM5BWNlv2jdg9yzi9I400mNDGGXqB');
    $sessionId = $request->input('session_id');
    $session = \Stripe\Checkout\Session::retrieve($sessionId);
    $order = Order::where('session_id', $session->id)->where('status', 'unpaid')->first();

    if (!$order) {
      throw new NotFoundHttpException();
    }

    $order->status = 'paid';
    $order->save();

    $customerEmail = $session->customer_details->email;
    Mail::to($customerEmail)->send(new PaymentConfirmationEmail($order));
        return view('courses.success'); 
    }

    public function cancel(){
        return view('courses.cancel'); 
    }
}


