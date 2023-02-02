
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')

  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">"Whoever pursues righteousness and love finds life, prosperity, and honor."</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Proverbs 21:21</a>
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

        <div class="content-wrapper">
        <div class="row">
        <div class="col-12">

          
      		<div align="center" style="padding-top: 100px;">

        <div class="card">

        <div class="table-responsive">
        <table class="table">
      		
      		<tr style="background-color: white;">
      			
            <th style="text-align: center;">Service Name</th>
            <th style="text-align: center;">Price</th>
      		<th style="text-align: center;">Image</th>
            <th style="text-align: center;">Update</th>


      		</tr>

      			@foreach($data as $services)
      			<tr align="center" style="background-color: black;">
      				  
      			<td>{{$services->name}}</td>
      			<td>{{$services->price}}</td>
            <td><img height="100" width="100"src="servicesimage/{{$services->image}}"></td>
                
            <td><a class="btn btn-primary" href="{{url('updateservices',$services->id)}}">Update</a></td>


      			</tr>

      				@endforeach

      			</table>

      		</div>



      </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
   		@include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>