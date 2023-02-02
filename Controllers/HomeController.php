<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use RealRashid\SweetAlert\Facades\Alert;

use App\Models\User; 

use App\Models\Doctor;

use App\Models\Health;

use App\Models\Facility;

use App\Models\Specialty;

use App\Models\Gcash;

use App\Models\Schedule;

use App\Models\Time;

use App\Models\Appointment;

use App\Models\Data;

use DB;

class HomeController extends Controller
{

    public function redirect(Request $request)
    {

        if(Auth::id())
        {
            if(Auth::user()->usertype=='0')
            {

                 $userid=Auth::user()->id;

                $name=Auth::user()->name;

                $fullname=Auth::user()->fullname;

                $mname=Auth::user()->mname;

                $phone=Auth::user()->phone;

                $email=Auth::user()->email;


                $notifications=appointment::where('user_id',$userid)->where('status','approve')->orwhere('status','cancel')->get();

                $user=user::where('name',$name)->get();

                $user1=user::where('fullname',$fullname)->get();

                $user2=user::where('mname',$mname)->get();

                $user3=user::where('phone',$phone)->get();

                $user4=user::where('email',$email)->get();

                $doctor = doctor::whereNotNull('name')->get();

                $prod= specialty::all();



            

                






                return view('user.home',compact('doctor','prod','user','user1','user2','user3','user4','notifications'));
            }

            if(Auth::user()->usertype=='2')
            {
            

                $doctor = doctor::all();


//////////////////////////name/////////////////////////
                $doctorname1 = doctor::where('id','1')->get()->first();

                $doctorname2 = doctor::where('id','2')->get()->first();

                $doctorname3 = doctor::where('id','3')->get()->first();

                $doctorname4 = doctor::where('id','4')->get()->first();

                $doctorname5 = doctor::where('id','5')->get()->first();

                $doctorname6 = doctor::where('id','6')->get()->first();

                $doctorname7 = doctor::where('id','7')->get()->first();

                $doctorname8 = doctor::where('id','8')->get()->first();

                $doctorname9 = doctor::where('id','9')->get()->first();

                $doctorname10 = doctor::where('id','10')->get()->first();

                $doctorname11 = doctor::where('id','11')->get()->first();

                $doctorname12 = doctor::where('id','12')->get()->first();

                $doctorname13 = doctor::where('id','13')->get()->first();

                $doctorname14 = doctor::where('id','14')->get()->first();

                $doctorname15 = doctor::where('id','15')->get()->first();

                $doctorname16 = doctor::where('id','16')->get()->first();

                $doctorname17 = doctor::where('id','17')->get()->first();

                $doctorname18 = doctor::where('id','18')->get()->first();

                $doctorname19 = doctor::where('id','19')->get()->first();

                $doctorname20 = doctor::where('id','20')->get()->first();

                $doctorname21 = doctor::where('id','21')->get()->first();

                $doctorname22 = doctor::where('id','22')->get()->first();

                $doctorname23 = doctor::where('id','23')->get()->first();

                $doctorname24 = doctor::where('id','24')->get()->first();

                $doctorname25 = doctor::where('id','25')->get()->first();

                $doctorname26 = doctor::where('id','26')->get()->first();

                $doctorname27 = doctor::where('id','27')->get()->first();

                $doctorname28 = doctor::where('id','28')->get()->first();

                $doctorname29 = doctor::where('id','29')->get()->first();

                $doctorname30 = doctor::where('id','30')->get()->first();

//////////////////////////name/////////////////////////

//////////////////////////count/////////////////////////
                $doctor1 = appointment::where('doctor_id','1')->whereNot('doctor_id','1')->orWhere('doctor','RODERICK D. MACASAET')->count();

                $doctor2 = appointment::where('doctor_id','2')->whereNot('doctor_id','2')->orWhere('doctor','ELIZABETH GARDIOLA BESING')->count();

                $doctor3 = appointment::where('doctor_id','3')->whereNot('doctor_id','3')->orWhere('doctor','JANETTE CASTILLO REYES')->count();

                $doctor4 = appointment::where('doctor_id','4')->whereNot('doctor_id','4')->orWhere('doctor','VALERIE MENDOZA')->count();

                $doctor5 = appointment::where('doctor_id','5')->whereNot('doctor_id','5')->orWhere('doctor','JUSTICE MAY TAGLE VILLEGAS')->count();

                $doctor6 = appointment::where('doctor_id','6')->whereNot('doctor_id','6')->orWhere('doctor','TODELLE JOY NADAL PASOMANERO')->count();

                $doctor7 = appointment::where('doctor_id','7')->whereNot('doctor_id','7')->orWhere('doctor','SHIELA MARIE E. GONZALES')->count();

                $doctor8 = appointment::where('doctor_id','8')->whereNot('doctor_id','8')->orWhere('doctor','MIA NADAL')->count();

                $doctor9 = appointment::where('doctor_id','9')->whereNot('doctor_id','9')->orWhere('doctor','RODA PANGANIBAN')->count();

                $doctor10 = appointment::where('doctor_id','10')->whereNot('doctor_id','10')->orWhere('doctor','TEO BOSCO U. GONZALES')->count();

                $doctor11 = appointment::where('doctor_id','11')->whereNot('doctor_id','11')->orWhere('doctor','MINNIE M. CHAVEZ')->count();

                $doctor12 = appointment::where('doctor_id','12')->whereNot('doctor_id','12')->orWhere('doctor','SHERRY EVETT YAP GONZALES')->count();

                $doctor13 = appointment::where('doctor_id','13')->whereNot('doctor_id','13')->orWhere('doctor','ALLAN LAT')->count();

                $doctor14 = appointment::where('doctor_id','14')->whereNot('doctor_id','14')->orWhere('doctor','FREDERICK L. IGLESIA')->count();

                $doctor15 = appointment::where('doctor_id','15')->whereNot('doctor_id','15')->count();

                $doctor16 = appointment::where('doctor_id','16')->whereNot('doctor_id','16')->count();

                $doctor17 = appointment::where('doctor_id','17')->whereNot('doctor_id','17')->count();

                $doctor18 = appointment::where('doctor_id','18')->whereNot('doctor_id','18')->count();

                $doctor19 = appointment::where('doctor_id','19')->whereNot('doctor_id','19')->count();

                $doctor20 = appointment::where('doctor_id','20')->whereNot('doctor_id','20')->count();

                $doctor21 = appointment::where('doctor_id','21')->whereNot('doctor_id','21')->count();

                $doctor22 = appointment::where('doctor_id','22')->whereNot('doctor_id','22')->count();

                $doctor23 = appointment::where('doctor_id','23')->whereNot('doctor_id','23')->count();

                $doctor24 = appointment::where('doctor_id','24')->whereNot('doctor_id','24')->count();

                $doctor25 = appointment::where('doctor_id','25')->whereNot('doctor_id','25')->count();

                $doctor26 = appointment::where('doctor_id','26')->whereNot('doctor_id','26')->count();

                $doctor27 = appointment::where('doctor_id','27')->whereNot('doctor_id','27')->count();

                $doctor28 = appointment::where('doctor_id','28')->whereNot('doctor_id','28')->count();

                $doctor29 = appointment::where('doctor_id','29')->whereNot('doctor_id','29')->count();

                $doctor30 = appointment::where('doctor_id','30')->whereNot('doctor_id','30')->count();


//////////////////////////count/////////////////////////
                return view ('admin.doctor_show',compact('doctor','doctor1','doctor2','doctor3','doctor4','doctor5','doctor6','doctor7','doctor8','doctor9','doctor10','doctor11','doctor12','doctor13','doctor14','doctor15','doctor16','doctor17','doctor18','doctor19','doctor20','doctor21','doctor22','doctor23','doctor24','doctor25','doctor26','doctor27','doctor28','doctor29','doctor30','doctorname1','doctorname2','doctorname3','doctorname4','doctorname5','doctorname6','doctorname7','doctorname8','doctorname9','doctorname10','doctorname11','doctorname12','doctorname13','doctorname14','doctorname15','doctorname16','doctorname17','doctorname18','doctorname19','doctorname20','doctorname21','doctorname22','doctorname23','doctorname24','doctorname25','doctorname26','doctorname27','doctorname28','doctorname29','doctorname30'));
           





                return view('admin.doctor_show');
            }
            


            else
            {


                $total_appointment = appointment::all()->count();

                $total_doctor = doctor::all()->where('speciality')->count();

                $total_user = user::all()->where('usertype','0')->count();

                





                

                

                return view('admin.home',compact('total_appointment','total_doctor','total_user'));
            }




    

 
    	}



    	else
    	{
    		return redirect()->back();
    	}


    }



