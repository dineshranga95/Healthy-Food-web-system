<?php

namespace App\Http\Controllers;
use App\index;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(Request $request){
        $detail=new index;
        $this->validate($request,['name'=>'required',
        'pwd'=>'required',
        ]);
        $detail->name=$request->name;
        $detail->password=$request->pwd;
        $detail->save();
        $data=index::all();
        return redirect('task')->with('indices',$data);

       
    }
}
