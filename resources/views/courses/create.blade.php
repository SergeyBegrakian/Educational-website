<!doctype html>
<html class=no-js lang=en>
<head>
  <meta charset=utf-8>

  <title>Create</title>
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
                  <a href="/admin/courses">Courses</a>
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
            </div>
          </div>
</div>



  <div class="formbold-form-wrapper" style="width: 1200px !important;">
  <form method="POST" action="/admin/courses"  enctype="multipart/form-data" >
          @csrf

        <div class="formbold-steps">
            <ul>
                <li class="formbold-step-menu1 active">
                <h3>Course information</h3>
             
       
                </li>
                <li class="formbold-step-menu2">
    
            
                </li>
                <li class="formbold-step-menu3">
   
            
                </li>
            </ul>
        </div>
        

        <div class="formbold-form-step-1 active">
          <div class="formbold-input-flex">
                @if ($errors->has('title'))
                <div class="form-group">
                <label for="firstname" class="title" style="color: red;"> Title </label>
                <input
                type="text"
                name="title" 
                id="firstname"
                class="formbold-form-input" 
                value="{{old('title')}}"
                style="border-color: red; margin-top:10px;"
                />

              @else
              <div class="form-group{{$errors->has('title')? 'has-error' : '' }}">
                <label for="firstname"  class="formbold-form-label"> Title </label>
                <input
                type="text"
                name="title" 
                id="firstname"
                class="formbold-form-input" 
                value="{{old('title')}}" />
                @endif
                  @error('title')
                <p id="error" class="text-red-500 text -xs mt-1" style="font-size:13px;">{{$message}}</p>

                @enderror
            </div>

            @if ($errors->has('topics'))
            <div class="error" >
                <label for="lastname" class="formbold-form-label" style="color: red;" > Topics </label>
                <input
                type="text"
                name="topics"
                id="lastname"
                class="formbold-form-input" 
                value="{{old('topics')}}"
                style="border-color: red;"
                />

                @else
                <div class="error" >
                <label for="lastname" class="formbold-form-label"> Topics </label>
                <input
                type="text"
                name="topics"
                id="lastname"
                class="formbold-form-input" 
                value="{{old('topics')}}"
                />
          @endif

                @error('topics')
          <p  id="error" class="text-red-500 text -xs mt-1" style="font-size:13px;">{{$message}}</p>
         @enderror
            </div>
          </div>
         @if ($errors->has('level'))
          <div class="formbold-input-flex">
            <div>
                <label for="firstname" class="formbold-form-label" style="color: red;" > Level  </label>
                <input
                type="text"
                name="level"
                id="firstname"
                class="formbold-form-input"
                value="{{old('level')}}"
                style="border-color: red;"
                />

                @else
                <div class="formbold-input-flex">
            <div>
                <label for="firstname" class="formbold-form-label"  > Level  </label>
                <input
                type="text"
                name="level"
                id="firstname"
                class="formbold-form-input"
                value="{{old('level')}}"
                />
           @endif
                @error('level')
          <p id="error" class="text-red-500 text -xs mt-1" style="font-size:13px;">{{$message}}</p>
         @enderror
            </div>

            @if ($errors->has('price'))
            <div>
                <label for="lastname" class="formbold-form-label" style="color: red;" > Price</label>
                <input
                type="text"
                name="price"
                id="lastname"
                class="formbold-form-input"
                value="{{old('price')}}"
                style="border-color: red;"
                />
                @else
                <div>
                <label for="lastname" class="formbold-form-label"  > Price</label>
                <input
                type="text"
                name="price"
                id="lastname"
                class="formbold-form-input"
                value="{{old('price')}}"
          
                />
                @endif
                @error('price')
                <p id="error" class="text-red-500 text -xs mt-1" style="font-size:13px;">{{$message}}</p>
              @enderror
            </div>
          </div>
          @if ($errors->has('start'))
          <div class="formbold-input-flex">
              <div>
                  <label for="dob" class="formbold-form-label"      style="color: red;">Start</label>
                  <input 
                  type="date" 
                  name="start" 
                  id="dob" 
                  class="formbold-form-input"
                  value="{{old('start')}}"
                  style="border-color: red;"
                  />
                  @else

                  <div class="formbold-input-flex">
              <div>
                  <label for="dob" class="formbold-form-label">Start</label>
                  <input 
                  type="date" 
                  name="start" 
                  id="dob" 
                  class="formbold-form-input"
                  value="{{old('start')}}"
                  />
                  @endif
                  @error('start')
          <p id="error" class="text-red-500 text -xs mt-1" style="font-size:13px;" >{{$message}}</p>
         @enderror
              </div>
              @if ($errors->has('duration'))
              <div>
                <label for="lastname" class="formbold-form-label" style="color: red;" >Duration</label>
                <input
                type="text"
                name="duration"
                id="lastname"
                class="formbold-form-input"
                value="{{old('duration')}}"
                style="border-color: red;"
                />
                @else 
                <div>
                <label for="lastname" class="formbold-form-label"  >Duration</label>
                <input
                type="text"
                name="duration"
                id="lastname"
                class="formbold-form-input"
                value="{{old('duration')}}"
                />
                @endif

                @error('duration')
                    <p id="error" class="text-red-500 text -xs mt-1" style="font-size:13px;" >{{$message}}</p>
                @enderror
              </div>
          </div>
          @if ($errors->has('content'))
        <div class="formbold-textarea">
          <label for="message" class="formbold-form-label" style="color: red;"> Content </label>
            <textarea
                rows="6"
                name="content"
                id="message"
                placeholder="Write course content..."
                class="formbold-form-input"
                style="border-color: red;"
            >{{old('content')}} </textarea>
        </div>
        @else
        <div class="formbold-textarea">
          <label for="message" class="formbold-form-label"> Content </label>
            <textarea
                rows="6"
                name="content"
                id="message"
                placeholder="Write course content..."
                class="formbold-form-input"
            >{{old('content')}} </textarea>
        </div>
            @endif
            @error('content')
              <p id="error" class="text-red-500 text -xs mt-1" style="font-size:13px;"  >{{$message}}</p>
             @enderror

         @if ($errors->has('description'))
            <div class="formbold-textarea">
            <label for="message" class="formbold-form-label"     style="color: red;"> Description </label>
            <textarea
                rows="6"
                name="description"
                id="message"
                placeholder="Write course description..."
                class="formbold-form-input"
                value="{{old('description')}}"
                style="border-color: red;"
            >{{old('description')}} </textarea>

            @else
            <div class="formbold-textarea">
            <label for="message" class="formbold-form-label"> Description </label>
            <textarea
                rows="6"
                name="description"
                id="message"
                placeholder="Write course description..."
                class="formbold-form-input"
                value="{{old('description')}}"
            >{{old('description')}} </textarea>
            @endif
            @error('description')
          <p id="error" class="text-red-500 text -xs mt-1" style="font-size:13px;">{{$message}}</p>
         @enderror
        <div>
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
        <div class="formbold-form-step-1 active">
        <div class="formbold-input-flex">
        <div class="form-group">
        <label for="message" class="formbold-form-label" style="width: 100px !important;"> Select Mentor </label>
        <select name="mentor_id" id="mentor_id">
        @foreach($mentors as $mentors)
        <option value = "{{ $mentors->id }} " name="Mentor_id" >{{$mentors->full_name}} </option>
        @endforeach
      </select>
      </div>
      <div class="formbold-form-step-1 active">
          <div class="formbold-input-flex">
         <div class="form-group">
         <label for="message" class="formbold-form-label" style="width: 100px !important;" >Select Category</label>
       <select name="category_id" id="category_id">
        @foreach($categories  as $categories )
        <option value = "{{ $categories ->id}} " name="category_id" >{{$categories ->name}} </option>
        @endforeach
      </select> 
      

   

        <div class="formbold-form-step-3">
          <div class="formbold-form-confirm">
      
            <div>
         
              </button>

              <button class="formbold-confirm-btn">
   
              </button>
            </div>
          </div>
        </div>

        <div class="formbold-form-btn-wrapper">

        </div>
        <button class="formbold-btn" style="margin-left:490px; margin-top:-70px;">Create</button>
    </form>
  </div>
</div>


           
        </form>
      </div>
    </div>
  </div>
</div>

<script src="assets/js/validation.js"></script>

</body>
<footer id=footer class="footer-area pt-120">
  <div class=container>
    <div class=row>
      <div class="col-xl-3 col-lg-3 col-md-6">
        <div class=footer-widget>
          <a href=index.html class="logo d-blok">
            <img src="{{ asset('/assets/images/logo.svg') }}" alt="" data-pagespeed-url-hash=3852796712 onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
          </a>
          <p>Education and Online Course Site.</p>
<p>Flexible learning lets you study wherever and whenever suits your schedule.</p>
        </div>
      </div>
      <div class="col-xl-2 col-lg-2 offset-xl-1 offset-lg-1 col-md-6">
        <div class=footer-widget>
          <h5>Quick Links</h5>
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
    
  </div>
</footer>
</html>
