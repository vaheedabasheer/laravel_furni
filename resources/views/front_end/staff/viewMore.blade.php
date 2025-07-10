      @extends('front_end.staff.staff_header')
      @section('content')
       <!-- Start Hero Section -->
			<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
							
								<h1>Modern Interior <span class="d-block">Design Studio</span></h1>
								<h2 style="color:white;">View<span class="d-block"> Registration</span></h2>
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
        <table class="table table-success table-striped">

  @foreach($data as $dat)
    <tr>
      <th scope="col">photo</th>
      <td> <img src="{{ asset('storage/images/' . $dat->file) }}" width="300" alt="User Photo">

</td>
   </tr>
   <tr>
     <th scope="col">Name</th>
    <td>{{$dat->name}}</td>
   </tr>
     <tr>
        <th scope="col">Email</th>
          <td>{{$dat->email}}</td>
     </tr>
<tr>
    <th scope="col">DOB</th>
     <td>{{$dat->dob}}</td>
</tr>
      <tr>
            <th scope="col">Contact Number</th>
             <td>{{$dat->phone}}</td>
      </tr>
  <tr>    <th scope="col">Address</th>
        <td>{{$dat->address}}</td>
</tr>
<tr>
  <th>Actions</th>
  <td><button class="btn btn-primary">Edit</button><button class="btn btn-secondery">Delete</button></td>
</tr>
@endforeach
</table>



    </center>
    <br><br><br><br><br><br><br><br>
@stop
