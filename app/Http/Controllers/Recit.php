<?php

namespace App\Http\Controllers;

use App\Models\Recits;
use App\Services\ImageService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Recit extends Controller
{
    private $imageService;

    public function __construct (ImageService $imageService){

        $this->imageService = $imageService;

    }
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
        $recits = Recits::create($incomingFields);
        $this->imageService->store($request->file('images'),$recits);
        
        return view('index');
   }
}
