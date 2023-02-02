<!DOCTYPE html>
<html lang="en">
<head>
  <style>
    .event a {
    background-color: #5FBA7D !important;
    color: #ffffff !important;
}
  </style>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <link href='https://css.gg/bell.css' rel='stylesheet'>


  <title>New City Family Care</title>


  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
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


  <div class="page-section">
    <div class="container">
      <h1 style="font-size: 38px; font-variant: bold;" class="text-center wow fadeInUp">MAKE AN APPOINTMENT</h1>


      @foreach($doctor as $doctors)
      <form class="main-form" action="{{url('appointment',$doctors->id)}}" method="POST">
        @endforeach
        @csrf
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">            
            <x-jet-label  value="Last Name *" />
            @foreach($user as $users)
            <input type="text" name="name" class="form-control" placeholder="E.G. DELA CRUZ" value="{{$users->name}}">
            @endforeach

            <span style="color: red">
              
              @error('name')

              {{$message}}

              @enderror

            </span>


          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <x-jet-label  value="First Name *" />
            @foreach($user1 as $users)
            <input type="text" name="gname" class="form-control" placeholder="E.G JOSE MARIO" value="{{$users->fullname}}">
            @endforeach
            

    


          </div>

          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <x-jet-label  value="Middle Name *" />
             @foreach($user2 as $users)
            <input type="text" name="mname" class="form-control" placeholder="E.G DELOS SANTOS" value="{{$users->mname}}">
            @endforeach

    


          </div>
          @foreach($user2 as $users)
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <x-jet-label  value="Mobile Number *" />
            
            <input type="text" name="number" class="form-control" placeholder="" maxlength="11"value="{{$users->phone}}">
             @endforeach
            <span style="color: red">
              
              @error('number')

              {{$message}}

              @enderror

            </span>

          </div>

          <div class="col-12 col-sm-12 py-2 wow fadeInRight">
            <x-jet-label  value="Email Address *" />
            @foreach($user4 as $users)
            <input type="email" name="email" class="form-control" placeholder="email@domain.com" value="{{$users->email}}">
            @endforeach
            <span style="color: red">
              
              @error('email')

              {{$message}}

              @enderror

            </span>

          </div>

        

          <div class="col-12 col-sm-12 py-2 wow fadeInRight" data-wow-delay="300ms">
              
            <select style="width: 347px" name="specialty" id="prod_cat_id" class="productcategory">
              
              <option selected disabled>Specialty</option>

             @foreach($prod as $cat)

             <option value="{{$cat->name}}">{{$cat->name}}</option>



             @endforeach

            </select>
            <span style="color: red">
              
              @error('specialty')

              {{$message}}

              @enderror

            </span>


  <select style="width: 347px" name="doctor"  id="prod_dog_id" class="productname">

    <option value="0" selected disabled>Doctor</option>

  </select>
  <span style="color: red">
              
              @error('doctor')

              {{$message}}

              @enderror

            </span>

  <select style="width: 347px" id="sched" class="prod_price4">

  <option value="0" selected disabled>Schedule</option>

  </select>
