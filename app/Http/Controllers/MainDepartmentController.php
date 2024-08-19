<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainDepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dept =Department::all();
        return view('Department.viewDepartment', compact('dept'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Department.adddepartment');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'add_dept' => 'required',
        ]);

        $dept = new Department();
        $dept->dept_name = $request->add_dept;
        $dept->save();

        return redirect()->route('department.index')->with('status', "Department data store Successfull...");
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
