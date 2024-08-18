<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data1 = Patient::count();
        $data = $data1 + 1;
        return view('Patient.patientRegister', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'patient_id' => 'required',
            'pen_card' => 'required',
            'title' => 'required',
            'fname' => 'required',
            'mname' => 'required',
            'lname' => 'required',
            'dob' => 'required',
            'age' => 'required',
            'sex' => 'required',
            'mobile' => 'required',
            'blood_group' => 'required',
            'email' => 'required',
            'area' => 'required',
            'address' => 'required',
        ]);

        $patient = new Patient();
        $patient->patient_id = $request->patient_id;
        $patient->pen_card = $request->pen_card;
        $patient->title = $request->title;
        $patient->fname = $request->fname;
        $patient->mname = $request->mname;
        $patient->lname = $request->lname;
        $patient->dob = $request->dob;
        $patient->age = $request->age;
        $patient->sex = $request->sex;
        $patient->mobile = $request->mobile;
        $patient->blood_group = $request->blood_group;
        $patient->email = $request->email;
        $patient->area = $request->area;
        $patient->address = $request->address;
        $patient->save();
        return redirect()->route('patienttest', [$patient->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function PatientTest($id)
    {
        $user = DB::table('patients')->find($id);
        return view('Patient.AddTest',compact('user'));
    }
}
