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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/product',function() {
    return view('product');
});

Route::post('/discount',function(Illuminate\Http\Request $request) {
    if($request->price !== null && $request->discount !== null){
        $result =  ($request->price) * ($request->discount) * 0.1;
        $result2 = ($request->price)-($request->price * $request->discount * 0.1);
        return view('display-discount',compact(['result','result2']));
    }
});
