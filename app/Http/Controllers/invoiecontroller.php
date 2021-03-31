<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\invoies;

class invoiecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data1=invoies::all();
        return view('invoie.index',compact(['data1']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('invoie.create');
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
            'price' => 'required',
            'Note' => 'required'
        ]);
        invoies::create($request->all());

            return redirect('/invoie');

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
        $data1=invoies::find($id);
        return view('invoie.edit',compact(['data1']));
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
            'price' => 'required',
            'Note' => 'required'
        ]);
        invoies::find($id)->update($request->all());

            return redirect('/invoie');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        invoies::find($id)->delete();
        return redirect('/invoie');
    }
}
