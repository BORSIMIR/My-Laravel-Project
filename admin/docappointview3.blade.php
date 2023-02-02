
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



      <div align="center" style="padding-top: 100px;">

        

        <div class="table-responsive">
        <table class="table" id="mydocapp">
          <thead>
          
          
          <tr style="background-color: white;">
            
            <th style="text-align:center;">Patient</th>
            <th style="text-align:center;">Phone</th>
            <th style="text-align:center;">Doctor</th>
            <th style="text-align:center;">Date</th>
            <th style="text-align:center;">Message</th>
            <th style="text-align:center;">Status</th>
            <th style="text-align:center;">Approved</th>
            <th style="text-align:center;">Cancelled</th>
            <th style="text-align:center;">Send Mail</th>
            <th style="text-align: center;">Delete</th>
          </tr>
          </thead>
          <tbody>
        

          @foreach($data as $appoint)

          <tr align="center" style="background-color: black;">
            
            <td>{{$appoint->name}}, {{$appoint->gname}} {{$appoint->mname}}</td>

            <td>{{$appoint->phone}}</td>

            <td>{{$appoint->doctor}}</td>

            <td>{{$appoint->date}}{{$appoint->date1}}{{$appoint->date2}}{{$appoint->date3}}{{$appoint->date4}}{{$appoint->date5}}{{$appoint->date6}}</td>

            <td>{{$appoint->message}}</td>

            <td>{{$appoint->status}}</td>
            <td>
              
              <a class="btn btn-success" href="{{url('approved',$appoint->id)}}">Approved</a>

            </td>

            <td>
              
              <a class="btn btn-danger" href="{{url('cancelled',$appoint->id)}}">Cancelled</a>

            </td>

            <td>
              
              <a class="btn btn-primary" href="{{url('emailview',$appoint->id)}}">Send Mail</a>

            </td>

            <td>

              <a onclick="return confirm('are you sure to delete this ?')"class="btn btn-danger" href="{{url('deleteappoint',$appoint->id)}}">Delete</a>

            </td>


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
    $('#mydocapp').DataTable();
} );</script>
    <!-- End custom js for this page -->
  </body>
</html>