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


Route::get('/index',[Recit::class,'index'])->name('index');
Route::get('/index/oldest',[Recit::class,'old_recits'])->name('old');
Route::get('/index/newest',[Recit::class,'new_recits'])->name('new');

Route::get('/destination',function(){
    $destinations = DB::table('destinations')->get();
    return view('destination',[
        'destinations' => $destinations
    ]);
});

Route::get('/recits/{dest_id}', [Recit::class, 'filter_recits'])->name('recits');
Route::get('/recits/{id}',[Recit::class,'get_recit'])->name('show');
Route::get('/insert', [Recit::class,'insert'])->name('recit.insert');
Route::post('/insert', [Recit::class,'inserting'])->name('recit.inserting');



