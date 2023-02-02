
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <!-- Latest compiled and minified CSS -->
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->

<!-- Latest compiled and minified JavaScript -->
<!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>-->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<link rel="stylesheet"  href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
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

          
      		<div align="" style="padding-top: 100px;">

            <form action="{{url('search2')}}" method="get">
              <a href="{{route('export_doctor_pdf3')}}" class="btn btn-danger">Convert All Into PDF</a>

              

            
          </form>
          
        

        <div class="table-responsive">
        <table class="table" id="mydoc">
      		<thead>
      		<tr style="background-color: white;">
      			
            <th style="text-align: center;">ID</th>
      			<th style="text-align: center;">Doctor Name</th>
      			<th style="text-align: center;">Specialty</th>
            <th style="text-align: center;">Schedule 1</th>
            <th style="text-align: center;">Schedule 2</th>
            <th style="text-align: center;">Schedule 3</th>
      			<th style="text-align: center;">Image</th>

            <th style="text-align: center;">Update</th>


      		</tr>
          </thead>
            <tbody>
      			@foreach($data as $doctor)
      			<tr align="center" style="background-color: black;">
      				  
                <td>{{$doctor->id}}</td>
      					<td>{{$doctor->name}}</td>
      					<td>{{$doctor->speciality}}</td>
                <td>{{$doctor->schedule1}} {{$doctor->sched1}} {{$doctor->sched2}}</td>
                <td>{{$doctor->schedule2}} {{$doctor->sched3}} {{$doctor->sched4}}</td>
                <td>{{$doctor->schedule3}} {{$doctor->sched5}} {{$doctor->sched6}}</td>
                <td><img height="100" width="100"src="doctorimage/{{$doctor->image}}"></td>
                
                <td><a class="btn btn-primary" href="{{url('updatedoctor',$doctor->id)}}">Update</a></td>


      			</tr>

      				@endforeach
              </tbody>
      			</table>

            

      		</div>



      </div>

                 
    <!-- container-scroller -->
    <!-- plugins:js -->
   		@include('admin.script')
      <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

<script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

<script>$(document).ready( function () {
    $('#mydoc').DataTable();
} );</script>
    <!-- End custom js for this page -->
  </body>
</html>