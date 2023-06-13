<html lang="en"><head>
	<meta charset="UTF-8">
	<title>Profile</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/Pstyle.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/button.css') }}">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
@extends('samepart_layout')
@section('the_same_part')
<body> 
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
 
	<section class="py-5 my-5" >
		<div class="container">
			<h1 class="mb-5">Account Settings</h1>
			<div class="bg-white shadow rounded-lg d-block d-sm-flex">
				<div class="profile-tab-nav border-right">
					<div class="p-4">
						<div class="img-circle text-center mb-3">
							<img src="{{ asset('/assets/images/myaccount-icon-5.jpg-removebg-preview.png') }}" alt="Image" class="shadow">
						</div>
						<h4 class="text-center">{{auth()->user()->name}}</h4>
					</div>
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link active" id="account-tab" data-toggle="pill" href="#account" role="tab" aria-controls="account" aria-selected="true">
							<i class="fa fa-home text-center mr-1"></i> 
							Account
						</a>
						<a class="nav-link" id="password-tab" data-toggle="pill" href="#password" role="tab" aria-controls="password" aria-selected="false">
							<i class="fa fa-key text-center mr-1"></i> 
							Password
						</a>
						<a class="nav-link" id="password-tab"  href="/"  >
							<i class="fa fa-key text-center mr-1"></i> 
							Home
						</a>
						
					</div>
				</div>
				<div class="tab-content p-4 p-md-5" id="v-pills-tabContent" style="width: 650px" >
					<div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
						<h3 class="mb-4" style="margin-left: 30px;" >Account Settings</h3>
						<div class="row" style="width: 650px" >
							<div class="col-md-6">
								<div class="form-group">
								  	<label> Name</label>
								  	<input type="text" class="form-control" value="{{auth()->user()->name}}" style="width: 450px">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
							
								  	
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Email</label>
								  	<input type="text" class="form-control" value="{{auth()->user()->email}}" style="width: 450px" >
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
						
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
							
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
								  	
									
								</div>
							</div>
						</div>
						<div>
				
						
									<form method="POST" action="/logout"  >
									@csrf
									<button class="login" type="submit" style="margin-left: 30px;">
									Log Out
                                    </button>
                                    </form>
						
						
						
						</div>
					</div>
					<form method="POST" action="{{ route('update-password') }}" style="width: 650px" >
					@csrf
					<div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab" style="width: 1000px !important;" >
						<h3 class="mb-4" style="margin-left: 30px; margin-top:10px;" >Password Settings</h3>
						<div class="row" style="width: 900px !important;" >
							<div class="col-md-6" style="width: 900px !important;" >
								<div class="form-group">
								  	<p>Old password</p>
								  	<input type="password" class="form-control" name="old_password" style="width: 450px">
								</div>
							</div>
						</div>
						<div class="row" style="width: 650px" >
							<div class="col-md-6" style="width: 900px" >
								<div class="form-group">
								  	<p>New password</p>
								  	<input type="password" class="form-control"  name="new_password" style="width: 450px">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<p>Confirm new password</p>
								  	<input  type="password" class="form-control" name="new_password_confirmation" style="width: 450px" >
								</div>
							</div>
						</div>
						<div >
                            <button class="login" style="margin-left: 30px;" >Change</button>
                        </div>
					
					</div>
                    </form>
					</div>
				</div>
			</div>
		</div>
	</section>

</body>
<script src="//unpkg.com/alpinejs" defer></script>
</html>
@endsection