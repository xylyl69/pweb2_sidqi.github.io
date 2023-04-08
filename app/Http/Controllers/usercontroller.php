<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswa;
use Illuminate\Support\Facades\Hash;
class usercontroller extends Controller
{
    public function index()
    {
        $nama=siswa::all();
        return view('list',['siswa'=>$nama]);
    }

    public function create()
    {
        $class=siswa::select('id','name','password','email')->get();
        return view('add');
    }
    
    public function store(Request $request )
    {
        // $student=new siswa;
        // $student->name=$request->name;
        // $student->save();
        $student=siswa::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ]);
        return redirect('list');
    }

    public function edit($id)
    {
       $students=siswa::find($id);
       return view('edit',compact('students'));
    }

    
    public function update(Request $request,$id)
    {
       $students=siswa::find($id);
       $students->name=$request->input('name');
       $students->email=$request->input('email');
       $students->password=Hash::make($request->input('password'));
       $students->update();
       return redirect('/list')->with('staus',"data updated");
    }

   function list()
   {
    $data=siswa::all();
    return view('list',['siswa'=>$data]);
   }

   function delete($id)
   {
    $data=siswa::find($id);
    $data->delete();
    return redirect('list');
   }

}