    public function index()
    {
        if(Auth::id())
        {
            
            return redirect('home');
        }

        else

        {


        $doctor = doctor::whereNotNull('name')->get();

        $specialty= specialty::all();

        
    	return view('user.home',compact('doctor','specialty'));
        }
    }


    public function appointment(Request $request,$id)
    {

        $request->validate([

            'name'=>'required',
            'email'=>'required',
            'number'=>'required',
            'message'=>'required',
            'id'=>'required',
            'specialty'=>'required',
            'doctor'=>'required'


        ]);

        if(Auth::id())

        {

            if(Auth::user()->usertype==0)

            { 

 
        $data2=doctor::find($id);

        $data = new appointment;

        $data->name=$request->name;

        $data->gname=$request->gname;

        $data->mname=$request->mname;

        $data->email=$request->email;

        $data->date=$request->date;

        $data->date1=$request->date1;

        $data->date2=$request->date2;

        $data->date3=$request->date3;

        $data->date4=$request->date4;

        $data->date5=$request->date5;

        $data->date6=$request->date6;

        $data->phone=$request->number;

        $data->message=$request->message;

        $data->doctor=$request->doctor;

        $data->specialty=$request->specialty;

        $data->doctor_id=$request->id;

        $data->status='Waiting';

        if(Auth::id())
        {
            
        $data->user_id=Auth::user()->id;

        }



        $data->save();

        Alert::success('Appointment Added Successfully','Check The My Appointment Page for Details');

        return redirect()->back();


        }

        else
        {
            return redirect()->back();

        }

    }

        else
        {
            return redirect('login');
        }


    }

