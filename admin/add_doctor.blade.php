
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    <style type="text/css">

    	label
    	{
    		display: inline-block;


    		width: 200px;
    	}
    	
    </style>



    @include('admin.css')

  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">"Whoever heeds discipline shows the way to life, but whoever ignores correction leads others astray."</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Proverbs 10:17</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">

              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>

      <!-- partial:partials/_sidebar.html -->

      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->

        <div class="main-panel">
        <div class="content-wrapper">
        <div class="row">
        <div class="col-12">
        <div class="card">
        <div class="card-body">
      <div class="container-fluid page-body-wrapper">
      
  


      <div class="container" align="center" style="padding-top: 100px;">

      	@if(session()->has('message'))

      	<div class="alert alert-success">
      		
      		<button type="<button" class="close" data-dismiss="alert">
      			
      		</button>

      		{{session()->get('message')}}


      	</div>


      	@endif
      	

      		<form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">

      			@csrf

      		<div style="padding: 15px;">

      			<label>Doctor Name</label>
      			<input type="text" style="color: black;" name="name" placeholder="Write the name">
      			
      		</div>


      		<div style="padding: 15px;">

      			<label>Speciality</label>
      			<input type="text" style="color: black;" name="speciality" placeholder="Write the speciality">
      			
      		</div>   	

          <div style="padding: 15px;">

            <label>Schedule 1</label>
            <input type="text" style="color: black;" name="schedule1" placeholder="Write the schedule">
            
          </div> 

          <div style="padding: 15px;">

            <label>Schedule 2</label>
            <input type="text" style="color: black;" name="schedule2" placeholder="Write the schedule">
            
          </div> 

          <div style="padding: 15px;">

            <label>Schedule 3</label>
            <input type="text" style="color: black;" name="schedule3" placeholder="Write the schedule">
            
          </div>                     	

      		<div style="padding: 15px;">

      			<label>Doctor Image</label>
      			<input type="file" name="file">
      			
       		</div>      		


      		<div style="padding: 15px;">

      			<input type="submit" class="btn btn-success">
      			
       		</div>



      	</form>




      </div>


      </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
   		@include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>