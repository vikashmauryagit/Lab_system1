<?php

namespace App\Http\Controllers;

use App\Models\SubDepartment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubDepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('subdept.view_sub_dept');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dept=DB::table('departments')->get();
        return view('subdept.add_sub_deptment',compact('dept'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->validate([
            'sub_deptname'=>'required',
            'dept_id'=>'required'
        ]);
        $subdept=new SubDepartment();
        $subdept->dept_id=$request->dept_id;
        $subdept->sub_deptname=$request->sub_deptname;
        $subdept->save();

        return redirect()->route('subdept.index')->with('status',"SubDepartments Data Store Successfull..");

       


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
}
