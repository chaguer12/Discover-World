<?php

namespace App\Http\Controllers;

use App\Models\Recits;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Recit extends Controller
{
   public function insert(){
    $destinations = DB::table('destinations')->get();
    return view('insert',[
        'destinations' => $destinations
    ]);
   }

   public function inserting(Request $request){
        $incomingFields = $request->validate([
            "title" => ["required"],
            "content" => ["required"],
            "dest_id" => ["required"],
        ]);
        Recits::create($incomingFields);
   }
}
