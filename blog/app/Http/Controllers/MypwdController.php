<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Mypwd;

class MypwdController extends Controller
{
    //
    //display all
    
    public function display(){
        $mypwds=Mypwd::all();
        return view('/mypwds',['mypwds'=>$mypwds]);
    }
    //add a new pwd
    public function addpwd(Request $request){

        $mypwd=new Mypwd;
        $mypwd->name=$request->name;    
        $mypwd->username=$request->username;    
        $mypwd->password=$request->password;    
        $mypwd->remark=$request->remark;
        $mypwd->save();   
       return redirect('/mypwds'); 
    
    }
}