    public function myappointment()
    {
        if(Auth::id())
        {

            if(Auth::user()->usertype==0);

            {

                $userid=Auth::user()->id;

                $notifications=appointment::where('user_id',$userid)->where('status','approve')->orwhere('status','cancel')->get();

        $appoint=appointment::where('user_id',$userid)->get();

        $health=health::where('user_id',$userid)->get();    
        return view('user.my_appointment',compact('appoint','notifications','health'));

            }

        
    }

    else
    {
        return redirect()->back();
    }

    


    }

    public function cancel_appoint($id)
    {


        $data=appointment::find($id);

        $data->delete();

        return redirect()->back();


    }


    public function aboutus()
    {

        if(Auth::id())
        {
            if(Auth::user()->usertype==0);

          {
                $userid=Auth::user()->id;
              $facility= facility::all();
              $notifications=appointment::where('user_id',$userid)->where('status','approve')->orwhere('status','cancel')->get();

        return view('user.about_us',compact('facility','notifications'));
            
          }  
 


    }
        else
        {

        $facility= facility::all();

        return view('user.about_us',compact('facility'));
        }



    }


    public function services()
    {
        if(Auth::id())
        {

            if(Auth::user()->usertype==0);

            {

                $userid=Auth::user()->id;

                $notifications=appointment::where('user_id',$userid)->where('status','approve')->orwhere('status','cancel')->get();

        

        $health=health::where('user_id',$userid)->get();    
        return view('user.services',compact('notifications','health'));

            }

        
    }

    else
    {
        return redirect()->back();
    }

    


    } 

    public function selectme()
    {

        if(Auth::id())
        {
            if(Auth::user()->usertype==0);

          {

        return view('user.selectme');
            
          }  
 


    }
        else
        {

        return redirect()->back();
        }
    



    }

