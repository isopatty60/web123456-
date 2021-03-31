<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\invoie_datas;
use App\invoies;

class invoie_datacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $data=invoie_datas::all();
        // dd($data);
        return view('invoie_data.index',compact(['data']));

        // $data1=invoies::all();
        // return view('invoie.index',compact(['data1']));
        // dd($data);
    }











    /**
     * Show the form for creating a new resource.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('invoie_data.create');

        // $data=invoie_datas::where('contact_id',$id)->get();
        // // dd($data);
        // return view ('invoie_data.create',compact(['data']));

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
            'price' => 'required'
            // 'phone' => 'required'
        ]);
        // Contact_data::create($request->all());
        invoie_datas::create($request->all());
        //dd($request);

        return redirect('/invoie_data/'.$request->contact_id);

            // $create = invoie_datas::find($id);

            // return  redirect('/invoie_data/'.$create->contact_id);
        }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return   \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd($id);
        $data=invoie_datas::where('contact_id',$id)->get();
        // dd($data);
        return view('invoie_data.index',compact(['data',"id"]));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=invoie_datas::find($id);
        return view('invoie_data.edit',compact(['data']));

        // $data=Contact_data::where('contact_id',$id)->get();
        // return view('contact_data.index',compact(['data']));


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
            'price' => 'required'
            // 'phone' => 'required'
        ]);
        invoie_datas::find($id)->update($request->all());
        $inv = invoie_datas::find($id);
        // dd($inv);
        // return view('invoie_data.index',compact(['data']));
            // return redirect('/invoie_data');
            return  redirect('/invoie_data/'.$inv->contact_id);

            // .


        //     $data=Contact_data::where('contact_id',$id)->get();
        // // dd($data);
        // return view('contact_data.index',compact(['data']));


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        invoie_datas::find($id)->delete();
        return redirect('/invoie_data');
    }
    public function createForUser($id)
    {
        # code...
        return view('invoie_data.edit_for_user',compact('id'));
    }
}
