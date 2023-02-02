<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

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
            <x-app-layout>

           </x-app-layout>
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


 <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/blog/gm17.jpg);">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <span class="subhead">Let's make your life happier</span>
        <h1 class="display-4">Healthy Living</h1>

        @if(Route::has('login'))

            @auth
            
        <!--<button id="btm" class="btn btn-primary">MAKE AN APPOINTMENT</button> -->

            <button id="btm" type="submit" class="button">MAKE AN APPOINTMENT</button>
            <br><h1></h1>

            <div class="TN bzz aHS-YH" style="margin-left:0px">
        <div class="qj qr">
        </div>
        <div class="aio UKr6le">
        <span class="nU false">
        <a href="https://apps.google.com/meet/" target="_blank" id="btm" type="submit" class="button" title="Start a meeting" aria-label="Start a meeting" draggable="false">START A MEETING</a>
        </span>
        </div>
        <div class="nL aif">
        </div>
        </div>
        <br>
        <!--<a href="{{url('chatify')}}" target="_blank" id="btm" type="submit" class="button">CONSULT WITH ADMIN</a>-->
            @else


        <a href="{{url('login')}}" class="btn btn-primary">MAKE AN APPOINTMENT</a>

            @endauth

            @endif

      </div>
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