<!doctype html>
<html class=no-js lang=en>
<head>
	<meta charset=utf-8>

	<title>Learn - Education & Online Course Website</title>
	<meta name=description content="">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<link rel=stylesheet  href="{{ asset('/assets/css/A.animate.css+tiny-slider.css+glightbox.min.css+LineIcons.2.0.css+bootstrap-5.0.5-alpha.min.css,Mcc.Gwyb6DYDia.css.pagespeed.cf.bdCy2eMFcs.css') }}" >
	<link rel=stylesheet  href="{{ asset('/assets/css/A.style.css.pagespeed.cf.0s5kiYJruP.css') }}" >
	<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/button.css') }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class=preloader>
	<div class=loader>
		<div class=ytp-spinner>
			<div class=ytp-spinner-container>
				<div class=ytp-spinner-rotator>
					<div class=ytp-spinner-left>
						<div class=ytp-spinner-circle></div>
					</div>
					<div class=ytp-spinner-right>
						<div class=ytp-spinner-circle></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<header class=header_area>
	<div id=header_navbar class=header_navbar>
		<div class=container>
			<div class="row align-items-center">
				<div class=col-xl-12>
					<nav class="navbar navbar-expand-lg">
						<a class=navbar-brand href="/">
							<img id=logo src="assets/images/logo.svg" alt=Logo data-pagespeed-url-hash=3852796712 onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
						</a>
						<button class=navbar-toggler type=button data-toggle=collapse data-target="#navbarSupportedContent" aria-controls=navbarSupportedContent aria-expanded=false aria-label="Toggle navigation">
							<span class=toggler-icon></span>
							<span class=toggler-icon></span>
							<span class=toggler-icon></span>
						</button>
						<div class="collapse navbar-collapse sub-menu-bar" id=navbarSupportedContent>
							<ul id=nav class="ml-auto navbar-nav">
								@Auth
								@if(Auth::user()-> role == '1')
								<li >
									<a class="account" href="/admin/mentors">Mentors</a>
								</li>
								<li >
									<a class="account" href="/admin/courses">Courses</a>
								</li>

								<li >
									<a href="/profile" class="account" >  Welcome {{auth()->user()->name}}  </a>
								</li>
								<li>
									<form method="POST" action="/logout" >
									@csrf
									<button class="login" type="submit">
									    <i>Logout</i>
                                    </button>
                                    </form>
								</li>

								@endif
								@endAuth
		
                                @Auth
								@if(Auth::user()-> role == '0')
								<li class=nav-item>
									<a class=page-scroll href="#courses">Courses</a>
								</li>
								<li class=nav-item>
									<a class=page-scroll href="#mentors">Mentors</a>
								</li>
						
					
								 <li class=nav-item>
									<a class=page-scroll href="#contact">Contact</a>
								</li>
								<li >
									<span>
									<a href="/profile" class="account" >  Welcome {{auth()->user()->name}}  </a>
                                    </span>
								</li>
							
								<li>
									<form method="POST" action="/logout" >
									@csrf
									<button class="login" type="submit">
									    <i>Logout</i>
                                    </button>
                                    </form>
								</li>
								@endif
							
							     @else 
								 <li class=nav-item>
									<a class=page-scroll href="#courses">Courses</a>
								</li>
								<li class=nav-item>
									<a class=page-scroll href="#mentors">Mentors</a>
								</li>
								<li class=nav-item>
									<a class=page-scroll href="#blog">Blog</a>
								</li>
					
								 <li class=nav-item>
									<a class=page-scroll href="#contact">Contact</a>
								</li>
								<li class=nav-item>
									<a class="header-btn btn-hover" href="/signin">Sign in</a>
								</li>
								@endAuth
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</div>
</header>

<section id=home class="hero-area bg_cover">
	<div class=container>
		
		<div class="row align-items-center">
			<div class="col-xl-5 offset-xl-7 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
				<div class=hero-content>
				
					<h2 class="mb-30 wow fadeInUp" data-wow-delay=.2s>Education and Online Courses</h2>
					<p class="wow fadeInUp" data-wow-delay=.4s>Flexible learning lets you study wherever and whenever suits your schedule.</p>
					<div class=hero-btns>
						
						<a href="#courses" class="main-btn wow fadeInUp" data-wow-delay=.6s>Courses</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class=hero-left>
		<img class="hero" src="assets/images/hero1-img.png" alt="" data-pagespeed-url-hash=2709926222 onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
		<img src="assets/images/dot-shape.svg" alt="" class=shape data-pagespeed-url-hash=2289618252 onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
	</div>
