<?php

namespace App\Http\Controllers;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function home(){
        $data = Movie::paginate(2);
        return view('home', compact('data'));
    }

    public function detail($id){
        $data = Movie::find($id);
        $list = $data->episodes;

        return view('detail', compact('data','list')); 
    }
}
