<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointment;
use App\Models\User;

class BodyController extends Controller
{
    
    public function body()
    {

         
        $appointment=Appointment::all()->count();
        $doctor=Doctor::all()->count();


        return view('admin.body', compact('appointment','doctor',));


    }





}
