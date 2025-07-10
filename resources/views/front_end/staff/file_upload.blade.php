   @extends('front_end.staff.staff_header')
      @section('content')
       <!-- Start Hero Section -->
			<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
							
								<h1>Modern Interior <span clsas="d-block">Design Studio</span></h1>
								<h2 style="color:white";>View<span clsas="d-block"> Upload Your Photo</span></h2>
								<p class="mb-4"></p>
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
	  <form action="{{route('staff.fileUpload')}}" method="post" enctype="multipart/form-data">
        @csrf
           <br><br>
		   <center>
		   <table>
			<tr>
				<td>Upload your photo</td>
				<td>  <input type="file" name="image" required></td>
      
       			
			</tr>
		<tr>
			<td>Address:</td>
			<td><textarea name="address" id=""></textarea></td>
		</tr>
		<tr >
			<td></td>
		<center><td><button type="submit" name="submit">Submit</button></td></center>
		</tr>
		</table>
		<br><br><br><br>
		</center>
    </form>
     @stop