    public function video()
    {

        if(Auth::id())
        {
            if(Auth::user()->usertype==0);

          {

        return view('user.video');
            
          }  
 


    }
        else
        {

        return redirect()->back();
        }
    



    }



    public function appoint(Request $request)
    {


        if(Auth::id())
        {
            if(Auth::user()->usertype==0);

          {

                $userid=Auth::user()->id;
              $name=Auth::user()->name;

                $fullname=Auth::user()->fullname;

                $mname=Auth::user()->mname;

                $phone=Auth::user()->phone;

                $email=Auth::user()->email;

                $user=user::where('id',$userid)->where('name',$name)->get();

                $user1=user::where('id',$userid)->where('fullname',$fullname)->get();

                $user2=user::where('id',$userid)->where('mname',$mname)->get();

                $user3=user::where('id',$userid)->where('phone',$phone)->get();

                $user4=user::where('email',$email)->get();

                $doctor = doctor::whereNotNull('name')->get();

                $prod= specialty::all();

                 $notifications=appointment::where('user_id',$userid)->where('status','approve')->orwhere('status','cancel')->get();



            

                






                return view('user.appoint',compact('doctor','prod','user','user1','user2','user3','user4','notifications'));
            
          } 

          $request->validate([

            'name'=>'required',
            'email'=>'required',
            'number'=>'required',
            'message'=>'required',
            'id'=>'required',
            'specialty'=>'required',
            'doctor'=>'required'


        ]);

    if(Auth::user()->usertype==0)

            { 

 
        $data2=doctor::find($id);



        
    
        

        $data2=doctor::find($id);

        $data = new appointment;

        $data->name=$request->name;

        $data->gname=$request->gname;

        $data->mname=$request->mname;

        $data->email=$request->email;

        $data->date=$request->date;

        $data->date=$request->date2;

        $data->date=$request->date3;

        $data->date=$request->date4;

        $data->date=$request->date5;

        $data->date=$request->date6;

        $data->phone=$request->number;

        $data->message=$request->message;

        $data->doctor=$request->doctor;

        $data->specialty=$request->specialty;

        $data->doctor_id=$request->id;

        $data->status='Waiting';

        if(Auth::id())
        {
            
        $data->user_id=Auth::user()->id;


        }



        $data->save();

        Alert::success('Appointment Added Successfully','Check The My Appointment Page for Details');

        return redirect()->back();


        }


    }
        

        else
        {
            return redirect('login');
        }




    }

    public function findProductName(Request $request){

        
        //if our chosen id and products table prod_cat_id col match the get first 100 data 

        //$request->id here is the id of our chosen option id
        $data=doctor::select('name')->where('speciality',$request->id)->take(10)->get();
        return response()->json($data);//then sent this data to ajax success
    }

 


    public function findPrice(Request $request){
    
        //it will get price if its id match with product id
        $p=doctor::select('schedule1')->where('name',$request->id)->first();
        
        return response()->json($p);
    }


    public function findPrice1(Request $request){
    
        //it will get price if its id match with product id
        $p=doctor::select('schedule2')->where('name',$request->id)->first();
        
        return response()->json($p);
    }

    public function findPrice2(Request $request){
    
        //it will get price if its id match with product id
        $p=doctor::select('schedule3')->where('name',$request->id)->first();
        
        return response()->json($p);
    }

    public function findPrice3(Request $request){
    
        //it will get price if its id match with product id
        $p=doctor::select('id')->where('name',$request->id)->first();
        
        return response()->json($p);
    }

    public function findPrice4(Request $request){
    
        $data=doctor::select('schedule1')->addselect('sched1')->addselect('sched2')->addselect('schedule2')->addselect('sched3')->addselect('sched4')->addselect('schedule3')->addselect('sched5')->addselect('sched6')->where('name',$request->id)->take(10)->get();
        return response()->json($data);//then sent this data to ajax success

    }








public function date()
    {

        if(Auth::id())
        {
            if(Auth::user()->usertype==0);

          {

        return view('user.date');
            
          }  
 


    }
        else
        {

        return redirect()->back();
        }
    



    }










}








    


