<?php
use App\Mypwd;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::auth();
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
	return view('home');
});
Route::get('/mypwd', function () {
	return view('mypwd');
});
/*
 *
 *Display All Mypwd
 * 
 */
Route::get('/mypwds',function(){
	//
	//$mypwds=Mypwd::orderBy('create_at','asc')->get();
	$mypwds=Mypwd::orderBy('id','asc')->get();
	return view('mypwds',[
	'mypwds'=>$mypwds
	
	]);
});
/*
 *Add a New mypwd
 *
 *
 */
Route::post('/mypwd',function(Request $request){
	//验证表单
//	$validator=Validator::make($request-all(),[
//		'name'=>'required|max:255',
//	]);
//	if($validator->fails()){
//		return redirect('/mypwd')
//			->withInput()
//			->withErrors($validator);
//	}
	//添加密码
	$mypwd = new Mypwd;
	$mypwd->name = $request->name;
	$mypwd->password=$request->password;
	$mypwd->username= $request->username;
	$mypwd->remark = $request->remark;
	$mypwd->save();

	return redirect('/mypwds');



});
/*
 *
 *Delete An Existing Mypwd
 */
Route::delete('/mypwd/{id}',function($id){
//
});
