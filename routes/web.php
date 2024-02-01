<?php


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

// Route::get('/blog',function (Request $request){
//     return [
//         'link' => \route('blog.show',['slug' => 'article', 'id' => '13'])
//     ];
// })->name('blog.index');

// Route::get('/blog/{slug}-{id}',function(string $slug,string $id,Request $request){
//     return [
//         'slug' => $slug,
//         'id' => $id,
//         'name' => $request->input('name'),
//     ];
// })->where([
//     'id' => '[0-9]+',
//     'slug' => '[a-z0-9\-]+' 
// ])->name("blog.show");