</section>

<section id=skill class="skill-area pt-170">
	<div class=container>
		<div class=row>
			<div class="mx-auto col-xl-6 col-lg-7 col-md-10">
				<div class="text-center section-title">
					<h2 class="mb-15 wow fadeInUp" data-wow-delay=.2s>Learn New Skills</h2>
					<p class="wow fadeInUp" data-wow-delay=.4s></p>
				</div>
			</div>
		</div>
		<div class=row>
			<div class="col-xl-4 col-lg-4 col-md-6">
				<div class="single-skill wow fadeInUp" data-wow-delay=.2s>
					<div class=skill-icon>
						<i class="lni lni-pencil-alt"></i>
					</div>
					<div class=skill-content>
						<h4>Learn Anything</h4>
						<p>With thousands of resources, you can learn about any topic that interests you.</p>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-6">
				<div class="single-skill wow fadeInUp" data-wow-delay=.4s>
					<div class=skill-icon>
						<i class="lni lni-grid-alt"></i>
					</div>
					<div class=skill-content>
						<h4>Large Collection</h4>
						<p>The bigger the collection, the more opportunities people have to discover something new.</p>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-6">
				<div class="single-skill wow fadeInUp" data-wow-delay=.6s>
					<div class=skill-icon>
						<i class="lni lni-certificate"></i>
					</div>
					<div class=skill-content>
						<h4>Certified Instructors</h4>
						<p>Certified instructors are a prerequisite for precise training.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id=courses class="course-area pt-140 pb-170">
	<div class=container>
		<div class=row>
			<div class="mx-auto col-xl-6 col-lg-7 col-md-10">
				<div class="text-center section-title mb-50">
					<h2 class="mb-15 wow fadeInUp" data-wow-delay=.2s>Popular Courses</h2>
					<p class="wow fadeInUp" data-wow-delay=.4s></p>
				</div>
			</div>
		</div>
		<div class="row mb-30">
		@foreach($courses as $courses)
			<div class="col-xl-4 col-lg-4 col-md-6">

				<div class="single-course wow fadeInUp" data-wow-delay=.2s>
					<div class=course-img>
	
						<a href="/{{$courses->slug}}">
							<img src="{{ asset('images/' . $courses->image_path)}}" alt="" data-pagespeed-url-hash=1975346514 onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
						</a>
					</div>
				
					<div class=course-info>
						<h4>
							<a href="{{'/slug'}}">{{$courses->title}}</a>
						</h4>
						<div class=course-meta>
							<div class=meta-item>
								<i class="lni lni-user"></i>
								<span>3.5k</span>
							</div>
							<div class=meta-item>
								<i class="lni lni-eye"></i>
								<span>12k</span>
							</div>
							<div class=meta-item>
								<i class="lni lni-star"></i>
								<span>5.0</span>
							</div>
							<div class=price>
								<span>${{$courses->price }}</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			@endforeach
			
</section>

<section class=welcome-area>
	<div class=container>
		<div class="row align-items-center">
			<div class="col-xl-6 col-lg-6">
				<div class=welcome-content>
					<div class=section-title>
						<h2 class="mb-35 wow fadeInUp" data-wow-delay=.2s>Welcome To
							Online Learning</h2>
					</div>
					<div class=content>
						<p class="mb-35 wow fadeInUp" data-wow-delay=.4s> </p>
						<a href="javascript:void(0)" class="read-more-btn wow fadeInUp" data-wow-delay=.5s>
							Read More
							<i class="lni lni-arrow-right"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="col-xl-6 col-lg-6">
				<div class=welcome-img>
					<img src="assets/images/xwelcome-img.png.pagespeed.ic.3nMViUgewR.png" alt="" data-pagespeed-url-hash=3324026640 onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
				</div>
			</div>
		</div>
	</div>
</section>

