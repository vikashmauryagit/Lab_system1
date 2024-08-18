<?php

namespace App\Http\Controllers;

use App\Models\Center;
use Illuminate\Http\Request;

class CenterController extends Controller
{
    public function center()
    {
        $center=Center::all();
        return view('reference.center_reference',compact('center'));
    }
    public function addcenter(Request $request)
    {
        $data = $request->validate([
            'center_name' => 'required',
            'short_name' => 'required',
            'mobile' => 'required',
            'optional' => 'required',
            'address' => 'required'
        ]);
        $center = new Center();
        $center->center_name = $request->center_name;
        $center->short_name = $request->short_name;
        $center->mobile = $request->mobile;
        $center->address = $request->address;
        $center->save();

        return redirect()->route('center')->with('status', "Data Store successfully...");
    }
}