<span style="color: red">
              
              @error('schedule')

              {{$message}}

              @enderror

            </span>


  <!--<input style="width: 347px" type="text" class="prod_price" input disabled>-->

  <!--<input style="width: 347px" type="text" class="prod_price1" input disabled>-->

  <!--<input style="width: 347px" type="text" class="prod_price2" input disabled>-->

  <input style="width: 347px" name="id" type="hidden" class="prod_price3">

  <input style="width: 347px" name="date" type="text" class="prod_price5" id="datepicker" placeholder="Select Date">

  <input style="width: 347px" name="date1" type="text" class="prod_price6" id="datepicker1" placeholder="Select Date">

  <input style="width: 347px" name="date2" type="text" class="prod_price7" id="datepicker2" placeholder="Select Date">

  <input style="width: 347px" name="date3" type="text" class="prod_price8" id="datepicker3" placeholder="Select Date">

  <input style="width: 347px" name="date4" type="text" class="prod_price9" id="datepicker4" placeholder="Select Date">

  <input style="width: 347px" name="date5" type="text" class="prod_price10" id="datepicker5" placeholder="Select Date">

  <input style="width: 347px" name="date6" type="text" class="prod_price11" id="datepicker6" placeholder="Select Date">






  

 


 
  

            
            <!--<select name="doctor" id="departement" class="custom-select">
              
              <option selected disabled>--- Select Doctor ---</option>

             @foreach($doctor as $doctors)

             <option value="{{$doctors->name}}">{{$doctors->name}}</option>



             @endforeach

            </select>
            <span style="color: red">
              
              @error('doctor')

              {{$message}}

              @enderror

            </span>-->




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

          <!--<div class="col-12 col-sm-12 py-2 wow fadeInRight" >
            <x-jet-label  value="Enter here the schedule of the doctor you have chosen." />
            <input type="date" name="schedule" class="form-control" placeholder="Enter here the schedule of the doctor you have chosen.">

            <span style="color: red">
              
              @error('schedule')

              {{$message}}

              @enderror

            </span>

          </div>-->



          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message" id="message" class="form-control" rows="3" placeholder="Write your reason here.."></textarea>

            <span style="color: red">
              
              @error('message')

              {{$message}}

              @enderror

            </span>

          </div>
        </div>
        
        <x-jet-danger-button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Request</x-jet-danger-button>
        
      </form>
    </div>
  </div> <!-- .page-section -->

 <!--<script>
  $( function() {
    // An array of dates
        
 $( "#datepicker" ).datepicker({
   minDate: 0 //restrict user to choose previous date
});
});
</script>-->
<script>
$(document).ready(function(){

    $(".prod_price5").hide();
    $(".prod_price6").hide();
    $(".prod_price7").hide();
    $(".prod_price8").hide();
    $(".prod_price9").hide();
    $(".prod_price10").hide();
    $(".prod_price11").hide();

 
});
</script>

<script>
  $("#sched").change(function()
        {
            if($(this).val() == "SUNDAY")
        {
            $(".prod_price5").show();
        }
        else
        {
            $(".prod_price5").hide();
            $(".prod_price5").val(" ");
        }
            });

  $("#sched").change(function()
        {
            if($(this).val() == "MONDAY")
        {
            $(".prod_price6").show();
        }
        else
        {
            $(".prod_price6").hide();
            $(".prod_price6").val(" ");
        }
            });

  $("#sched").change(function()
        {
            if($(this).val() == "TUESDAY")
        {
            $(".prod_price7").show();
        }
        else
        {
            $(".prod_price7").hide();
            $(".prod_price7").val(" ");
        }
            });

  $("#sched").change(function()
        {
            if($(this).val() == "WEDNESDAY")
        {
            $(".prod_price8").show();
        }
        else
        {
            $(".prod_price8").hide();
            $(".prod_price8").val(" ");
        }
            });

  $("#sched").change(function()
        {
            if($(this).val() == "THURSDAY")
        {
            $(".prod_price9").show();
        }
        else
        {
            $(".prod_price9").hide();
            $(".prod_price9").val(" ");
        }
            });

  $("#sched").change(function()
        {
            if($(this).val() == "FRIDAY")
        {
            $(".prod_price10").show();
        }
        else
        {
            $(".prod_price10").hide();
            $(".prod_price10").val(" ");
        }
            });

  $("#sched").change(function()
        {
            if($(this).val() == "SATURDAY")
        {
            $(".prod_price11").show();
        }
        else
        {
            $(".prod_price11").hide();
            $(".prod_price11").val(" ");
        }
            });

  

</script>



<script>
    $(document).ready(function(){

    function disableHoliday(date) {
    var string = $.datepicker.formatDate('yy-mm-dd', date);
          
    var filterDate = new Date(string);

    var day = filterDate.getDay();

    return [day != 1 &&  day !=2 &&  day !=3 &&  day !=4 &&  day !=5 &&  day !=6]

 }
        
 $( "#datepicker" ).datepicker({
    beforeShowDay: disableHoliday,
    dateFormat: 'DD, MM d, yy',
    minDate: 0 

 });

});


</script>

