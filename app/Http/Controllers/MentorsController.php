<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Mentor;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateRequest;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\UpdateMentorsRequest;
use App\Http\Requests\StorePostMentorsRequest;


class MentorsController extends Controller
{
    public function index(){
        $mentors = Mentor::paginate(3);
        return view('mentors.list', compact('mentors'));
    } 
    public function archive(){
        $mentors = Mentor::onlyTrashed()->get();
        return view('mentors.archive', compact('mentors'));
    } 
    

    public function create(){
        return view('mentors.create');
    }

    public function store(StorePostMentorsRequest $request){
        $validated = $request->validated(); 
        $imageName = time() . '-' . $request->name . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $data = $request->all();
        $data['image_path'] = $imageName;
        
        $mentor = Mentor::create($data);
        if ($data) {
            return redirect('/admin/mentors')->with('message', 'The Mentors has been successfully created');
        } else {
            return redirect('/admin/mentors')->with('error', 'The Mentors has not been created');
        }
    }

    public function show(){
        $mentors = Mentor::all();
        return view('welcome', $mentors);
    }

    public function edit(Request $request, $id){
        $mentor = Mentor::find($id);
        if ($mentor) {
            return view('mentors.edit', compact('mentor'));
        } else {
            return redirect('/admin/mentors')->with('error', 'Mentor with the following id does not exist');
        }
    } 

    public function update(UpdateMentorsRequest $request, $id){
        $mentor = Mentor::findOrFail($id);
        $data = $request->all();
        $path = 'images/' . $mentor->image_path;
        if ($request->has('image')) { 
            $newImage = $data['image'];
            $imageName = time() . '-' . $request->name . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $mentor['image_path'] = $imageName;
            
            File::delete($path);
            $mentor->update($data);
            return redirect('/admin/mentors')->with('message', 'Mentor updated');
        } else {
            $mentor->update($data);
            return redirect('/admin/mentors')->with('message', 'Mentor updated');
        }      
    }
    
    public function destroy($id){
        $mentor = Mentor::find($id);    
        if ($mentor){ 
            $mentor->delete();
            return redirect('/admin/mentors')->with('message', 'The Mentors has been deleted');
        } 
    } 

    public function destroyArchive($id){

        $mentor = Mentor::withTrashed()->find($id);
        $path = 'images/' . $mentor->image_path;
        File::delete($path);
        $mentor->forceDelete();
        return redirect('/admin/mentors')->with('message', 'The Mentors has been Force deleted');
    } 

    public function restore($id){
        $mentor = Mentor::withTrashed()->find($id);
        $mentor->restore();
        return back();
    }

    public function destroyImage($id){
        $mentor = Mentor::find($id);
        $path = 'images/' . $mentor->image_path;
        if ($mentor) { 
            File::delete($path);
            Mentor::find($id)->update(['image_path' => ('')]);
            return view('mentors.edit', compact('mentor'))->with('message', 'The Mentors image has been deleted');
        } 
    } 
}
