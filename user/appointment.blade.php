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


  <select style="width: 347px" name="doctor" class="productname">

    <option value="0" selected disabled>Doctor</option>

  </select>
  <span style="color: red">
              
              @error('doctor')

              {{$message}}

              @enderror

            </span>


  
  <input style="width: 347px" type="text" class="prod_price" input disabled>

  
  

            
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

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

  });
</script>







  <script>
  
  document.querySelectorAll('input[type="number"]').forEach(input =>{
    input.oninput = () =>{
      if(input.value.length > input.maxLength) input.value = input.value.slice(0, input.maxLength);
    };
  });
</script>
  