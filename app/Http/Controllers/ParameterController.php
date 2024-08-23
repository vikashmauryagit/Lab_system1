<?php

namespace App\Http\Controllers;

use App\Models\Parameter;
use App\Models\Test;
use Illuminate\Http\Request;

class ParameterController extends Controller
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
        $para = Parameter::with('test')->get();
        return view('Parameter.Add_Parameter', compact('para'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'paraName' => 'required',
            'paraunit' => 'required',
            'decimal' => 'required',
            'helpvalue' => 'required',
            'normalrange' => 'required',
            'min' => 'required',
            'max' => 'required',
        ]);

        $param = new Parameter();
        $param->test_id = $request->test_id;
        $param->paraName = $request->paraName;
        $param->unit = $request->paraunit;
        $param->decimal = $request->decimal;
        $param->helpvalue = $request->helpvalue;
        $param->normalrange = $request->normalrange;
        $param->min = $request->min;
        $param->max = $request->max;
        $param->footer = $request->footer;
        $param->save();
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
