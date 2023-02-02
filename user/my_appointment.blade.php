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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<link rel="stylesheet"  href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">

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
        <a class="navbar-brand" href="{{url('home')}}"><span class="text-primary">New City Family Care</span><br>Multispecialty and Diagnostic Clinic</a>

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
              <a href="{{url('aboutus')}}"><x-jet-secondary-button>ABOUT US</x-jet-secondary-button></a>
            </li>



            @if(Route::has('login'))

            @auth

            <li class="nav-item">
              <a href="{{url('services')}}"><x-jet-secondary-button>MY MEDICAL</x-jet-secondary-button></a>
            </li>

            <li class="nav-item">
              <a href="{{url('myappointment')}}"><x-jet-danger-button>MY APPOINTMENT</x-jet-danger-button></a>
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


<div align="center" style="padding: 10px;">
<h1 style="font-size: 38px; font-variant: bold;" class="text-center wow fadeInUp">APPOINTMENT</h1>
           <div class="table-responsive">
    <table class="table" id="myTable">
      <thead>
    <tr style="background-color: black;">
      <th style="padding: 10px; font-size: 20px; color: white; text-align: center;">Doctor Name</th>
      
      <th style="padding: 10px; font-size: 20px; color: white; text-align: center;">Date</th>
      
      <th style="padding: 10px; font-size: 20px; color: white; text-align: center;">Message</th>
      
      <th style="padding: 10px; font-size: 20px; color: white; text-align: center;">Status</th>

      <th style="padding: 10px; font-size: 20px; color: white; text-align: center;">Delete Appointment</th>
      </tr>
      </thead>



      <tbody>
    @foreach($appoint as $appoints)
    <tr style="background-color: black;" align="center">
      <td style="padding: 10px; color: white;">{{$appoints->doctor}}</td>


      <td style="padding: 10px; color: white;">{{$appoints->date}}{{$appoints->date1}}{{$appoints->date2}}{{$appoints->date3}}{{$appoints->date4}}{{$appoints->date5}}{{$appoints->date6}}</td>

      <td style="padding: 10px; color: white;">{{$appoints->message}}</td>

      <td style="padding: 10px; color: yellow;">{{$appoints->status}}</td>

      <td><a class="bt btn-danger" onclick="return confirm('are you sure to delete this ?')"   href="{{url('cancel_appoint',$appoints->id)}}">Delete</td>

    </tr>

    @endforeach
  </tbody>
  </table>

  </div>
  
</div>


  




<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>

<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

<script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

<script>$(document).ready( function () {
    $('#myTable').DataTable();
} );</script>
  
</body>
</html>