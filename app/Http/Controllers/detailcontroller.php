<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kuesioner;

class detailcontroller extends Controller
{
    public function index()
    {
        $nama=kuesioner::all();
        return view('detail',['siswa'=>$nama]);
    }

    public function create()
    {
        $class=kuesioner::select('interface','daya','mudah','lengkap','jelas',)->get();
        return view('detail');
    }
    
    

    function list()
    {
     $data=kuesioner::all();
     return view('detail',['siswa'=>$data]);
    }
}
