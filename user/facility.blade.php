
<div class="page-section"> 
    <div class="container">

      <h1 style="font-size: 38px; font-variant: bold;" class="text-center wow fadeInUp">New City Family's Medical Facilities</h1>

      <div class="row" id="doctorSlideshow">
       
        @foreach($facility as $facilities)

        <div class="item">
          <div class="card-doctor">
            <div class="header">
              
              <img src="facilityimage/{{$facilities->image}}" alt="">
 
            </div>
            <div class="body">
              <p style="color: #f54281;" class="text-xl mb-0">{{$facilities->name}}</p>

            </div>
          </div>
        </div>



        @endforeach

      </div>
    </div>
  </div>