<script>
    $(document).ready(function(){

    function disableHoliday(date) {
    var string = $.datepicker.formatDate('yy-mm-dd', date);
          
    var filterDate = new Date(string);

    var day = filterDate.getDay();

    return [day != 0 &&  day !=2 &&  day !=3 &&  day !=4 &&  day !=5 &&  day !=6]

 }
        
 $( "#datepicker1" ).datepicker({
    beforeShowDay: disableHoliday,
    dateFormat: 'DD, MM d, yy',
    minDate: 0

 });

});


</script>

<script>
    $(document).ready(function(){

    function disableHoliday(date) {
    var string = $.datepicker.formatDate('yy-mm-dd', date);
          
    var filterDate = new Date(string);

    var day = filterDate.getDay();

    return [day != 0 &&  day !=1 &&  day !=3 &&  day !=4 &&  day !=5 &&  day !=6]

 }
        
 $( "#datepicker2" ).datepicker({
    beforeShowDay: disableHoliday,
    dateFormat: 'DD, MM d, yy',
    minDate: 0

 });

});


</script>

<script>
    $(document).ready(function(){

    function disableHoliday(date) {
    var string = $.datepicker.formatDate('yy-mm-dd', date);
          
    var filterDate = new Date(string);

    var day = filterDate.getDay();

    return [day != 0 &&  day !=1 &&  day !=2 &&  day !=4 &&  day !=5 &&  day !=6]

 }
        
 $( "#datepicker3" ).datepicker({
    beforeShowDay: disableHoliday,
    dateFormat: 'DD, MM d, yy',
    minDate: 0

 });

});


</script>

<script>
    $(document).ready(function(){

    function disableHoliday(date) {
    var string = $.datepicker.formatDate('yy-mm-dd', date);
          
    var filterDate = new Date(string);

    var day = filterDate.getDay();

    return [day != 0 &&  day !=1 &&  day !=2 &&  day !=3 &&  day !=5 &&  day !=6]

 }
        
 $( "#datepicker4" ).datepicker({
    beforeShowDay: disableHoliday,
    dateFormat: 'DD, MM d, yy',
    minDate: 0

 });

});


</script>

<script>
    $(document).ready(function(){

    function disableHoliday(date) {
    var string = $.datepicker.formatDate('yy-mm-dd', date);
          
    var filterDate = new Date(string);

    var day = filterDate.getDay();

    return [day != 0 &&  day !=1 &&  day !=2 &&  day !=3 &&  day !=4 &&  day !=6]

 }
        
 $( "#datepicker5" ).datepicker({
    beforeShowDay: disableHoliday,
    dateFormat: 'DD, MM d, yy',
    minDate: 0

 });

});


</script>

<script>
    $(document).ready(function(){

    function disableHoliday(date) {
    var string = $.datepicker.formatDate('yy-mm-dd', date);
          
    var filterDate = new Date(string);

    var day = filterDate.getDay();

    return [day != 0 &&  day !=1 &&  day !=2 &&  day !=3 &&  day !=4 &&  day !=5]

 }
        
 $( "#datepicker6" ).datepicker({
    beforeShowDay: disableHoliday,
    dateFormat: 'DD, MM d, yy',
    minDate: 0

 });

});


</script>






