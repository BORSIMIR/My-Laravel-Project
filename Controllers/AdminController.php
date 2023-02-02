<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Doctor;

use App\Models\Facility;

use App\Models\Health;

use App\Models\Gcash;

use App\Models\Specialty;

use App\Models\User; 

use App\Models\Time;

use App\Models\Schedule;

use Illuminate\Support\Facades\Auth;

use App\Models\Appointment;

use Notification;

use App\Notifications\SendEmailNotification;

use DB;

use PDF;

class AdminController extends Controller
{
    public function addview()
    {

        if(Auth::id())

        {
            
            if(Auth::user()->usertype==1)
            {
                

                return view ('admin.add_doctor');
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


    	return view ('admin.add_doctor');
    }



    public function upload(Request $request)
    {
        
    	$doctor=new doctor;
    	$image=$request->file;

    $imagename=time().'.'.$image->getClientoriginalExtension();

    $request->file->move('doctorimage',$imagename);

    $doctor->image=$imagename;

    $doctor->name=$request->name;

    $doctor->phone=$request->number;

    $doctor->speciality=$request->speciality;

    $doctor->schedule1=$request->schedule1;

    $doctor->schedule2=$request->schedule2;

    $doctor->schedule3=$request->schedule3;


    $doctor->save();

    return redirect()->back()->with('message','Doctor Added Successfully');



    }

    public function showappointment()
    {

        if(Auth::id())

        {


            if(Auth::user()->usertype==1)

            {

        $data=appointment::all();

        return view('admin.showappointment',compact('data'));

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


    public function approved($id)
    {

        $data=appointment::find($id);

        $data->status='Approve';

        $data->save();

        return redirect()->back();

    }

        public function cancelled($id)
    {

        $data=appointment::find($id);

        $data->status='Cancel';

        $data->save();

        return redirect()->back();

    }

    public function deleteappoint($id)
    {


        $data=appointment::find($id);

        $data->delete();

        return redirect()->back();




    }



    public function showdoctor()
    {
        if(Auth::id())

        {

            if(Auth::user()->usertype==1)

            {

        $data = doctor::all();


        return view('admin.showdoctor',compact('data'));

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

    public function deletedoctor($id)
    {


        $data=doctor::find($id);

        $data->delete();

        return redirect()->back();




    }

    public function updatedoctor($id)
    {
        if(Auth::id())

        {
            
            if(Auth::user()->usertype==1)

            {
                
        $data = doctor::find($id);
        $specs = specialty::all();
        $sched1 = schedule::all();
        $sched2 = schedule::all();
        $sched3 = schedule::all();
        $time1 = time::all();
        $time2 = time::all();
        $time3 = time::all();


        return view('admin.update_doctor',compact('data','specs','sched1','time1','time2','time3','sched2','sched3'));

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

    public function editdoctor(request $request, $id)
    {
    
        if(Auth::user()->usertype==1)

            {
                
        
        $doctor = doctor::find($id);


        $doctor->name=$request->name;

        $doctor->speciality=$request->speciality;

        $doctor->schedule1=$request->schedule1;

        $doctor->sched1=$request->am1;

        $doctor->sched2=$request->pm1;

        $doctor->schedule2=$request->schedule2;

        $doctor->sched3=$request->am2;

        $doctor->sched4=$request->pm2;

        $doctor->schedule3=$request->schedule3;

        $doctor->sched5=$request->am3;

        $doctor->sched6=$request->pm3;

        $image=$request->file;

        if($image)

        {    

        $imagename=time().'.'.$image->getClientoriginalExtension();

        $request->file->move('doctorimage',$imagename);

        $doctor->image=$imagename;

        }

        $doctor->save();

        return redirect()->back()->with('message', 'Doctor Details Update Successfully');
    }

    

    }

    public function emailview($id)
    {
        if(Auth::id())

        {

            if(Auth::user()->usertype==1)

            {

        $data=appointment::find($id);

        return view('admin.email_view',compact('data'));

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

    public function sendemail(request $request,$id)
    {

        $data = appointment::find($id);

        $details=[

            'greeting' => $request->greeting,

            'body' => $request->body,

            'actiontext' => $request->actiontext,

            'actionurl' => $request->actionurl,

            'endpart' => $request->endpart


        ];


        Notification::send($data,new SendEmailNotification($details));

        return redirect()->back()->with('message','Email send is Successful');



    }

public function body()
    {
        if(Auth::id())

        {

            if(Auth::user()->usertype==1)

            {

        $total_appointment=appointment::all()->count();

        return view('admin.body',compact('total_appointment'));

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
//////////////////////////////////DOCTOR////////////////////////////////////
public function doctorappointment()

    {
        if(Auth::id())

        {

            if(Auth::user()->usertype==1)
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
                return view ('admin.doctor_appointment',compact('doctor','doctor1','doctor2','doctor3','doctor4','doctor5','doctor6','doctor7','doctor8','doctor9','doctor10','doctor11','doctor12','doctor13','doctor14','doctor15','doctor16','doctor17','doctor18','doctor19','doctor20','doctor21','doctor22','doctor23','doctor24','doctor25','doctor26','doctor27','doctor28','doctor29','doctor30','doctorname1','doctorname2','doctorname3','doctorname4','doctorname5','doctorname6','doctorname7','doctorname8','doctorname9','doctorname10','doctorname11','doctorname12','doctorname13','doctorname14','doctorname15','doctorname16','doctorname17','doctorname18','doctorname19','doctorname20','doctorname21','doctorname22','doctorname23','doctorname24','doctorname25','doctorname26','doctorname27','doctorname28','doctorname29','doctorname30'));
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

        
        return view('admin.doctor_appointment');

    }

//////////////////////////////////DOCTOR////////////////////////////////////
////////////////////////DOCTOR APPOINTMENT VIEW/////////////////////////
 public function docappointview()
    {

        if(Auth::id())

        {

            if(Auth::user()->usertype==1)

            {

        $data=appointment::where('doctor_id','1')->whereNot('doctor_id','1')->orWhere('doctor','RODERICK D. MACASAET')->get();

        return view('admin.docappointview',compact('data'));

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

    public function docappointview1()
    {

        if(Auth::id())

        {

            if(Auth::user()->usertype==1)

            {

        $data=appointment::where('doctor_id','2')->whereNot('doctor_id','2')->orWhere('doctor','ELIZABETH GARDIOLA BESING')->get();

        return view('admin.docappointview1',compact('data'));

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

    public function docappointview2()
    {

        if(Auth::id())

        {

            if(Auth::user()->usertype==1)

            {

        $data=appointment::where('doctor_id','3')->whereNot('doctor_id','3')->orWhere('doctor','JANETTE CASTILLO REYES')->get();


        return view('admin.docappointview2',compact('data'));

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

    public function docappointview3()
    {

        if(Auth::id())

        {

            if(Auth::user()->usertype==1)

            {

        $data=appointment::where('doctor_id','4')->whereNot('doctor_id','4')->orWhere('doctor','VALERIE MENDOZA')->get();

        return view('admin.docappointview3',compact('data'));

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

    public function docappointview4()
    {

        if(Auth::id())

        {

            if(Auth::user()->usertype==1)

            {

        $data=appointment::where('doctor_id','5')->whereNot('doctor_id','5')->orWhere('doctor','JUSTICE MAY TAGLE VILLEGAS')->get();

        return view('admin.docappointview4',compact('data'));

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

    public function docappointview5()
    {

        if(Auth::id())

        {

            if(Auth::user()->usertype==1)

            {

        $data=appointment::where('doctor_id','6')->whereNot('doctor_id','6')->orWhere('doctor','TODELLE JOY NADAL PASOMANERO')->get();

        return view('admin.docappointview5',compact('data'));

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

    public function docappointview6()
    {

        if(Auth::id())

        {

            if(Auth::user()->usertype==1)

            {

        $data=appointment::where('doctor_id','7')->whereNot('doctor_id','7')->orWhere('doctor','SHIELA MARIE E. GONZALES')->get();

        return view('admin.docappointview6',compact('data'));

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

    public function docappointview7()
    {

        if(Auth::id())

        {

            if(Auth::user()->usertype==1)

            {

        $data=appointment::where('doctor_id','8')->whereNot('doctor_id','8')->orWhere('doctor','MIA NADAL')->get();

        return view('admin.docappointview7',compact('data'));

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

    public function docappointview8()
    {

        if(Auth::id())

        {

            if(Auth::user()->usertype==1)

            {

        $data=appointment::where('doctor_id','9')->whereNot('doctor_id','9')->orWhere('doctor','RODA PANGANIBAN')->get();

        return view('admin.docappointview8',compact('data'));

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

    public function docappointview9()
    {

        if(Auth::id())

        {

            if(Auth::user()->usertype==1)

            {

        $data=appointment::where('doctor_id','10')->whereNot('doctor_id','10')->orWhere('doctor','TEO BOSCO U. GONZALES')->get();

        return view('admin.docappointview9',compact('data'));

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

    public function docappointview10()
    {

        if(Auth::id())

        {

            if(Auth::user()->usertype==1)

            {

        $data=appointment::where('doctor_id','11')->whereNot('doctor_id','11')->orWhere('doctor','MINNIE M. CHAVEZ')->get();


        return view('admin.docappointview10',compact('data'));

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

    public function docappointview11()
    {

        if(Auth::id())

        {

            if(Auth::user()->usertype==1)

            {

        $data=appointment::where('doctor_id','12')->whereNot('doctor_id','12')->orWhere('doctor','SHERRY EVETT YAP GONZALES')->get();

        return view('admin.docappointview11',compact('data'));

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

    public function docappointview12()
    {

        if(Auth::id())

        {

            if(Auth::user()->usertype==1)

            {

        $data=appointment::where('doctor_id','13')->whereNot('doctor_id','13')->orWhere('doctor','ALLAN LAT')->get();

        return view('admin.docappointview12',compact('data'));

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

    public function docappointview13()
    {

        if(Auth::id())

        {

            if(Auth::user()->usertype==1)

            {

        $data=appointment::where('doctor_id','14')->whereNot('doctor_id','14')->orWhere('doctor','FREDERICK L. IGLESIA')->get();

        return view('admin.docappointview13',compact('data'));

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

    public function docappointview14()
    {

        if(Auth::id())

        {

            if(Auth::user()->usertype==1)

            {

        $data=appointment::where('doctor_id','15')->get();

        return view('admin.docappointview14',compact('data'));

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

    public function docappointview15()
    {

        if(Auth::id())

        {

            if(Auth::user()->usertype==1)

            {

        $data=appointment::where('doctor_id','16')->get();

        return view('admin.docappointview15',compact('data'));

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

    public function docappointview16()
    {

        if(Auth::id())

        {

            if(Auth::user()->usertype==1)

            {

        $data=appointment::where('doctor_id','17')->get();

        return view('admin.docappointview16',compact('data'));

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

    public function docappointview17()
    {

        if(Auth::id())

        {

            if(Auth::user()->usertype==1)

            {

        $data=appointment::where('doctor_id','18')->get();

        return view('admin.docappointview17',compact('data'));

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

    public function docappointview18()
    {

        if(Auth::id())

        {

            if(Auth::user()->usertype==1)

            {

        $data=appointment::where('doctor_id','19')->get();

        return view('admin.docappointview18',compact('data'));

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

    public function docappointview19()
    {

        if(Auth::id())

        {

            if(Auth::user()->usertype==1)

            {

        $data=appointment::where('doctor_id','20')->get();

        return view('admin.docappointview19',compact('data'));

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

    public function docappointview20()
    {

        if(Auth::id())

        {

            if(Auth::user()->usertype==1)

            {

        $data=appointment::where('doctor_id','21')->get();

        return view('admin.docappointview20',compact('data'));

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

    public function docappointview21()
    {

        if(Auth::id())

        {

            if(Auth::user()->usertype==1)

            {

        $data=appointment::where('doctor_id','22')->get();

        return view('admin.docappointview21',compact('data'));

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

    public function docappointview22()
    {

        if(Auth::id())

        {

            if(Auth::user()->usertype==1)

            {

        $data=appointment::where('doctor_id','23')->get();

        return view('admin.docappointview22',compact('data'));

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

    public function docappointview23()
    {

        if(Auth::id())

        {

            if(Auth::user()->usertype==1)

            {

        $data=appointment::where('doctor_id','24')->get();

        return view('admin.docappointview23',compact('data'));

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

    public function docappointview24()
    {

        if(Auth::id())

        {

            if(Auth::user()->usertype==1)

            {

        $data=appointment::where('doctor_id','25')->get();

        return view('admin.docappointview24',compact('data'));

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

    public function docappointview25()
    {

        if(Auth::id())

        {

            if(Auth::user()->usertype==1)

            {

        $data=appointment::where('doctor_id','26')->get();

        return view('admin.docappointview25',compact('data'));

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

    public function docappointview26()
    {

        if(Auth::id())

        {

            if(Auth::user()->usertype==1)

            {

        $data=appointment::where('doctor_id','27')->get();

        return view('admin.docappointview26',compact('data'));

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

    public function docappointview27()
    {

        if(Auth::id())

        {

            if(Auth::user()->usertype==1)

            {

        $data=appointment::where('doctor_id','28')->get();

        return view('admin.docappointview27',compact('data'));

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

    public function docappointview28()
    {

        if(Auth::id())

        {

            if(Auth::user()->usertype==1)

            {

        $data=appointment::where('doctor_id','29')->get();

        return view('admin.docappointview28',compact('data'));

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

    public function docappointview29()
    {

        if(Auth::id())

        {

            if(Auth::user()->usertype==1)

            {

        $data=appointment::where('doctor_id','30')->get();

        return view('admin.docappointview29',compact('data'));

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

////////////////////////DOCTOR APPOINTMENT VIEW/////////////////////////
    ////////////////////////DOCTOR APPOINTMENT VIEW/////////////////////////
 public function adocappointview()
    {

        if(Auth::id())

        {

            if(Auth::user()->usertype==2)

            {

        $data=appointment::where('doctor_id','1')->whereNot('doctor_id','1')->orWhere('doctor','RODERICK D. MACASAET')->get();

        return view('admin.adocappointview',compact('data'));

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

    public function adocappointview1()
    {

        if(Auth::id())

        {

            if(Auth::user()->usertype==2)

            {

        $data=appointment::where('doctor_id','2')->whereNot('doctor_id','2')->orWhere('doctor','ELIZABETH GARDIOLA BESING')->get();

        return view('admin.adocappointview1',compact('data'));

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

    public function adocappointview2()
    {

        if(Auth::id())

        {

            if(Auth::user()->usertype==2)

            {

        $data=appointment::where('doctor_id','3')->whereNot('doctor_id','3')->orWhere('doctor','JANETTE CASTILLO REYES')->get();


        return view('admin.adocappointview2',compact('data'));

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

    public function adocappointview3()
    {

        if(Auth::id())

        {

            if(Auth::user()->usertype==2)

            {

        $data=appointment::where('doctor_id','4')->whereNot('doctor_id','4')->orWhere('doctor','VALERIE MENDOZA')->get();

        return view('admin.adocappointview3',compact('data'));

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

    public function adocappointview4()
    {

        if(Auth::id())

        {

            if(Auth::user()->usertype==2)

            {

        $data=appointment::where('doctor_id','5')->whereNot('doctor_id','5')->orWhere('doctor','JUSTICE MAY TAGLE VILLEGAS')->get();

        return view('admin.adocappointview4',compact('data'));

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

    public function adocappointview5()
    {

        if(Auth::id())

        {

            if(Auth::user()->usertype==2)

            {

        $data=appointment::where('doctor_id','6')->whereNot('doctor_id','6')->orWhere('doctor','TODELLE JOY NADAL PASOMANERO')->get();

        return view('admin.adocappointview5',compact('data'));

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

    public function adocappointview6()
    {

        if(Auth::id())

        {

            if(Auth::user()->usertype==2)

            {

        $data=appointment::where('doctor_id','7')->whereNot('doctor_id','7')->orWhere('doctor','SHIELA MARIE E. GONZALES')->get();

        return view('admin.adocappointview6',compact('data'));

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

    public function adocappointview7()
    {

        if(Auth::id())

        {

            if(Auth::user()->usertype==2)

            {

        $data=appointment::where('doctor_id','8')->whereNot('doctor_id','8')->orWhere('doctor','MIA NADAL')->get();

        return view('admin.adocappointview7',compact('data'));

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

    public function adocappointview8()
    {

        if(Auth::id())

        {

            if(Auth::user()->usertype==2)

            {

        $data=appointment::where('doctor_id','9')->whereNot('doctor_id','9')->orWhere('doctor','RODA PANGANIBAN')->get();

        return view('admin.adocappointview8',compact('data'));

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

    public function adocappointview9()
    {

        if(Auth::id())

        {

            if(Auth::user()->usertype==2)

            {

        $data=appointment::where('doctor_id','10')->whereNot('doctor_id','10')->orWhere('doctor','TEO BOSCO U. GONZALES')->get();

        return view('admin.adocappointview9',compact('data'));

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

    public function adocappointview10()
    {

        if(Auth::id())

        {

            if(Auth::user()->usertype==2)

            {

        $data=appointment::where('doctor_id','11')->whereNot('doctor_id','11')->orWhere('doctor','MINNIE M. CHAVEZ')->get();


        return view('admin.adocappointview10',compact('data'));

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

    public function adocappointview11()
    {

        if(Auth::id())

        {

            if(Auth::user()->usertype==2)

            {

        $data=appointment::where('doctor_id','12')->whereNot('doctor_id','12')->orWhere('doctor','SHERRY EVETT YAP GONZALES')->get();

        return view('admin.adocappointview11',compact('data'));

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

    public function adocappointview12()
    {

        if(Auth::id())

        {

            if(Auth::user()->usertype==2)

            {

        $data=appointment::where('doctor_id','13')->whereNot('doctor_id','13')->orWhere('doctor','ALLAN LAT')->get();

        return view('admin.adocappointview12',compact('data'));

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

    public function adocappointview13()
    {

        if(Auth::id())

        {

            if(Auth::user()->usertype==2)

            {

        $data=appointment::where('doctor_id','14')->whereNot('doctor_id','14')->orWhere('doctor','FREDERICK L. IGLESIA')->get();

        return view('admin.adocappointview13',compact('data'));

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

    public function adocappointview14()
    {

        if(Auth::id())

        {

            if(Auth::user()->usertype==2)

            {

        $data=appointment::where('doctor_id','15')->get();

        return view('admin.adocappointview14',compact('data'));

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

    public function adocappointview15()
    {

        if(Auth::id())

        {

            if(Auth::user()->usertype==2)

            {

        $data=appointment::where('doctor_id','16')->get();

        return view('admin.adocappointview15',compact('data'));

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

    public function adocappointview16()
    {

        if(Auth::id())

        {

            if(Auth::user()->usertype==2)

            {

        $data=appointment::where('doctor_id','17')->get();

        return view('admin.adocappointview16',compact('data'));

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

    public function adocappointview17()
    {

        if(Auth::id())

        {

            if(Auth::user()->usertype==2)

            {

        $data=appointment::where('doctor_id','18')->get();

        return view('admin.adocappointview17',compact('data'));

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

    public function adocappointview18()
    {

        if(Auth::id())

        {

            if(Auth::user()->usertype==2)

            {

        $data=appointment::where('doctor_id','19')->get();

        return view('admin.adocappointview18',compact('data'));

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

    public function adocappointview19()
    {

        if(Auth::id())

        {

            if(Auth::user()->usertype==2)

            {

        $data=appointment::where('doctor_id','20')->get();

        return view('admin.adocappointview19',compact('data'));

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

    public function adocappointview20()
    {

        if(Auth::id())

        {

            if(Auth::user()->usertype==2)

            {

        $data=appointment::where('doctor_id','21')->get();

        return view('admin.adocappointview20',compact('data'));

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

    public function adocappointview21()
    {

        if(Auth::id())

        {

            if(Auth::user()->usertype==2)

            {

        $data=appointment::where('doctor_id','22')->get();

        return view('admin.adocappointview21',compact('data'));

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

    public function adocappointview22()
    {

        if(Auth::id())

        {

            if(Auth::user()->usertype==2)

            {

        $data=appointment::where('doctor_id','23')->get();

        return view('admin.adocappointview22',compact('data'));

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

    public function adocappointview23()
    {

        if(Auth::id())

        {

            if(Auth::user()->usertype==2)

            {

        $data=appointment::where('doctor_id','24')->get();

        return view('admin.adocappointview23',compact('data'));

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

    public function adocappointview24()
    {

        if(Auth::id())

        {

            if(Auth::user()->usertype==2)

            {

        $data=appointment::where('doctor_id','25')->get();

        return view('admin.adocappointview24',compact('data'));

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

    public function adocappointview25()
    {

        if(Auth::id())

        {

            if(Auth::user()->usertype==2)

            {

        $data=appointment::where('doctor_id','26')->get();

        return view('admin.adocappointview25',compact('data'));

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

    public function adocappointview26()
    {

        if(Auth::id())

        {

            if(Auth::user()->usertype==2)

            {

        $data=appointment::where('doctor_id','27')->get();

        return view('admin.adocappointview26',compact('data'));

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

    public function adocappointview27()
    {

        if(Auth::id())

        {

            if(Auth::user()->usertype==2)

            {

        $data=appointment::where('doctor_id','28')->get();

        return view('admin.adocappointview27',compact('data'));

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

    public function adocappointview28()
    {

        if(Auth::id())

        {

            if(Auth::user()->usertype==2)

            {

        $data=appointment::where('doctor_id','29')->get();

        return view('admin.adocappointview28',compact('data'));

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

    public function adocappointview29()
    {

        if(Auth::id())

        {

            if(Auth::user()->usertype==2)

            {

        $data=appointment::where('doctor_id','30')->get();

        return view('admin.adocappointview29',compact('data'));

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

////////////////////////DOCTOR APPOINTMENT VIEW/////////////////////////
/////////////////////////FACILITY////////////////////////////

    public function add_facility_view()
{

        if(Auth::id())

        {

            if(Auth::user()->usertype==1)
            {


                return view ('admin.add_facility');
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


        return view ('admin.add_facility');
    }

    public function upload_facility(Request $request)
    {
        $facility=new facility;

        $image=$request->file;

    $imagename=time().'.'.$image->getClientoriginalExtension();

    $request->file->move('facilityimage',$imagename);

    $facility->image=$imagename;

    $facility->name=$request->name;

    $facility->save();

    return redirect()->back()->with('message','Facilities Added Successfully');

    }


    public function showfacility()
    {
        if(Auth::id())

        {

            if(Auth::user()->usertype==1)

            {

        $data = facility::all();

        return view('admin.showfacility',compact('data'));

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

    public function updatefacility($id)
    {
        if(Auth::id())

        {

            if(Auth::user()->usertype==1)

            {
        $data = facility::find($id);

        return view('admin.updatefacility',compact('data'));

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
public function editfacility(request $request, $id)
    {

        $facility = facility::find($id);


        $facility->name=$request->name;

        $image=$request->file;

        if($image)

        {    

        $imagename=time().'.'.$image->getClientoriginalExtension();

        $request->file->move('facilityimage',$imagename);

        $facility->image=$imagename;

        }

        $facility->save();

        return redirect()->back()->with('message', 'Facility Details Update Successfully');

    }
/////////////////////////FACILITY/////////////////////////////////////
////////////////////////TOTAL USER/////////////////////////////////////

    public function totaluser()
    {
        if(Auth::id())

        {

            if(Auth::user()->usertype==1)

            {

        $data = user::all()->where('usertype','0');

        return view('admin.totaluser',compact('data'));

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

    public function healthrecords()
    {
        if(Auth::id())

        {

            if(Auth::user()->usertype==1)

            {

        $data = user::where('usertype','0')->whereNot('email_verified_at')->get();



        return view('admin.healthrecords',compact('data'));

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



    public function updatetotaluser($id)
    {
        if(Auth::id())

        {

            if(Auth::user()->usertype==1)

            {
        $data = user::find($id);

        return view('admin.updatetotaluser',compact('data'));

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

    public function edittotaluser(request $request, $id)
    {
        $request->validate([

            'illness'=>'required',
            'date'=>'required',


        ]);


        $health =new health;

    

        $health->name=$request->name;

        $health->address=$request->address;

        $health->birthdate=$request->birthdate;

        $health->age=$request->age;

        $health->sex=$request->sex;

        $health->civil=$request->civil;

        $health->illness=$request->illness;

        $health->date=$request->date;

        $health->user_id=$request->id;

        
        

        $health->save();

        return redirect()->back()->with('message', 'Health Record Details Update Successfully');

    }

    public function deleteuser($id)
    {


        $data=user::find($id);

        $data->delete();

        return redirect()->back();
    }
////////////////////////TOTAL USER/////////////////////////////////////
////////////////////////SEARCH/////////////////////////////////////
    public function search(request $request)
    {
        $search = $request->search;

        $data = appointment::where('name','Like','%'.$search.'%')->orWhere('email','Like','%'.$search.'%')->orWhere('doctor','Like','%'.$search.'%')->get();

        return view('admin.showappointment',compact('data'));

    }

    public function search1(request $request)
    {
        $search1 = $request->search;

        $data = user::where('name','Like','%'.$search1.'%')->orWhere('email','Like','%'.$search1.'%')->orWhere('fullname','Like','%'.$search1.'%')->get();

        return view('admin.totaluser',compact('data'));

    }

    public function search2(request $request)
    {
        $search2 = $request->search;

        $data = doctor::where('name','Like','%'.$search2.'%')->get();

        return view('admin.showdoctor',compact('data'));

    }
////////////////////////SEARCH/////////////////////////////////////

////////////////////////PRINT/////////////////////////////////////

    public function print_pdf($id)
    {

        $user=user::find($id);

        $pdf=PDF::loadview('admin.pdf',compact('user'));

        return $pdf->stream();

        return $pdf->download('Patient Health Record.pdf');

    }



    public function export_appoint_pdf()
    {

        $appoint=appointment::get();
        $pdf=PDF::loadview('admin.pdf1',['appoint'=>$appoint]);
        return $pdf->stream();

        return $pdf->download('Patient Appointment Data.pdf');

    }

    public function export_appoint_pdf1()
    {

        $appoint=appointment::where('status','approved')->get();
        $pdf=PDF::loadview('admin.pdf2',['appoint'=>$appoint]);
        return $pdf->stream();

        return $pdf->download('Patient Appointment Data.pdf');

    }

    public function export_patient_pdf2()
    {

        $user=user::where('usertype','0')->whereNot('email_verified_at')->get();
        $pdf=PDF::loadview('admin.pdf3',['user'=>$user]);
        return $pdf->stream();

        return $pdf->download('User Record.pdf');

    }

    public function export_doctor_pdf3()
    {

        $doctor=doctor::whereNot('speciality')->get();;
        $pdf=PDF::loadview('admin.pdf4',['doctor'=>$doctor]);
        return $pdf->stream();

        return $pdf->download('Patient Doctor Data.pdf');

    }

    public function export_patient_pdf4()
    {

        $user=user::where('usertype','0')->whereNot('email_verified_at')->get();
        $pdf=PDF::loadview('admin.pdf5',['user'=>$user]);
        return $pdf->stream();

        return $pdf->download('Patient Health Record.pdf');

    }

    public function export_patient_pdf5()
    {

        $user=health::get();
        $pdf=PDF::loadview('admin.pdf6',['user'=>$user]);
        return $pdf->stream();

        return $pdf->download('Patient Medical History.pdf');

    }


////////////////////////PRINT/////////////////////////////////////



////////////////////////SERVICES/////////////////////////////////
        public function add_services_view()
{

        if(Auth::id())

        {

            if(Auth::user()->usertype==1)
            {


                return view ('admin.add_services');
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


        return view ('admin.add_services');
    }

    public function upload_services(Request $request)
    {
        $request->validate([

            'file'=>'required',
            'name'=>'required',
            'price'=>'required'


        ]);

        $services=new gcash;

        $image=$request->file;

    $imagename=time().'.'.$image->getClientoriginalExtension();

    $request->file->move('servicesimage',$imagename);

    $services->image=$imagename;

    $services->name=$request->name;

    $services->price=$request->price;

    $services->save();

    return redirect()->back()->with('message','Services Added Successfully');

    }


    public function showservices()
    {
        if(Auth::id())

        {

            if(Auth::user()->usertype==1)

            {

        $data = gcash::all();

        return view('admin.showservices',compact('data'));

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

    public function updateservices($id)
    {
        if(Auth::id())

        {

            if(Auth::user()->usertype==1)

            {
        $data = gcash::find($id);

        return view('admin.updateservices',compact('data'));

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
public function editservices(request $request, $id)
    {

        $services = gcash::find($id);


        $services->name=$request->name;

        $services->price=$request->price;

        $image=$request->file;

        if($image)

        {    

        $imagename=time().'.'.$image->getClientoriginalExtension();

        $request->file->move('servicesimage',$imagename);

        $services->image=$imagename;

        }

        $services->save();

        return redirect()->back()->with('message', 'Services Details Update Successfully');

    }

    ////////////////////////SERVICES/////////////////////////////////
    ////////////////////////ADD///////////////////////

    public function showall()
    {
        if(Auth::id())

        {

            if(Auth::user()->usertype==1)

            {

        

        return view('admin.showall');

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

    public function upload_specialty(Request $request)
    {
        $request->validate([

            'name'=>'required'


        ]);

        $specialty =new specialty;

    $specialty->name=$request->name;

    $specialty->save();

    return redirect()->back()->with('message','Specialty Added Successfully');

    }

    public function add_specialty_view()
{

        if(Auth::id())

        {

            if(Auth::user()->usertype==1)
            {


                return view ('admin.add_specialty');
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


        return view ('admin.add_specialty');
    }

    public function doctorshow()

    {
        if(Auth::id())

        {

            if(Auth::user()->usertype==2)
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

        
        return view('admin.doctor_show');

    }



    public function upload_doctoracc(Request $request)
    {
        $data = new user;

        $data->name=$request->name;

        $data->email=$request->email;

        $data->password=bcrypt($request->password);

        $data->usertype='2';

        $data->save();

        return redirect()->back();


    }

    public function add_doctor_acc_view()
{

        if(Auth::id())

        {

            if(Auth::user()->usertype==1)
            {


                return view ('admin.add_doctor_acc');
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


        return view ('admin.add_doctor_acc');
    }

    public function videoadmin()
    {

        if(Auth::id())
        {
            if(Auth::user()->usertype==1);

          {

        return view('admin.videoadmin');
            
          }  
 


    }
        else
        {

        return redirect()->back();
        }
    



    }

    public function createMeeting()
    {

        if(Auth::id())
        {
            if(Auth::user()->usertype==1);

          {

        return view('admin.createMeeting');
            
          }  
 


    }
        else
        {

        return redirect()->back();
        }
    



    }


    public function medicalhistory()
    {

        if(Auth::id())

        {


            if(Auth::user()->usertype==1)

            {

        $data=health::all();

        return view('admin.medicalhistory',compact('data'));

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



}
