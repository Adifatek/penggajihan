<?php

use App\http\Controllers\RuangController;
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
    return view('welcome',["title"=>"Dashboard"]);
});

Route::get('/sample', function () {
    return view('sample');
});

Route::group(['middleware'=>'guest'],function(){
    Route::resource('ruang',RuangController::class);
});

