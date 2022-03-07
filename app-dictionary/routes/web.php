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

Route::get('/dictionary',function(){
    return view('dictionary') ;
});

Route::post('/dictionary',function(Illuminate\Http\Request $request){

    if(!empty($request->newWord)) {
        $vocablary = $request->newWord;
        $arrays = ["home"=>"nhà","family"=>"gia đình","School"=>"trường học","Love"=>"tình yêu"];
        foreach ($arrays as $key => $array) {
            if ($key == $vocablary ) {
                $abv = $array;
                return view('dictionary',compact('abv'));
            }else{
                $none = "Không có từ cần tìm";
                return view('dictionary',compact('none'));
            }
        }
    }else {
        $nono = "Nhập từ khóa";
        return view('dictionary',compact('nono'));
    }
});



Route::get('/search/{search}', function ($search) {

    echo "hello";

})->where('search', '.*');
