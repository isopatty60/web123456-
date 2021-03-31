<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\customers;
use PDF;

class PDFCustomer extends Controller
{
    public function PDFCustomer()
    {

        $customers = customers::all();
        $pdf = PDF::loadView('PDFCustomer', ['customers' => $customers]);
        return @$pdf->stream();

        // $data=invoie_datas::where('contact_id',$id)->get();
        // // dd($data);
        // return view('invoie_data.index',compact(['data']));


    }
}
