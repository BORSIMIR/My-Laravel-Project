<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <link href='https://css.gg/bell.css' rel='stylesheet'>

  <title>New City Family Care</title>
  <link rel="icon" type="image" href="admin/assets/images/logo14.ico">

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="https://www.facebook.com/New-City-Family-Care-Multispecialty-and-Diagnostic-Clinic-110781067766107"><span class="mai-logo-facebook-f"></span>New City Family Care's Clinic</a>
              <span class="divider">|</span>
              <a href="https://mail.google.com/mail/u/0/#inbox?compose=new"><span class="mai-mail text-primary"></span> newcityfamilycare@gmail.com</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">

            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="{{url('/')}}"><span class="text-primary">New City Family Care</span><br>Multispecialty and Diagnostic Clinic</a>

        <form action="#">
          <div class="input-group input-navbar">
            <div class="input-group-prepend">
              <span class="" id=""><span class=""></span></span>
            </div>

          </div>
        </form>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="{{url('home')}}"><x-jet-secondary-button>HOME</x-jet-secondary-button></a>
            </li>
            <li class="nav-item">
              <a href="{{url('aboutus')}}"><x-jet-danger-button>ABOUT US</x-jet-danger-button></a>
            </li>

            

             @if(Route::has('login'))

            @auth

            <li class="nav-item">
              <a href="{{url('services')}}"><x-jet-secondary-button>MY MEDICAL</x-jet-secondary-button></a>
            </li>

            <li class="nav-item">
              <a href="{{url('myappointment')}}"><x-jet-secondary-button>MY APPOINTMENT</x-jet-secondary-button></a>
            </li>

            <li class="dropdown">

              <a class="btn  dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="gg-bell"></i>

                <span class="badge badge-light" style="background-color: red;">{{$notifications->count()}}</span>

              </a>

              <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                @foreach($notifications as $notification)
                <li class="dropdown-item"><a href="{{url('myappointment')}}">Your Appointment Has {{$notification->status}}</a></li>
                @endforeach
              </ul>
              

            </li>

            <x-app-layout>

			     </x-app-layout>


            @else

            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Login</a>
            </li>

            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('register')}}">Register</a>
            </li>


            @endauth

            @endif

          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

  <!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "462894030418009");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v15.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>



        @if(session()->has('message'))

        <div class="alert alert-success">
          
          <button type="<button" class="close" data-dismiss="alert">
            
          </button>

          {{session()->get('message')}}


        </div>


        @endif


  <div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/blog/gm18.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            
          </ol>
        </nav>
        <h1 class="font-weight-normal" style=" font-size: 40px;">WELCOME TO NEW CITY FAMILY CARE</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

  <div class="page-section bg-light">
    <div class="container">
      <div class="row">
        
        <div class="col-md-4 py-3 wow zoomIn">
          <div class="card-service">
            <div class="circle-shape bg-primary text-white">
              <span class="mai-shield-checkmark"></span>
            </div>
            <p><span>New City Family Care's</span> Protection</p>
          </div>
        </div>
        <div class="col-md-4 py-3 wow zoomIn">
          <div class="card-service">
            <div class="circle-shape bg-secondary text-white">
              <span class="mai-chatbubbles-outline"></span>
            </div>
            <p><span>Virtual Consultation</span> Services</p>
          </div>
        </div>
        <div class="col-md-4 py-3 wow zoomIn">
          <div class="card-service">
            <div class="circle-shape bg-accent text-white">
              <span class="mai-basket"></span>
            </div>
            <p><span>New City Family Care's</span> Quality</p>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="page-section">
    <div class="container">
      <h1 style="font-size: 38px; font-variant: bold;" class="text-center wow fadeInUp">New City Family Care's Facility</h1>

      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">  

        @foreach($facility as $facilities)

        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="facilityimage/{{$facilities->image}}" alt="">
              <div class="meta">

              </div>
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



    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10 wow fadeInUp">

          <div class="text-lg">

            <b><p style="text-align: center"><br>New City Family Care's Medical Clinic believes that everyone should be able to take care of their health and wellness.</p>


            <p style="text-align: center"><br>As a multi-specialty and full-service clinic, we empower people to do so by making the quality services they need available with excellent and compassionate patient care.</p>

            <p style="text-align: center"><br>Since our establishment in May 8, 2020 in the San Roque, Santo Tomas, 4234 Batangas, 
we aim to serve patients with every clinical service they need, in-clinic and off-site.</p>

            <p style="text-align: center"><br>From primary care to online consultation, we are continuously growing our business 
to bring you just what you need to take care of your health.</p></b>
          </div>
        </div>

        


<div class="page-section bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-4 py-3 wow zoomIn">
          <div class="card-service">
            <div class="avatar mr-2">
                  <div class="avatar-img">
                    <img src="../assets/img/blog/tech.png" alt="" >
                  </div>
                </div>
            <p><span>Advanced</span> Technology</p>
          </div>
        </div>
        <div class="col-md-4 py-3 wow zoomIn">
          <div class="card-service">
            <div class="avatar mr-2">
                  <div class="avatar-img">
                    <img src="../assets/img/blog/health.png" alt="">
                  </div>
                </div>
            <p><span>Dedicated</span> Healthcare Team</p>
          </div>
        </div>
        <div class="col-md-4 py-3 wow zoomIn">
          <div class="card-service">
            <div class="avatar mr-2">
                  <div class="avatar-img">
                    <img src="../assets/img/blog/comit.png" alt="">
                  </div>
                </div>
            <p><span>Commitment</span> to Quality</p>
          </div>
        </div>
      </div>
    </div>
  </div>























      </div>
    </div>
  </div>

<!-- .banner-home -->

  <footer class="page-footer text-center">
    

      <hr>

      <p id="copyright">Copyright &copy; 2022 <a href="https://www.facebook.com/New-City-Family-Care-Multispecialty-and-Diagnostic-Clinic-110781067766107" target="_blank">New City Family Care</a>. All right reserved</p>
    </div>
  </footer>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>