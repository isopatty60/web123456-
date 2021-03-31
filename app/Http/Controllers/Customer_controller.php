<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\customers;

class Customer_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=customers::all();
        return view('Customer.index',compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd(\Illuminate\Support\Facades\Hash::make('123456'));
        $request ->validate([
            'name' => 'required',
            'last_name' => 'required',
            'list' => 'required'
        ]);
        customers::create($request->all());

            return redirect('/customer');

        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=customers::find($id);
        return view('customer.edit',compact(['data']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request ->validate([
            'name' => 'required',
            'last_name' => 'required',
            'list' => 'required'
        ]);
        customers::find($id)->update($request->all());

            return redirect('/customer');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        customers::find($id)->delete();
        return redirect('/customer');
    }
}
