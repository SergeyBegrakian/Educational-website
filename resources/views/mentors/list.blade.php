<!doctype html>
<html class=no-js lang=en>
<head>
  <meta charset=utf-8>

  <title>Create</title>
  <meta name=description content="">
  <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/button3.css') }}">
  <meta name=viewport content="width=device-width, initial-scale=1">
  <link rel=stylesheet  href="{{ asset('/assets/css/A.animate.css+tiny-slider.css+glightbox.min.css+LineIcons.2.0.css+bootstrap-5.0.5-alpha.min.css,Mcc.Gwyb6DYDia.css.pagespeed.cf.bdCy2eMFcs.css') }}" >
  <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/button.css') }}">
	<link rel=stylesheet  href="{{ asset('/assets/css/A.style.css.pagespeed.cf.0s5kiYJruP.css') }}" >
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>


</head>
<body>
<section class="page-banner pt-200 pb-100 bg_cover" style="background-image:url(/assets/images/course/hero-bg.jpg)">
  <div class=container>
    <div class=row>
      <div class=col-lg-12>
        <div class="banner-content text-center">
          <h1 class=text-white></h1>
          <nav aria-label=breadcrumb>
            <ol class=breadcrumb>
              <li >
                <a href="/"></a>
              </li>
              <li class="breadcrumb-item active" aria-current=page></li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
</section>



<header class=header_area>
  <div id=header_navbar class=header_navbar>
    <div class=container>
      <div class="row align-items-center">
        <div class=col-xl-12>
          <nav class="navbar navbar-expand-lg">
            <a class=navbar-brand href="/">
              <img id=logo  src="{{ asset('/assets/images/logo.svg') }}" alt=Logo data-pagespeed-url-hash=3852796712 onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
            </a>
            <button class=navbar-toggler type=button data-toggle=collapse data-target="#navbarSupportedContent" aria-controls=navbarSupportedContent aria-expanded=false aria-label="Toggle navigation">
              <span class=toggler-icon></span>
              <span class=toggler-icon></span>
              <span class=toggler-icon></span>
            </button>
            <div class="collapse navbar-collapse sub-menu-bar" id=navbarSupportedContent>
              <ul id=nav class="navbar-nav ml-auto">
                <li class=nav-item>
                  <a href="/">Home</a>
                </li>
              	<li class=nav-item>
									<a href="/profile" class="login" >  Account {{auth()->user()->name}}  </a>
								</li>
                <li>
									<form method="POST" action="/logout" >
									@csrf
									<button class="login" type="submit">
									    <i>Logout</i>
                                    </button>
                                    </form>
								</li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>
</header>
</div>

<div> 
<i> </i>   
<i style="width:1445px;margin-left:-10px;">  
  <div x-data="{ showMessage: true }" x-show="showMessage" x-init="setTimeout(() => showMessage = false, 2000)">
  
  @if (Session::has('message'))
<script>
swal("Success","{!! Session::get('message') !!}","success",{

  button:"OK"

})

</script>
  @elseif(Session::has('error'))
  <script>
swal("Alert","{!! Session::get('message') !!}","alert",{
  button:"OK"
})
</script>
  @else
  <i> </i>  

  @endif

  </div>
</i>      
   
 

<div >
            <ul>
                <li id ="information">
                <h3  >Mentors</h3>
             
       
                </li>
                <li class="formbold-step-menu2">
    
            
                </li>
                <li class="formbold-step-menu3">
   
            
                </li>
            </ul>
        </div>

</div>



<div >
        <div class="row" style=" margin-left:40px; width: 1360px" >
                <div class="card">
                    <div class="card-body" style="width: 1360px !important;">
                        <a href="/admin/mentors/create"   class="login" title="Add New Contact">
                            <i  ></i> Add New Mentor</a>
                            <a href="/admin/mentors/archive"   class="login" title="Add New Contact">
                            <i  ></i>Archive</a>
                        <div class="table-responsive">
                            <table class="table" style="width: 1360px !important;" >
                                <thead>
                                    <tr>
                                    <th>Photo</th>
                                        <th>Full Name</th>
                                        <th>Profession</th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                        <th></th>
                     
                         
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($mentors as $mentor)
                                    <tr>
                                    <td> <a href="/{{$mentor->slug}}">
							                        <img src="{{ asset('images/' . $mentor->image_path)}}" style="width:135px; height:120px; border-radius:100px;">
						                              </a>
                                        </td> 
                                        <td>{{ $mentor->full_name}}</td> 
                                        <td>{{ $mentor->profession}}</td> 
                                        <td>{{ $mentor->email}}</td>
                                        <td>{{ $mentor->phone_number}}</td>
 
                                        <td>
                                            <a  href="/admin/mentors/{{$mentor->id}}/edit" title="View Student">
                                              <button class="login">
                                                <i  aria-hidden="true"></i> Edit </button></a>
 
                                            <form action="/admin/mentors/{{$mentor->id}}" method="POST" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <input name="_method" type="hidden" value="DELETE">
                                                <button type="submit" class="login show_confirm" data-toggle="tooltip" title='Delete'>Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                            {{$mentors->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">
 
     $('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          swal({
              title: `Are you sure you want to delete this record?`,
              text: "If you delete this, it will be gone forever.",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              form.submit();
            }
          });
      });
  
</script>
<footer id=footer class="footer-area pt-120">
  <div class=container>
    <div class=row>
      <div class="col-xl-3 col-lg-3 col-md-6">
        <div class=footer-widget>
          <a class = "logo" href="/" >
            <img  src="{{ asset('/assets/images/logo.svg') }}" alt="" data-pagespeed-url-hash=3852796712 onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
          </a>
          <p class = "footer">Education and Online Course Web Site.</p>
<p class="footer">Flexible learning lets you study wherever and whenever suits your schedule.</p>
        </div>
      </div>
      <div class="col-xl-2 col-lg-2 offset-xl-1 offset-lg-1 col-md-6">
        <div class=footer-widget>
          <h5 >Quick Links</h5>
          <ul>
            <li>
              <a href="/">Home</a>
            </li>
            <li>
              <a href="/#courses">Cources</a>
            </li>
            <li>
              <a href="/#blog">Blog</a>
            </li>
            <li>
              <a href="/#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-6">
        <div class=footer-widget>
          <h5>Contact Us</h5>
          <ul>
            <li>
              <p>Phone: +884-9273-3867</p>
            </li>
            <li>
              <p>
                Email:
                <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d0b8b5bcbcbf90b7bdb1b9bcfeb3bfbd">[email&#160;protected]</a>
              </p>
            </li>
            <li>
              <p>
                Address: United State Of
                <br>
                America UNDF School
              </p>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class=footer-credit>
      <div class=row>
        <div class=col-md-6>
          <div class=footer-social>
            <ul class="d-flex justify-content-md-end justify-content-center">
              <li>
                <a href="javascript:void(0)">
                  <i class="lni lni-facebook-filled"></i>
                </a>
              </li>
              <li>
                <a href="javascript:void(0)">
                  <i class="lni lni-twitter-filled"></i>
                </a>
              </li>
              <li>
                <a href="javascript:void(0)">
                  <i class="lni lni-instagram-filled"></i>
                </a>
              </li>
              <li>
                <a href="javascript:void(0)">
                  <i class="lni lni-linkedin-original"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<script src="//unpkg.com/alpinejs" defer></script>
</html>

