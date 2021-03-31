<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\employees;

class employeesControlle extends Controller
{
    public function index()
    {
        return view('image_code.employees');
    }





    public function store(Request $request)
    {
        $employees = new employees();

        $employees->name = $request->input('name');
        $employees->email = $request->input('email');
        $employees->post = $request->input('post');
        // $employees->image = $request->input('image');

        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); //getting image extension
            $filename = time(). '.' . $extension;
            $file->move('uploads/employees/', $filename);
            $employees->image = $filename;
        }else{
            return $request;
            $employees->image = '';
        }
        $employees->save();

        return view('image_code.employees')->with('employees',$employees);
    }
    public function display()
    {
        $employees  = employees::all();
        return view('image_code.show_employee')->with('employees',$employees);
    }

    public function edit($id)
    {
        $employees  = employees::find($id);
        return view('image_code.edit_employee')->with('employees',$employees);
    }

    public function update(Request $request, $id)
    {
        $employees = employees::find($id);

        $employees->name = $request->input('name');
        $employees->email = $request->input('email');
        $employees->post = $request->input('post');
        // $employees->image = $request->input('image');

        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); //getting image extension
            $filename = time(). '.' . $extension;
            $file->move('uploads/employees/', $filename);
            $employees->image = $filename;
        }
            $employees->save();

        return view('image_code.edit_employee')->with('employees',$employees);
    }

    public function delete($id)
    {
        $employees  = employees::find($id);
        $employees->delete();
        return redirect('/show_employee')->with('employees',$employees);



    }

}


