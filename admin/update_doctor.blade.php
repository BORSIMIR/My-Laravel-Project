
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
              <div class="d-flex align-items-center justify-content-between">
              
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
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
        <div class="table-responsive">


        <div class="container" align="center" style="padding: 100px">

          @if(session()->has('message'))

        <div class="alert alert-success">
          
          <button type="<button" class="close" data-dismiss="alert">
            
          </button>

          {{session()->get('message')}}


        </div>


        @endif
          
          <form action="{{url('editdoctor',$data->id)}}" method="POST" enctype="multipart/form-data">

            @csrf
            
            

            <div style="padding: 15px;">             
              <label>Doctor name</label>
              <input type="text" style="color:black" name="name" value="{{$data->name}}">
            </div>

          

            <label class="col-12 col-sm-3 py-1">Specialty</label>
           
            <select style="color: black;" name="speciality" id="speciality">

                <option selected disabled>--- Select Specialty ---</option>
                @foreach( $specs as $specs)
                <option value="{{$specs->name}}">{{$specs->name}}</option>
                @endforeach
                </select>
            
              

          <div style="padding: 15px;">

            <label>Schedule 1</label>
            <select style="color: black;" name="schedule1" id="schedule1">

                <option selected disabled>Select Schedule</option>
                @foreach( $sched1 as $scheds)
                <option value="{{$scheds->day}}">{{$scheds->day}}</option>
                @endforeach
                </select>

                <label></label>
                <select style="color: black;" name="am1" id="am1">

                <option selected disabled>Select Time</option>
                @foreach( $time1 as $times)
                <option value="{{$times->am}}">{{$times->am}}</option>
                @endforeach
                </select>
                <label></label>
                <select style="color: black;" name="pm1" id="pm1">

                <option selected disabled>Select Time</option>
                @foreach( $time1 as $times)
                <option value="{{$times->am}}">{{$times->am}}</option>
                @endforeach
                </select>
          </div> 

          <div style="padding: 15px;">

            <label>Schedule 2</label>
            <select style="color: black;" name="schedule2" id="schedule2">

                <option selected disabled>Select Schedule</option>
                @foreach( $sched2 as $scheds)
                <option value="{{$scheds->day}}">{{$scheds->day}}</option>
                @endforeach
                </select>

                <label></label>
                <select style="color: black;" name="am2" id="am2">

                <option selected disabled>Select Time</option>
                @foreach( $time2 as $times)
                <option value="{{$times->am}}">{{$times->am}}</option>
                @endforeach
                </select>
                <label></label>
                <select style="color: black;" name="pm2" id="pm2">

                <option selected disabled>Select Time</option>
                @foreach( $time2 as $times)
                <option value="{{$times->am}}">{{$times->am}}</option>
                @endforeach
                </select>
            
          </div> 

          <div style="padding: 15px;">

            <label>Schedule 3</label>
            <select style="color: black;" name="schedule3" id="schedule3">

                <option selected disabled>Select Schedule</option>
                @foreach( $sched3 as $scheds)
                <option value="{{$scheds->day}}">{{$scheds->day}}</option>
                @endforeach
                </select>

                <label></label>
                <select style="color: black;" name="am3" id="am3">

                <option selected disabled>Select Time</option>
                @foreach( $time3 as $times)
                <option value="{{$times->am}}">{{$times->am}}</option>
                @endforeach
                </select>
                <label></label>
                <select style="color: black;" name="pm3" id="pm3">

                <option selected disabled>Select Time</option>
                @foreach( $time3 as $times)
                <option value="{{$times->am}}">{{$times->am}}</option>
                @endforeach
                </select>
            
            
          </div>

            <div style="padding: 15px;">             
              <label>Old Image</label>
              <img height="200" width="200" src="doctorimage/{{$data->image}}">
            </div>

            <div style="padding: 15px;">
              <label>Change Image</label>

              <input type="file" name="file">

            </div>

            <div style="padding: 15px;">
              
              <input type="submit" class="btn btn-primary">

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