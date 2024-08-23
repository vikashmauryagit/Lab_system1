<?php

namespace App\Http\Controllers;

use App\Models\Center;
use App\Models\SubDepartment;
use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $test = Test::all();
        return view('Test.viewTest', compact('test'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $center = Center::all();
        $sub = SubDepartment::all();
        return view('Test.addTest', compact('center', 'sub'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'tname' => 'required',
            'shortName' => 'required',
            'technicalName' => 'required',
            'testprice' => 'required',
        ]);

        $test = new Test();
        $test->test_name = $request->tname;
        $test->short_name = $request->shortName;
        $test->tech_name = $request->technicalName;
        $test->test_price = $request->testprice;
        $test->center_id = $request->center_id;
        $test->sub_id = $request->sub_dept_id;
        $test->save();

        return redirect()->route('test.index')->with('status', "Test Data Added Successfully...");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $test1 = DB::table('tests')->find($id);
        $data=Test::with('subDep')->with('center1')->find($id);
        return view('Test.displayTest',compact('data'));
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
        $data=Test::find($id);
        $data->delete();

        return redirect()->route('test.index')->with("status1","Data Delete Successfull..");
    }
}
