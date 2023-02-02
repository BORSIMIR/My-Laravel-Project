
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
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



        <form action="{{url('search1')}}" method="get">
        	<a href="{{route('export_patient_pdf5')}}" class="btn btn-success">Convert All Into PDF</a>

          </form>



      	<div class="table-responsive">
        <table class="table" id="myhealth">
      		
          <thead>
      		<tr style="background-color: white;">
      			
      			
            
            <th style="text-align:center;">Full Name</th>
            <th style="text-align:center;">Date of Medical</th>
      		  <th style="text-align:center;">Illness</th>     		
      		  <th style="text-align:center;">Address</th>
            <th style="text-align:center;">Age</th>
            <th style="text-align:center;">Birth Date</th>
            <th style="text-align:center;">Sex</th>
            <th style="text-align:center;">Civil Status</th>
            </tr>
            </thead>

            <tbody>
            
      		@foreach($data as $user)

      		<tr align="center" style="background-color: black;">
      			
      			

      		
            <td>{{$user->name}}</td>

            <td>{{$user->date}}</td>

            <td>{{$user->illness}}</td>

      		  <td>{{$user->address}}</td>

            <td>{{$user->birthdate}}</td>

            <td>{{$user->age}}</td>

            <td>{{$user->sex}}</td>

            <td>{{$user->civil}}</td>

          

            



      		</tr>

      		@endforeach
          </tbody>
      	</table>



        </table>
      </div>
      </div>
      </div>
      </div>
      </div>
      	
      </div>



      </div>


    <!-- container-scroller -->
    <!-- plugins:js -->
   		@include('admin.script')
      <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

<script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

<script>$(document).ready( function () {
    $('#myhealth').DataTable();
} );</script>
    <!-- End custom js for this page -->
  </body>
</html>