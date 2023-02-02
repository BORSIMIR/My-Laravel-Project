<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
<!-- Start of HubSpot Embed Code -->
  <script type="text/javascript" id="hs-script-loader" async defer src="//js-na1.hs-scripts.com/22606932.js"></script>
<!-- End of HubSpot Embed Code -->

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/630f273c54f06e12d891ebcd/1gbpj2h6g';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</html>

<!--SET @num := 0;

UPDATE appointments SET id = @num := (@num+1);

ALTER TABLE appointments AUTO_INCREMENT =1; -->

<!-- <svg class="w-16 h-16" viewbox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"> -->

php artisan make:model Gcash -m
php artisan migrate
	



    <!-- Start of HubSpot Embed Code -->
  <script type="text/javascript" id="hs-script-loader" async defer src="//js-na1.hs-scripts.com/22606932.js"></script>
<!-- End of HubSpot Embed Code -->

//////////////////////////////////////////////////////////////////////
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>New City Family Care</title>


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
            <li class="nav-item active">
              <a class="nav-link" href="{{url('home')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('aboutus')}}">About Us</a>
            </li>



            @if(Route::has('login'))

            @auth

            <li class="nav-item">
              <a class="nav-link" style="background-color: greenyellow;" href="{{url('myappointment')}}">My Appointment</a>
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

           <div class="table-responsive">
                      <table class="table">

    
    <tr style="background-color: black;">
      <th style="padding: 10px; font-size: 20px; color: white; text-align: center;">Doctor Name</th>
      
      <th style="padding: 10px; font-size: 20px; color: white; text-align: center;">Date</th>
      
      <th style="padding: 10px; font-size: 20px; color: white; text-align: center;">Message</th>
      
      <th style="padding: 10px; font-size: 20px; color: white; text-align: center;">Status</th>

      <th style="padding: 10px; font-size: 20px; color: white; text-align: center;">Cancel Appointment</th>
      </tr>

    @foreach($appoint as $appoints)



    <tr style="background-color: black;" align="center">
      <td style="padding: 10px; color: white;">{{$appoints->doctor}}</td>

      <td style="padding: 10px; color: white;">{{$appoints->date}}</td>

      <td style="padding: 10px; color: white;">{{$appoints->message}}</td>

      <td style="padding: 10px; color: yellow;">{{$appoints->status}}</td>

      <td><a class="bt btn-danger" onclick="return confirm('are you sure to delete this ?')"   href="{{url('cancel_appoint',$appoints->id)}}">Cancel</td>

    </tr>

    @endforeach
  </table>

  </div>
  
</div>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>

///////manaul paginate////////////

<!--<div class="center">
                
                    <h5>{{$data->onEachSide(1)->links()}}</h5>
                  </div>-->

//////////search///////////
<form action="{{url('search')}}" method="get">

          <a href="{{route('export_appoint_pdf')}}" class="btn btn-danger">Convert All Into PDF</a>
          <a href="{{route('export_appoint_pdf1')}}" class="btn btn-success">Convert Approved Only Into PDF</a>

            <input class="btn btn-success" type="submit" value="Search">
            <input type="text" style="color:black" name="search" placeholder="Search for something">



          </form>                  


///////////paypal/////////////////

------------button-------------------------

<li class="nav-item">
              <a class="btn btn-primary" style="background-color: lightblue;" href="{{route('processPaypal')}}">PayPal</a>

              @if(\Session::has('error'))
        <div class="alert alert-danger">{{ \Session::get('error') }}</div>
        {{ \Session::forget('error') }}
    @endif

    
    @if(\Session::has('success'))
        <div class="alert alert-success">{{ \Session::get('success') }}</div>
        {{ \Session::forget('success') }}
    @endif
              

            </li>


------------------controller-----------------------

use Srmklive\PayPal\Services\PayPal as PayPalClient;

public function createPaypal()
{
 return view('user.home');
}

public function processPaypal(Request $request)
{
    $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();

        $response = $provider->createOrder([
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => route('processSuccess'),
                "cancel_url" => route('processCancel'),
            ],
            "purchase_units" => [
                0 => [
                    "amount" => [
                        "currency_code" => "USD",
                        "value" => "100.00"
                    ]
                ]
            ]
        ]);

        if (isset($response['id']) && $response['id'] != null) {

            // redirect to approve href
            foreach ($response['links'] as $links) {
                if ($links['rel'] == 'approve') {
                    return redirect()->away($links['href']);
                }
            }

            return redirect()
                ->route('createPaypal')
                ->with('error', 'Something went wrong.');

        } else {
            return redirect()
                ->route('createPaypal')
                ->with('error', $response['message'] ?? 'Something went wrong.');
        }
}

