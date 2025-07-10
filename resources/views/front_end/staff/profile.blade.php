      @extends('front_end.staff.staff_header')
      @section('content')
       <!-- Start Hero Section -->
			<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
							
								<h1>Modern Interior <span clsas="d-block">Design Studio</span></h1>
								<h2 style="color:white";>View<span clsas="d-block"> Registration</span></h2>
								<p class="mb-4">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique.</p>
								<p><a href="" class="btn btn-secondary me-2">Shop Now</a><a href="#" class="btn btn-white-outline">Explore</a></p>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="hero-img-wrap">
								
                <img src="{{ asset('images/couch.png') }}" alt="Image">

							</div>
						</div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->
  <br><br>
<center>
<div class="card" style="width: 18rem;">

  <div class="card-body">
    <h5 class="card-title fw-bold text-uppercase">{{$user->name}}</h5>
    <p class="card-text"></p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Email: {{$user->email}}</li>
    <li class="list-group-item">Dob: {{$user->dob}}</li>
    <li class="list-group-item">Contact Number: {{$user->phone}}</li>
  </ul>
  <div class="card-body">
    <a href="{{route('staff.viewMore')}}" class="card-link">View More</a>
    <a href="{{route('staff.fileCreate')}}" class="card-link">Add More</a>

  </div>   
</div>
 <br><br>
    </center>
    <br>
@stop
