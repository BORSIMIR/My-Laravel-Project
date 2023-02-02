<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">
  
  <link href='https://css.gg/bell.css' rel='stylesheet'>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <title>New City Family Care </title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">

  <link rel="icon" type="image" href="admin/assets/images/logo14.png">

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">

  <script src="https://www.paypal.com/sdk/js?client-id={{env('PAYPAL_SANDBOX_CLIENT_ID')}}"></script>
</head>
<body>
@include('sweetalert::alert')
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
              <a href="{{url('home')}}"><x-jet-danger-button>HOME</x-jet-danger-button></a>
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



        @if(session()->has('message'))

        <div class="alert alert-success">
          
          <button type="<button" class="close" data-dismiss="alert">
            
          </button>

          {{session()->get('message')}}


        </div>


        @endif

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

            <!--<button id="btm" type="submit" class="button">MAKE AN APPOINTMENT</button>-->
            <a type="submit" class="button" href="{{url('appoint')}}">MAKE AN APPOINTMENT</a>
            <br><h1></h1>

            <div class="TN bzz aHS-YH" style="margin-left:0px">
        <div class="qj qr">
        </div>
        <div class="aio UKr6le">
        <span class="nU false">
        <!--<a href="{{url('chatify')}}"   type="submit" class="button" title="Start a meeting" aria-label="Start a meeting" draggable="false">START A MEETING</a>-->

        <a href="#" type="submit" class="button" onclick="confirmation(event)">MAKE VIRTUAL CONSULTATION</a>
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


  <div class="bg-light">
    <div class="page-section py-3 mt-md-n5 custom-index">
      <div class="container">
        <div class="row justify-content-center">
          
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-primary text-white">
                <span class="mai-shield-checkmark"></span>
              </div>
              <p><span>New City Family Care's</span> Protection</p>
            </div>
          </div>

          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-secondary text-white">
                <span class="mai-chatbubbles-outline"></span>
              </div>
              <p><span>Virtual Consultation</span> Services</p>
            </div>
          </div>


          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-accent text-white">
                <span class="mai-basket"></span>
              </div>
              <p><span>New City Family Care's</span> Quality</p>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .page-section -->




@include('user.doctor')

@if(Route::has('login'))

            @auth





 @endauth

            @endif 

   <!-- .banner-home -->

  <footer class="page-footer text-center">
  

      <hr>

      <p id="copyright">Copyright &copy; 2022 <a href="https://www.facebook.com/New-City-Family-Care-Multispecialty-and-Diagnostic-Clinic-110781067766107" target="_blank">New City Family Care</a>. All right reserved</p>
    </div>
  </footer>

<script>

  document.querySelector("#btm").addEventListener("click", () => {
window.scrollTo(0,document.body.scrollHeight);})

</script>

<script>
  function confirmation(ev){
    ev.preventDefault();
    var urlToRedirect = ev.currentTarget.getAttribute('href');
    console.log(urlToRedirect);
    swal({
      title:"Ask the admin for a URL Link to start the meeting",
      text:"Request URL Link to Admin",
      icon:"warning",
      buttoms: true,
      dangerMode: true,
    })
    .then((willCancel) =>{
      if(willCancel){

        window.location.href = urlToRedirect;
      }
    });

  }


</script>



<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
 


</body>
</html>