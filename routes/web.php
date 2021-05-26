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
//mengirim data ke view
route::get("/hallo", function(){
    $data = ['nama'=>'Fhil','npm' =>'1923240021'];
    return view("hallo", $data);
});
//menerima data/ parameter dan menampilkan ke view
route::get("/kenal/{nama}", function($nama){
    $data = ['nama'=>$nama,'npm' =>'1923240021'];
    return view("hallo", $data);
});