<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\UserController;
use App\User;
use Illuminate\Support\Facades\Request;

Route::get('/', 'UserController@show');


Route::get("/userController",[UserController::class,'allUser']);

Route::get("/userModel",'FormController@show');

//Route::post("/postUser", [UserController::class,'postUser']);

Route::post("/postUser", function() {
    dd(Request::all());
})->name('postUser');


