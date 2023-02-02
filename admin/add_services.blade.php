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
      	

      		<form action="{{url('upload_services')}}" method="POST" enctype="multipart/form-data">

      			@csrf

      		<div style="padding: 15px;">

      			<label>Service Name</label>
      			<input type="text" style="color: black;" name="name" placeholder="Write the name">
      			
      		</div>
          <span style="color: red">
              
              @error('name')

              {{$message}}

              @enderror

            </span>

      		<div style="padding: 15px;">

      			<label>Service Price</label>
      			<input type="text" style="color: black;" name="price" placeholder="Write the price">
            
      			
      		</div>
          <span style="color: red">
              
              @error('price')

              {{$message}}

              @enderror

            </span>


                   	

      		<div style="padding: 15px;">

      			<label>Service Image</label>
      			<input type="file" name="file">
           
      			
       		</div> 
           <span style="color: red">
              
              @error('file')

              {{$message}}

              @enderror

            </span>     		


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