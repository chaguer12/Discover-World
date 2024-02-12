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

          

            return view('index',[
                'destinations' => $destinations,
                'totalArticles' => $totalArticles,
                'recits' => $recits,
                'totaldestinations' => $totaldestinations
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
        
        return redirect()->action([Recit::class, 'index']);
   }
   public function filter_recits($dest_id){
        $recits = Recits::where('dest_id', $dest_id)->with('Photos','Destination')->get();
        return view('index')->with('recits', $recits);
   }

   public function recit_stat(){
        $totalrecits = Recits::count();
        return view('index',[
            'totalrecits' => $totalrecits,
        ]);


   }
   public function get_recit($id){
        $recits = Recits::with('photos')->findOrFail($id)->get();
        return view('recits',[
            'recits' => $recits
        ]);
        
   }
   public function new_recits(){
        $destinations = Destinations::all();
        $totaldestinations = Destinations::count();
        $totalArticles = Recits::count();
        $recits = Recits::with('Photos','Destination')->orderBy("created_at", "desc")->get();
         return view('index',[
                'destinations' => $destinations,
                'totalArticles' => $totalArticles,
                'recits' => $recits,
                'totaldestinations' => $totaldestinations
            ]);


   }

   public function old_recits(){
        $destinations = Destinations::all();
        $totaldestinations = Destinations::count();
        $totalArticles = Recits::count();
        $recits = Recits::with('Photos','Destination')->orderBy("created_at", "asc")->get();
         return view('index',[
                'destinations' => $destinations,
                'totalArticles' => $totalArticles,
                'recits' => $recits,
                'totaldestinations' => $totaldestinations
            ]);

   }
}
