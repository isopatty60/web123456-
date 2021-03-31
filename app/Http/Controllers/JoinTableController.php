<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JoinTableController extends Controller
{
    function index()
    {
     $data = DB::table('join-table')
       ->join('contacts', 'contacts.id ')
       ->join('contact_datas', 'contact_datas.id')
       ->select('contacts.name', 'contact_datas.name')
       ->get();
     return view('join_table', compact('data'));
    }
}
?>
