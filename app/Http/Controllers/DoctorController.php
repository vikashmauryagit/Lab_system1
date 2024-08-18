<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DoctorController extends Controller
{
    public function doctable()
    {
         $doctor=Doctor::all();
        return view('reference.reference_doctor',compact('doctor'));
    }
    public function adddoctor(Request $request)
    {
        $data=$request->validate([
            'dname'=>'required',
            'email'=>'required',
            'specilist'=>'required',
            'mobile'=>'required',
            'address'=>'required',
        ]);

        $doctor=new Doctor();
        $doctor->dname=$request->dname;
        $doctor->email=$request->email;
        $doctor->specilist=$request->specilist;
        $doctor->mobile=$request->mobile;
        $doctor->address=$request->address;
        $doctor->save();

        return redirect()->route('doctor')->with('status',"Data store Successfull...");
    }
}
