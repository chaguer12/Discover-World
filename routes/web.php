<?php

use App\Http\Controllers\Recit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index',function(){
    return view('index');
});

Route::get('/destination',function(){
    $destinations = DB::table('destinations')->get();
    return view('destination',[
        'destinations' => $destinations
    ]);
});

Route::get('/insert', [Recit::class,'insert'])->name('recit.insert');



