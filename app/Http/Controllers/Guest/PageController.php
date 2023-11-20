<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use App\Models\Cover;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $movies = Movie::all();
        $covers = Cover::all();
        return view('home', compact('movies','covers'));
    }
    public function movie($id){
        $movie = Movie::find($id);
        $cover = Cover::where('movie_id', $id)->first();

        return view('movie', compact('movie','cover'));
    }

}