public function processSuccess(Request $request)
{

        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request['token']);

        if (isset($response['status']) && $response['status'] == 'COMPLETED') {
            return redirect()
                ->route('createPaypal')
                ->with('success', 'Transaction complete.');
        } else {
            return redirect()
                ->route('createPaypal')
                ->with('error', $response['message'] ?? 'Something went wrong.');
        }

}

 public function processCancel(Request $request)
    {
        return redirect()
            ->route('createPaypal')
            ->with('error', $response['message'] ?? 'You have canceled the transaction.');
    }


-------------web------------------

Route::get('createPaypal',[HomeController::class,'createPaypal'])->name('createPaypal');

Route::get('processPaypal',[HomeController::class,'processPaypal'])->name('processPaypal');

Route::get('processSuccess',[HomeController::class,'processSuccess'])->name('processSuccess');

Route::get('processCancel',[HomeController::class,'processCancel'])->name('processCancel');


////////////////////////EMAIL VIEW///////////////////////

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <base href="/public">

    <style type="text/css">
      input,
        select {
            width: 400px;
            height: 40px;
            margin: 2px;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }
          
        body {
            background-color: tomato;
        }

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
                <p class="mb-0 font-weight-medium me-3 buy-now-text">"Whoever heeds discipline shows the way to life, but whoever ignores correction leads others astray."</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Proverbs 10:17</a>
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
          
            <select type="text" style="color: black;" name="Select Element" id="select_Element" required="">
              <option></option>
                <option  type="text" style="color: black;" value="Hi from New City Family Care's Medical Clinic">Hi from New City Family Care's Medical Clinic</option>
            </select>
            
             
          </div>

          <div style="padding: 15px;">

            <label>Message</label>
            

            <select type="text" style="color: black;" name="Select Element" id="select_Element">
              <option></option>
                <option  type="text" style="color: black;" value="Your appointment has been approved. Come here on the right schedule.">Your appointment has been approved. Come here on the right schedule.</option>
            </select>
            
          </div>

          <div style="padding: 15px;">

            <label>Link Button</label>
            <!--<input type="text" style="color: black;" name="actiontext" required="" size="60" placeholder="Give us feedback on our facebook page">-->

            <select type="text" style="color: black;" name="Select Element" id="select_Element">
              <option></option>
                <option  type="text" style="color: black;" value="Give us feedback on our facebook page.">Give us feedback on our facebook page.</option>
            </select>
            
          </div>

          <div style="padding: 15px;">

            <label>Action Url</label>
            <input type="text" style="color: black;" name="actionurl" required="" size="60" placeholder="Input the link here">
            
          </div>

          <div style="padding: 15px;">

            <label>End Part</label>
            
            <select type="text" style="color: black;" name="Select Element" id="select_Element">
              <option></option>
                <option  type="text" style="color: black;" value="Thanks for visiting New City Family Care's Medical Clinic Website.">Thanks for visiting New City Family Care's Medical Clinic Website.</option>
            </select>
            
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
////////////////////////////appointment/////////////////////////////////////
  <div class="page-section">
    <div class="container">
      <h1 style="font-size: 38px; font-variant: bold;" class="text-center wow fadeInUp">Make an Appointment</h1>


      @foreach($doctor as $doctors)
      <form class="main-form" action="{{url('appointment',$doctors->id)}}" method="POST">
        @endforeach
        @csrf
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <x-jet-label  value="Last Name *" />
            <input type="text" name="name" class="form-control" placeholder="E.G. DELA CRUZ">

            <span style="color: red">
              
              @error('name')

              {{$message}}

              @enderror

            </span>


          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <x-jet-label  value="First Name *" />
            <input type="text" name="gname" class="form-control" placeholder="E.G JOSE MARIO">

    


          </div>

          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <x-jet-label  value="Middle Name *" />
            <input type="text" name="mname" class="form-control" placeholder="E.G DELOS SANTOS">

    


          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <x-jet-label  value="Mobile Number *" />
            <input type="text" name="number" class="form-control" placeholder="" maxlength="11">

            <span style="color: red">
              
              @error('number')

              {{$message}}

              @enderror

            </span>

          </div>

          <div class="col-12 col-sm-12 py-2 wow fadeInRight">
            <x-jet-label  value="Email Address *" />
            <input type="email" name="email" class="form-control" placeholder="email@domain.com">

            <span style="color: red">
              
              @error('email')

              {{$message}}

              @enderror

            </span>

          </div>

        

          <div class="col-12 col-sm-12 py-2 wow fadeInRight" data-wow-delay="300ms">
              
            
            
            <select name="doctor" id="departement" class="custom-select">
              
              <option selected disabled>--- Select Doctor ---</option>

             @foreach($doctor as $doctors)

             <option value="{{$doctors->name}}">{{$doctors->name}}</option>



             @endforeach

            </select>
            <span style="color: red">
              
              @error('doctor')

              {{$message}}

              @enderror

            </span>




           <!-- <select name="id" id="departement" class="custom-select">

              <option selected disabled>--- Confirm your doctor ---</option>

             @foreach($doctor as $doctors)

             <option value="{{$doctors->id}}">{{$doctors->name}}</option>



             @endforeach

            </select>
            <span style="color: red">
              
              @error('doctor')

              {{$message}}

              @enderror

            </span> -->


          </div>

          <div class="col-12 col-sm-12 py-2 wow fadeInRight" >
            <x-jet-label  value="Enter here the schedule of the doctor you have chosen." />
            <input type="date" name="schedule" class="form-control" placeholder="Enter here the schedule of the doctor you have chosen.">

            <span style="color: red">
              
              @error('schedule')

              {{$message}}

              @enderror

            </span>

          </div>



          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Write your reason here.."></textarea>

            <span style="color: red">
              
              @error('message')

              {{$message}}

              @enderror

            </span>

          </div>
        </div>
        
        <button type="submit" style="background-color: lightblue;" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button>
      </form>
    </div>
  </div> <!-- .page-section -->

  <script>
  
  document.querySelectorAll('input[type="number"]').forEach(input =>{
    input.oninput = () =>{
      if(input.value.length > input.maxLength) input.value = input.value.slice(0, input.maxLength);
    };
  });
