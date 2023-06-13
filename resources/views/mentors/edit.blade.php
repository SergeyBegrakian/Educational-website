<!doctype html>
<html class=no-js lang=en>
<head>
  <meta charset=utf-8>

  <title>Update</title>
  <meta name=description content="">
  <meta name=viewport content="width=device-width, initial-scale=1">
  <link rel=stylesheet  href="{{ asset('/assets/css/A.animate.css+tiny-slider.css+glightbox.min.css+LineIcons.2.0.css+bootstrap-5.0.5-alpha.min.css,Mcc.Gwyb6DYDia.css.pagespeed.cf.bdCy2eMFcs.css') }}" >
  <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/css3.css') }}">
  <link rel=stylesheet  href="{{ asset('/assets/css/A.style.css.pagespeed.cf.0s5kiYJruP.css') }}" >
  
  <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/button.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/create.css') }}">
  
  


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
                  <a href="/admin/mentors">Mentors</a>
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

	 

<body>


<div class="account-login section">
  <div class="collapse navbar-collapse sub-menu-bar" id=navbarSupportedContent>      
  </div>
  <div>
				
  <div class="formbold-main-wrapper">
     
          <div >
            <div class=title>
            <a class="account" href="/admin/courses">Courses</a>  



  <div class="formbold-form-wrapper">
  <form method="POST" action="/admin/mentors/{{$mentor->id}}" enctype="multipart/form-data" >
  @method('PATCH')	
          @csrf

        <div class="formbold-steps">
            <ul>
                <li class="formbold-step-menu1 active">
                <h3>Personal information</h3>
             
       
                </li>
                <li class="formbold-step-menu2">
    
            
                </li>
                <li class="formbold-step-menu3">
   
            
                </li>
            </ul>
        </div>

        <div class="formbold-form-step-1 active">
          <div class="formbold-input-flex">
                @if ($errors->has('full_name'))
                <div class="form-group">
                <label for="firstname" class="title" style="color: red;"> Full Name </label>
                <input
                type="text"
                name="full_name" 
                id="firstname"
                class="formbold-form-input" 
                value="{{ $mentor->full_name}}"
                style="border-color: red; margin-top:10px;"
                />

              @else
              <div class="form-group">
                <label for="firstname"  class="formbold-form-label"> Full Name </label>
                <input
                type="text"
                name="full_name" 
                id="firstname"
                class="formbold-form-input" 
                value="{{ $mentor->full_name}}"
                />
                
                @endif
                  @error('full_name')
                <p id="error" class="text-red-500 text -xs mt-1" style="font-size:13px;">{{$message}}</p>

                @enderror
            </div>

            @if ($errors->has('profession'))
            <div class="error" >
                <label for="lastname" class="formbold-form-label" style="color: red;" > Profession </label>
                <input
                type="text"
                name="profession"
                id="lastname"
                class="formbold-form-input" 
                value="{{ $mentor->profession}}"
                style="border-color: red;"
                />

                @else
                <div class="error" >
                <label for="lastname" class="formbold-form-label"> Profession </label>
                <input
                type="text"
                name="profession"
                id="lastname"
                class="formbold-form-input" 
                value="{{ $mentor->profession}}"
                />
          @endif

                @error('profession')
          <p  id="error" class="text-red-500 text -xs mt-1" style="font-size:13px;">{{$message}}</p>
         @enderror
            </div>
          </div>
         @if ($errors->has('email'))
          <div class="formbold-input-flex">
            <div>
                <label for="firstname" class="formbold-form-label" style="color: red;" > Email </label>
                <input
                type="text"
                name="email"
                id="firstname"
                class="formbold-form-input"
                value="{{ $mentor->email}}"
                style="border-color: red;"
                />

                @else
                <div class="formbold-input-flex">
            <div>
                <label for="firstname" class="formbold-form-label"  >Email</label>
                <input
                type="text"
                name="email"
                id="firstname"
                class="formbold-form-input"
                value="{{ $mentor->email}}"
                />
           @endif
                @error('email')
          <p id="error" class="text-red-500 text -xs mt-1" style="font-size:13px;">{{$message}}</p>
         @enderror
            </div>

            @if ($errors->has('phone_number'))
            <div>
                <label for="lastname" class="formbold-form-label" style="color: red;" >Phone Number</label>
                <input
                type="text"
                name="phone_number"
                id="lastname"
                class="formbold-form-input"
                value="{{ $mentor->phone_number}}"
                style="border-color: red;"
                />
                @else
                <div>
                <label for="lastname" class="formbold-form-label"  > Phone Number</label>
                <input
                type="text"
                name="phone_number"
                id="lastname"
                class="formbold-form-input"
                value="{{ $mentor->phone_number}}"
                />
                @endif
                @error('phone_number')
                <p id="error" class="text-red-500 text -xs mt-1" style="font-size:13px;">{{$message}}</p>
              @enderror
            </div>
          </div>
         
        @if ($errors->has('image'))
            <label for="message" class="formbold-form-label" style="color: red;"> Select Files </label>
            <input type="file" id="myfile" name="image" style="border-color: red;"  multiple><br><br>
            @else
            <label for="message" class="formbold-form-label"> Select Files </label>
            <input type="file" id="myfile" name="image"  multiple><br><br>
            @endif

            @error('image')
          <p id="error" class="text-red-500 text -xs mt-1" style="font-size:13px;">{{$message}}</p>
         @enderror
        </div>
        </div>
        
        

        <div class="formbold-form-step-3">
          <div class="formbold-form-confirm">
        
            <div>
              <button class="formbold-confirm-btn active">
            
              </button>

              <button class="formbold-confirm-btn">
        
              </button>
            </div>
          </div>
        </div>
        <p style="margin-top:-40px;" >Current mentor image </p>
        <img src="{{ asset('images/' . $mentor->image_path)}}" style="width:135px; height:180px; 
        margin-left:10px; margin-top:5px;height:120px; border-radius:100px;">
        <div class="Upd">
          <button  class="formbold-btn" style="margin-left:1200px; margin-top:-90px;";  >Update</button>
        </div>
    </form>
    <form action="/admin/mentors/deleteImage/{{$mentor->id}}" method="POST" accept-charset="UTF-8" style="display:inline;">
                                
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                
                                <input name="_method" type="hidden" value="DELETE">
                                <button style="margin-left:220px; margin-top:10px;" type="submit" class="login show_confirm" data-toggle="tooltip" title='Delete'>X</button>

                            </form>
  </div>


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
</div>



</html>




