<?php

use Illuminate\Support\Facades\Route;

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
//thuc hanh greeting
Route::get('/greeting', function () {
    echo 'hello world!';
 });



Route::get('/greeting/{name?}', function ($name) {
    if($name){
        echo "hello $name";
    }else{
        echo 'hello world!';
    }
 });



//Thuc hanh tao login hien thi loi chao

Route::get('/login', function () {
    return view("login");
});

Route::post('/login', function (\Illuminate\Http\Request $request){
    if ($request->username == 'admin'&& $request->password == 'admin'){
        return view('welcome_admin ');
    }else{
        return view('login_error');
    }
});



