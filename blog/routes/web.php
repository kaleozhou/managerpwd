<?php
use App\Mypwd;
use App\Http\Controllers\MypwdController;
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
Route::get('/mypwds','MypwdController@display');
/*
 *Add a New mypwd
 *
 *
 */
Route::post('/mypwd','MypwdController@addpwd');
/*
 *
 *Delete An Existing Mypwd
 */
Route::delete('/mypwd/{id}',function($id){
    //
    Mypwd::findOrFail($id)->delete();
    return redirect('/mypwds');
});