</script>
  
<script>
  $(document).ready(function(){

    var dtToday = new Date ();

    var month = dtToday.getMonth () + 1;
    var day = dtToday.getDate ();
    var year = dtToday.getFullYear ();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();

      var maxDate = year + '-' + month + '-' + day;

      $('#dateControl').attr('min', maxDate);
  })
</script>


<!DOCTYPE html>
<html lang="en">
<head>
  <style>
    .event a {
    background-color: #5FBA7D !important;
    color: #ffffff !important;
}
  </style>

  <title>AWS</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>




<script>
  $( function() {
    // An array of dates
    var eventDates = {};
    eventDates[ new Date( '1/02/2023' )] = new Date( '1/02/2023' );
    eventDates[ new Date( '1/09/2023' )] = new Date( '1/09/2023' );
    eventDates[ new Date( '1/16/2023' )] = new Date( '1/16/2023' );
    eventDates[ new Date( '1/23/2023' )] = new Date( '1/23/2023' );
    eventDates[ new Date( '1/30/2023' )] = new Date( '1/30/2023' );
    // datepicker
    $('#datepicker').datepicker({
        beforeShowDay: function( date ) {
            var highlight = eventDates[date];
            if( highlight ) {
                 return [true, "event", 'Tooltip text'];
            } else {
                 return [true, '', ''];
            }
        }
    });
});
</script>
</head>
<body>
<div id="datepicker"></div>
</body>
</html>

$(document).on('change','.productname',function () {
      var prod_id=$(this).val();

      var a=$(this).parent();
      console.log(prod_id);
      var op="";

      $.ajax({
        type:'get',
        url:'{!!URL::to('findPrice5')!!}',
        data:{'id':prod_id},
        dataType:'json',//return data will be json
        success:function(data){
          console.log("name");
          console.log(data.name);
          

          // here price is coloumn name in products table data.coln name

          a.find('.prod_price5').val(data.name);
          function disableHoliday(date) {
          var string = $.datepicker.formatDate('yy-mm-dd', date);
          var filterDate = new Date(string);
          var day = filterDate.getDay();
          return [day != 0 && day != 2 && day != 4 && day !=6]
          }
        
          $( "#datepicker" ).datepicker({
          beforeShowDay: disableHoliday,
          minDate: 0
          });

        },
        error:function(){

        }

      });
      




    });

https://codehasbug.com/javascript/disable-specific-date-in-jquery-datepicker/