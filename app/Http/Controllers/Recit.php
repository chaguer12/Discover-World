<?php

namespace App\Http\Controllers;

use App\Models\Destinations;
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

    public function index(){
        
            $destinations = Destinations::all();
            $totaldestinations = Destinations::count();
            $recits = Recits::with('Photos','Destination')->get();
            $totalArticles = Recits::count();

        //    dd($recits);

            return view('index',[
                'destinations' => $destinations,
                'totalArticles' => $totalArticles,
                'recits' => $recits,
                'totaldetinations' => $totaldestinations
            ]);
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

   public function recit_stat(){
        $totalrecits = Recits::count();
        return view('index',[

        ]);


   }
   public function get_recit($id){
        $recit = Recits::with('photos')->findOrFail($id);
       
        return view('recits',['recit'=>$recit]);
        
   }
}