<section class="categories-area pt-170 pb-170">
	<div class=container>
		<div class=row>
			<div class="mx-auto col-xl-8 col-lg-10">
				<div class="text-center section-title">
					<h2 class="wow fadeInUp" data-wow-delay=.2s>Top Categories</h2>
					<p class="wow fadeInUp" data-wow-delay=.4s>  </p>
				</div>
			</div>
		</div>
		<div class="row mb-30">
		@foreach($categories  as $category )
			<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
				<a href="/category/{{$category->slugg}}" class="d-block category-wrapper">
					<div class=single-category>
						<i class="lni lni-pallet"></i>
						<h3>{{$category -> name }}</h3>
					</div>
				</a>
			</div>
			@endforeach
		</div>
		<div class=row>
			<div class=col-xl-12>
				<div class="text-center view-all-btn">
					<a href="javascript:void(0)" class=main-btn>View All Course</a>
				</div>
			</div>
		</div>
	</div>
</section>

<section id=why class=video-area>
	<div class=container>
		<div class=row>
			<div class="col-xl-6 col-lg-6 offset-xl-6 offset-lg-6">
				<div class=video-content-wrapper>
					<div class=section-title>
						<h2 class="wow fadeInUp" data-wow-delay=.2s>What Makes Us Different?</h2>
						<p class="wow fadeInUp" data-wow-delay=.4s>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos accusam.</p>
					</div>
					<div class=specialty-wrapper>
						<div class=specialty-item>
							<div class=specialty-icon-wrapper>
								<div class=specialty-icon>
									<i class="lni lni-grid-alt"></i>
								</div>
							</div>
							<div class=specialty-content>
								<h4>200+ Online Course</h4>
								<p>Lorem ipsum dolor sit amet, consetetur sadips cinelitr, sed diam nonumy eirmod tempor</p>
							</div>
						</div>
						<div class=specialty-item>
							<div class=specialty-icon-wrapper>
								<div class=specialty-icon>
									<i class="lni lni-users"></i>
								</div>
							</div>
							<div class=specialty-content>
								<h4>Expert Instructors</h4>
								<p>Lorem ipsum dolor sit amet, consetetur sadips cinelitr, sed diam nonumy eirmod tempor</p>
							</div>
						</div>
						<div class=specialty-item>
							<div class=specialty-icon-wrapper>
								<div class=specialty-icon>
									<i class="lni lni-support"></i>
								</div>
							</div>
							<div class=specialty-content>
								<h4>Lifetime Access & Support</h4>
								<p>Lorem ipsum dolor sit amet, consetetur sadips cinelitr, sed diam nonumy eirmod tempor</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class=video-wrapper>
		<img src="assets/images/video-bg.jpg" alt="" data-pagespeed-url-hash=4212479441 onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
		<div class=video-btn>
			<a href="#" class="play-btn glightbox">
				<i class="lni lni-play"></i>
			</a>
		</div>
	</div>
</section>

<section id=mentors class="team-area pt-170 pb-140">
	<div class=container>
		<div class=row>
			<div class="mx-auto col-xl-6 col-lg-7 col-md-10">
				<div class="text-center section-title">
					<h2 class="wow fadeInUp" data-wow-delay=.2s>Our Expert Instructors</h2>
					<p class="wow fadeInUp" data-wow-delay=.4s> </p>
				</div>
			</div>
		</div>
		<div class=row>
			@foreach($mentors as $mentors)
			<div class="col-xl-3 col-lg-3 col-md-6">
				<div class=single-team>
					<div class=team-img>
			
						<img src="{{ asset('images/' . $mentors->image_path)}}"  alt="" data-pagespeed-url-hash=3470830167 onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
						<div class=social-link>
			
							<ul>
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
							</ul>
						</div>
					</div>

					<div class=team-info>
						<h4 > {{$mentors->full_name}}</h4>
						<p class='fas fa-graduation-cap' >{{$mentors->profession}}</p> <br></br>
						<p class="fa fa-envelope">{{$mentors->email}}</p> <br></br>
						<p class="fa fa-phone" >{{$mentors->phone_number}}</p>
					</div>
					
				</div>
			</div>
			@endforeach
			
		</div>
	</div>
</section>

