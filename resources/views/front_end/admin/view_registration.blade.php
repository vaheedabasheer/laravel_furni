      @extends('front_end.layouts.admin_header')
      @section('content')
    <!-- Start Hero Section -->
			<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								@if(session('success'))
								<center><h3 style="color:green">{{session('success')}}</h3></center>
								@endif
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
     <center><h3 style="color:green";>All Registrations</h3></center>
     <br>
        <form action="">
        <table class="table table-success table-striped">

  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Age</th>
      <th scope="col">Contact Number</th>
      <th scope="col">type</th>
       <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
       @foreach($users as $user)
    <tr>
<td>{{$loop->iteration}}</td>
              
   <td>{{$user->name}}</td>
   <td>{{$user->email}}</td>
  <td>{{ \Carbon\Carbon::parse($user->dob)->age }}</td>
   <td>{{$user->phone}}</td>
   <td>{{$user->type}}</td>
  <td colspan="2">
    <a href="">Edit/</a>
    <a href="{{route('admin.delete',encrypt($user->rid))}}">Delete</a>
   
  </td>
    </tr>
    @endforeach
  </tbody>
</table>
<div>
  {{$users->links()}}
</div>
    </form>
<br><br><br><br><br>

@stop
     
    

  