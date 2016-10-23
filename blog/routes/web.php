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
//mypwd route
Route::get('/mypwd', function () {
	return view('/mypwds/add');
});
// Display All Mypwd
Route::get('/mypwds','MypwdController@display');
//Add a New mypwd
Route::post('/mypwd','MypwdController@addpwd');
//Delete An Existing Mypwd
Route::delete('/mypwds/{id}','MypwdController@delete');
//card route
Route::get('/card', function () {
	return view('/cards/add');
});
// Display All card
Route::get('/cards','CardController@display');
//Add a New card
Route::post('/card','CardController@addcard');
//Modify a  card
Route::post('/card_modify','CardController@modifycard');
Route::get('/card_modify/{id}', 'CardController@modifycardget');
//Delete An Existing card
Route::delete('/cards/{id}','CardController@delete');