<section class="testimonial-area pt-80 pb-90" style="background: #FBFBFB">
	<div class=container>
		<div class=row>
			<div class="mx-auto col-xl-6 col-lg-7 col-md-10">
				<div class="text-center section-title mb-50">
					<h2 class="mb-15 wow fadeInUp" data-wow-delay=.2s>What Our Ex-Students Says</h2>
				</div>
			</div>
		</div>
		<div class=row>
			<div class="mx-auto col-xl-6 col-lg-8">
				<div id=customize_wrapper class=testimonial-wrapper>
					<div class=customize-tools>
						<ul class="thumbnails d-flex justify-content-center" id=customize-thumbnails>
							<li>
								<img src="assets/images/testimonial/xtestimonial-1.png.pagespeed.ic.23wdjr7Nk3.png" alt="" data-pagespeed-url-hash=1111510727 onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
							</li>
							<li>
								<img src="assets/images/testimonial/testimonial-2.png" alt="" data-pagespeed-url-hash=1406010648 onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
							</li>
							<li>
								<img src="assets/images/testimonial/xtestimonial-3.png.pagespeed.ic.iF1YBPilV5.png" alt="" data-pagespeed-url-hash=1700510569 onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
							</li>
						</ul>
					</div>
					<div class=customize id=customize>
						<div class=testimonial-content-wrapper>
							<div class=testimonial-info>
								<h4>Michel Sdmith</h4>
								<p>120 Bach Student</p>
							</div>
							<div class=testimonial-content>
								<p>"Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam era seddiam voluptua. At vero eos accusam justo duo dolores rebum."</p>
							</div>
						</div>
						<div class=testimonial-content-wrapper>
							<div class=testimonial-info>
								<h4>Tulsi Kumer</h4>
								<p>Web Designer</p>
							</div>
							<div class=testimonial-content>
								<p>"Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam era seddiam voluptua. At vero eos accusam justo duo dolores rebum."</p>
							</div>
						</div>
						<div class=testimonial-content-wrapper>
							<div class=testimonial-info>
								<h4>John Doe</h4>
								<p>UX Ui Designer</p>
							</div>
							<div class=testimonial-content>
								<p>"Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam era seddiam voluptua. At vero eos accusam justo duo dolores rebum."</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id=blog class="blog-area pt-170 pb-140">
	<div class=container>
		<div class=row>
			<div class="col-xl-6 col-lg-7">
				<div class=section-title>
					<h2 class="wow fadeInUp" data-wow-delay=.2s>From The Blog</h2>
					<p class="wow fadeInUp" data-wow-delay=.4s> </p>
				</div>
			</div>
		</div>
		<div class=row>
			<div class="col-xl-4 col-lg-4 col-md-6">
				<div class=single-blog>
					<div class=blog-img>
						<a href="javascript:void(0)" class=d-block>
							<img src="assets/images/blog/xblog-1.jpg.pagespeed.ic._pKbRKqmbJ.jpg" alt="" data-pagespeed-url-hash=1891564331 onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
						</a>
					</div>
					<div class=blog-content>
						<h4>
							<a href="javascript:void(0)">Modern website design
								tools</a>
						</h4>
						<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr sed diam.</p>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-6">
				<div class=single-blog>
					<div class=blog-img>
						<a href="javascript:void(0)" class=d-block>
							<img src="assets/images/blog/xblog-2.jpg.pagespeed.ic.7Kq6VrFYFl.jpg" alt="" data-pagespeed-url-hash=2186064252 onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
						</a>
					</div>
					<div class=blog-content>
						<h4>
							<a href="javascript:void(0)">How To install SSL</a>
						</h4>
						<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr sed diam.</p>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-6">
				<div class=single-blog>
					<div class=blog-img>
						<a href="javascript:void(0)" class=d-block>
							<img src="assets/images/blog/blog-3.jpg" alt="" data-pagespeed-url-hash=2480564173 onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
						</a>
					</div>
					<div class=blog-content>
						<h4>
							<a href="javascript:void(0)">Getting started with Figma</a>
						</h4>
						<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr sed diam.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id=contact class=contact-area>
	<div class=map-bg>
		<img src="assets/images/map-bg.svg" alt="" data-pagespeed-url-hash=2393198235 onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
	</div>
	<div class=container>
		<div class=row>
			<div class="col-xl-5 col-lg-5">
				<div class=section-title>
					<h2 class="wow fadeInUp" data-wow-delay=.2s>Get In Touch</h2>
					<p class="wow fadeInUp" data-wow-delay=.4s>
						
					</p>
				</div>
				<div class=contact-content>
					<h3>Hot Line Call Us 24/7</h3>
					<h4>
						<a href="javascript:void(0)">000-2222-5555</a>
					</h4>
					<h4>
						<a href="javascript:void(0)">
							<span class="__cf_email__" data-cfemail="49212c252526092e24282025672a2624">[email&#160;protected]</span>
						</a>
					</h4>
				</div>
			</div>
			<div class="col-xl-7 col-lg-7">
				<div class=contact-form-wrapper>
					<form action="{{route('contactsubmit')}}" method="POST">
						@csrf
						<div class=row style="width: 720px !important;" >
							<div class=col-md-6>
								<input type=text placeholder=Name  name="name" id=name>
							</div>
							<div class=col-md-6>
								<input type=email placeholder=Email name="email" id=email>
							</div>
						</div>
						<div class=row style="width: 720px !important;" >
							<div class=col-12>
								<input type=text placeholder=Subject name="subject" id=subject>
							</div>
						</div>
						<div class=row style="width: 720px !important;">
							<div class=col-12 style="width: 720px !important;">
								<textarea name="msg" id=message rows=4 placeholder=Message></textarea>
							</div>
						</div>
						<div class=row style="width: 720px !important;" >
							<div class="text-right col-12">
								<button class="main-btn btn-hover" type=submit>Send</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

<footer id=footer class="footer-area pt-170">
	<div class=container>
		<div class=row>
			<div class="col-xl-3 col-lg-3 col-md-6">
				<div class=footer-widget>
					<a href=welcome.blade.php class="logo d-blok">
						<img src="assets/images/logo.svg" alt="" data-pagespeed-url-hash=3852796712 onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
					</a>
					<p>Lorem ipsum dolor sit amco nsetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna .</p>
				</div>
			</div>
			<div class="col-xl-2 col-lg-2 offset-xl-1 offset-lg-1 col-md-6">
				<div class=footer-widget>
					<h5>Quick Links</h5>
					<ul>
						<li>
							<a href="javascript:void(0)">Home</a>
						</li>
						<li>
							<a href="javascript:void(0)">Courses</a>
						</li>
						<li>
							<a href="javascript:void(0)">Eventd</a>
						</li>
						<li>
							<a href="javascript:void(0)">Blog</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-xl-2 col-lg-2 col-md-6">
				<div class=footer-widget>
					<h5>Our Course</h5>
					<ul>
						<li>
							<a href="javascript:void(0)">Design</a>
						</li>
						<li>
							<a href="javascript:void(0)">Development</a>
						</li>
						<li>
							<a href="javascript:void(0)">Marketing</a>
						</li>
						<li>
							<a href="javascript:void(0)">SEO Design</a>
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
								<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="97fff2fbfbf8d7f0faf6fefbb9f4f8fa">[email&#160;protected]</a>
							</p>
						</li>
						<li>
							<p>
								Address: Random Road
								<br>
								USA
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

<a href="#" class="back-to-top btn-hover">
	<i class="lni lni-chevron-up"></i>
</a>

<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="assets/js/bootstrap.bundle-5.0.0.alpha-min.js.pagespeed.jm.U5mbHIrpKf.js"></script>

<script src="assets/js/tiny-slider.js+wow.min.js+glightbox.min.js.pagespeed.jc.d9QMQEFdh4.js"></script>
<script>
	eval(mod_pagespeed_hihALcpvRO);
</script>

<script>
	eval(mod_pagespeed_Jh6q3ESwpC);
</script>

<script>
	eval(mod_pagespeed_bx_ynVC7rn);
</script>

<script src="assets/js/contact-form.js+main.js.pagespeed.jc.z2KqcZtQFM.js"></script>
<script>
	eval(mod_pagespeed_JShJiPnb$z);
</script>

<script>
	eval(mod_pagespeed_nDQA9CY_09);
</script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</body>
</html>
