<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\invoies;
use PDF;

class PDFController extends Controller
{
    public function pdf()
    {
        $invoies = invoies::all();
        $pdf = PDF::loadView('pdf', ['invoies' => $invoies]);
        return @$pdf->stream();
    }
}
