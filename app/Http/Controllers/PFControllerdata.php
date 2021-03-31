<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\invoie_datas;
use PDF;

class PFControllerdata extends Controller
{

    public function data($id)
    {
        // $invoie_datas = invoie_datas::all();
        $invoie_datas = invoie_datas::where('contact_id',$id)->get();
        // dd($invoie_datas);
        $pdf = PDF::loadView('data', ['invoie_datas' => $invoie_datas]);
        return @$pdf->stream('invoie_datas');
        // dd($invoie_datas);
        // $data=invoie_datas::where('contact_id',$id)->get();
        // // dd($data);
        // return view('invoie_data.index',compact(['data']));
    }
}
