<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use App\Models\formBasic;

class kuesioner extends Controller
{
    //view page
    public function index()
    {
        return view('form');
    }
    // save record
    public function saveRecord(Request $request)
    { 
        foreach ($request->checkbox as $key=>$name) {
            
            $insert = [

                'interface' =>$request->checkbox[$key],
                'daya' =>$request->radio[$key],
                'mudah' =>$request->mudah[$key],
                'lengkap' =>$request->lengkap[$key],
                'jelas' =>$request->info[$key],
                'friend' =>$request->friend[$key],
                'nilai' =>$request->nilai[$key],
            ];

            DB::table('kuesioners')->insert($insert);
        }
        return redirect()->back();
    }
}