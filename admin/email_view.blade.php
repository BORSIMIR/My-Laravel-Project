
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <base href="/public">

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
      <div class="container-fluid page-body-wrapper">
        

  


      <div class="container" align="center" style="padding-top: 100px;">

        @if(session()->has('message'))

        <div class="alert alert-success">
          
          <button type="button" class="close" data-dismiss="alert">
            
          </button>

          {{session()->get('message')}}


        </div>


        @endif
        

          <form action="{{url('sendemail',$data->id)}}" method="POST">
          
            @csrf

          <div style="padding: 15px;">

            <label>Greeting</label>
            <input type="text" style="color: black;" name="greeting" required="" size="60" Value="Hi from New City Family Care's Medical Clinic. Your Appointment has been Approve!">
            
             
          </div>

          <div style="padding: 15px;">

            <label>Message</label>
            <input type="text" style="color: black;" name="body" required="" size="60"
            value="See you on {{$data->date}}{{$data->date1}}{{$data->date2}}{{$data->date3}}{{$data->date4}}{{$data->date5}}{{$data->date6}}">
            
          </div>



          <div style="padding: 15px;">

            <label>Link Button</label>
            <input type="text" style="color: black;" name="actiontext" required="" size="60" Value="Give us Feedback on our Facebook Page">
            
          </div>

          <div style="padding: 15px;">

            <label>Action Url</label>
            <input type="text" style="color: black;" name="actionurl" required="" size="60" value="https://www.facebook.com/New-City-Family-Care-Multispecialty-and-Diagnostic-Clinic-110781067766107">
            
          </div>

          <div style="padding: 15px;">

            <label>End Part</label>
            <input type="text" style="color: black;" name="endpart" required="" size="60" Value="Thanks for visiting New City Family Care's Medical Clinic Website">
            
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