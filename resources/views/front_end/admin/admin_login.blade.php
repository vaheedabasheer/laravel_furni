@extends('front_end.layouts.app')
@section('content')

	<!-- Start Hero Section -->
			<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>Join Our Family</h1>
								<p class="mb-4">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique.</p>
								<p><a href="" class="btn btn-secondary me-2">Shop Now</a><a href="#" class="btn btn-white-outline">Explore</a></p>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="hero-img-wrap">
								<img src="{{asset('images/couch.png')}}" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->
         
        <!-- Start Why Choose Us Section -->
		<div class="why-choose-section">
			<div class="container">
				<div class="row justify-content-between align-items-center">
					<div class="col-lg-6">
						<h2 class="section-title">Login/Register</h2>
                        <div class="row my-5">
							<div class="col-6 col-md-6">
					<form action="{{route('do.adminLogin')}}" method="post">
						@csrf
                        <table>
							@if(session('success'))
							<center><p style="color:green";>{{session('success')}}</p></center>
							@endif
							@if(session('message'))
							<center><p style="color:red";>{{session('message')}}</p></center>
							@endif
                            <tr>
                                 <div class="form-group">
                                <td>Email</td>
                            </div>
                            	<div class="col-6 col-md-6">
                                    <td><input type="email" name="email"  class="form-control"></td>
                                </div>
</div>
                            </tr>

                            <tr>
                               
                            <div class="col-6 col-md-6">
                              
                                <div class="form-group">
                                           
                                    <td>  <br> Password</td>
                            </div>
                            <div class="col-6 col-md-6">
                                    <td>  <br><input type="password" name="password"  class="form-control"></td>
                            </div>
                                </div>
                            </tr>
    				        <tr>
                                 <!-- <div class="form-group">
                                <td>Catagory</td>
                            </div>
                            	<div class="col-6 col-md-6">
                                    <td><br> -->
										<!-- <select name="type" id="" class="form-control">
											<option value="">Select Catagory</option>
											<option value="admin">Admin</option>
										
										</select> -->
									</td>
                                </div>
							</div>
                            </tr>
                            <tr>
                              
                            <div class="col-6 col-md-6">
                               
                                <div class="form-group">
                              
                        <td colspan="2"><center><br><button type="submit" name="submit" class="btn btn-primary-hover-outline">Login</button></center></td>
                            </div>
                                 </div>
                            </tr>
                        </table>
                    </form>
</div>


						<p><br><center>New User? <a href="{{route('admin.registration')}}" style="color:red";>Register Now</center></a></p>

						</div>
					</div>

					<div class="col-lg-5">
						<div class="img-wrap">
							<img src="{{asset('images/why-choose-us-img.jpg')}}" alt="Image" class="img-fluid">
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- End Why Choose Us Section -->
@stop