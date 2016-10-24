<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\MypwdRequest;
use App\Mypwd;
use App\Http\Controllers\Controller;
use App\User;
use App\Repositories\MypwdRepository;
class MypwdController extends Controller
{
    //
    //The mypwd repository instance
    //@var MypwdRepository
    protected $mypwds;
   /*
    * Create a new controller instance.
    * @param MypwdRepository $mypwds
    * return void
    */
        public function __construct(MypwdRepository $mypwds){
            $this->middleware('auth');
            $this->mypwds=$mypwds;
        
        } 
    //display all
    public function display(Request $request){
        $mypwds=$this->mypwds->forUser($request->user());
        return view('/mypwds/index',['mypwds'=>$mypwds]);
    }
    //add a new pwd
    public function addpwd(MypwdRequest $request){

        //验证表单
       $validator=$request->all();
        //添加密码
        $mypwd=new Mypwd;
        $mypwd->name=$request->name;    
        $mypwd->username=$request->username;    
        $mypwd->password=$request->password;    
        $mypwd->remark=$request->remark;
        $mypwd->user_id=$request->user()->id;
        $mypwd->save();   
       return redirect('/mypwds'); 
    
    }
    //删除密码
    public function delete($id){
   // $this->autorize();
     Mypwd::findOrFail($id)->delete();
    return redirect('/mypwds');
    }
}
