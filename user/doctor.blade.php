<div class="page-section">
    <div class="container">
      <h1 style="font-size: 38px; font-variant: bold;" class="text-center wow fadeInUp">Our Doctors</h1>

      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow"> 

        @foreach($doctor as $doctors)

        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="doctorimage/{{$doctors->image}}" alt="">
              <div class="meta">
                
              </div>
            </div>
            <div class="body">
              <p style="color: #f54281;" class="text-xl mb-0">{{$doctors->name}}</p>

              



              <p></p><span class="text-sm text-black"></span>

              <p style="color: green;"> SPECIALTY : </p><span class="text-sm text-black">{{$doctors->speciality}}</span>

              <p></p><span class="text-sm text-black"></span>


              <p style="color: green;"> SCHEDULE : </p>
              
              <span class="text-sm text-black">{{$doctors->schedule1}} {{$doctors->sched1}} - {{$doctors->sched2}}</span>
              
              <span class="text-sm text-black">{{$doctors->schedule2}} {{$doctors->sched3}} - {{$doctors->sched4}}</span>
              
              <span class="text-sm text-black">{{$doctors->schedule3}} {{$doctors->sched5}} - {{$doctors->sched6}}</span>


            </div>
          </div>
        </div>

        @endforeach

      </div>
    </div>
  </div>