<script type="text/javascript">
  $(document).ready(function(){

    $(document).on('change','.productcategory',function(){
      // console.log("hmm its change");

      var cat_id=$(this).val();
      // console.log(cat_id);
      var div=$(this).parent();

      var op=" ";

      $.ajax({
        type:'get',
        url:'{!!URL::to('findProductName')!!}',
        data:{'id':cat_id},
        success:function(data){
          //console.log('success');

          //console.log(data);

          //console.log(data.length);
          op+='<option value="0" selected disabled>Select Doctor</option>';
          for(var i=0;i<data.length;i++){
          op+='<option value="'+data[i].name+'">'+data[i].name+'</option>';
           }

           div.find('.productname').html(" ");
           div.find('.productname').append(op);
        },
        error:function(){

        }
      });
    });

    $(document).on('change','.productname',function(){
      // console.log("hmm its change");

      var dog_id=$(this).val();
      // console.log(cat_id);
      var div=$(this).parent();

      var op=" ";

      $.ajax({
        type:'get',
        url:'{!!URL::to('findPrice4')!!}',
        data:{'id':dog_id},
        success:function(data){
          //console.log('success');

          //console.log(data);

          //console.log(data.length);
          op+='<option value="0" selected disabled>Select schedule</option>';
          for(var i=0;i<data.length;i++){
          op+='<option value="'+data[i].schedule1+'">'+data[i].schedule1+' '+data[i].sched1+' - '+data[i].sched2+'</option>';
           }

          for(var i=0;i<data.length;i++){
          op+='<option value="'+data[i].schedule2+'">'+data[i].schedule2+' '+data[i].sched3+' - '+data[i].sched4+'</option>';
           }

          for(var i=0;i<data.length;i++){
          op+='<option value="'+data[i].schedule3+'">'+data[i].schedule3+' '+data[i].sched5+' - '+data[i].sched5+'</option>';
           }

           div.find('.prod_price4').html(" ");
           div.find('.prod_price4').append(op);
        },
        error:function(){

        }
      });
    });





    
    

    


    




    $(document).on('change','.productname',function () {
      var prod_id=$(this).val();

      var a=$(this).parent();
      console.log(prod_id);
      var op="";
      $.ajax({
        type:'get',
        url:'{!!URL::to('findPrice3')!!}',
        data:{'id':prod_id},
        dataType:'json',//return data will be json
        success:function(data){
          console.log("id");
          console.log(data.id);

          // here price is coloumn name in products table data.coln name

          a.find('.prod_price3').val(data.id);

        },
        error:function(){

        }
      });


    });


  });
</script>



<!--<script>
  $(document).on('change','.productname',function () {
      var prod_id=$(this).val();

      var a=$(this).parent();
      console.log(prod_id);
      var op="";
      $.ajax({
        type:'get',
        url:'{!!URL::to('findPrice')!!}',
        data:{'id':prod_id},
        dataType:'json',//return data will be json
        success:function(data){
          console.log("schedule1");
          console.log(data.schedule1);

          // here price is coloumn name in products table data.coln name

          a.find('.prod_price').val(data.schedule1);

        },
        error:function(){

        }
      });


    });

    $(document).on('change','.productname',function () {
      var prod_id=$(this).val();

      var a=$(this).parent();
      console.log(prod_id);
      var op="";
      $.ajax({
        type:'get',
        url:'{!!URL::to('findPrice1')!!}',
        data:{'id':prod_id},
        dataType:'json',//return data will be json
        success:function(data){
          console.log("schedule2");
          console.log(data.schedule2);

          // here price is coloumn name in products table data.coln name

          a.find('.prod_price1').val(data.schedule2);

        },
        error:function(){

        }
      });


    });
    $(document).on('change','.productname',function () {
      var prod_id=$(this).val();

      var a=$(this).parent();
      console.log(prod_id);
      var op="";
      $.ajax({
        type:'get',
        url:'{!!URL::to('findPrice2')!!}',
        data:{'id':prod_id},
        dataType:'json',//return data will be json
        success:function(data){
          console.log("schedule3");
          console.log(data.schedule3);

          // here price is coloumn name in products table data.coln name

          a.find('.prod_price2').val(data.schedule3);

        },
        error:function(){

        }
      });


    });
    $(document).on('change','.productname',function () {
      var prod_id=$(this).val();

      var a=$(this).parent();
      console.log(prod_id);
      var op="";
      $.ajax({
        type:'get',
        url:'{!!URL::to('findPrice3')!!}',
        data:{'id':prod_id},
        dataType:'json',//return data will be json
        success:function(data){
          console.log("id");
          console.log(data.id);

          // here price is coloumn name in products table data.coln name

          a.find('.prod_price3').val(data.id);

        },
        error:function(){

        }
      });


    });
</script>-->
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

  
  <script>
  
  document.querySelectorAll('input[type="number"]').forEach(input =>{
    input.oninput = () =>{
      if(input.value.length > input.maxLength) input.value = input.value.slice(0, input.maxLength);
    };
  });
</script>
  


<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>

  
</body>
</html>