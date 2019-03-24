<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Film;

class SearchController extends Controller
{
    //
	public function index()
    {	
	    $films = Film::get();
		return view('index', compact('films'));
    }
	
    public function search(Request $request)
    {
    	if($request->has('search')){
    		$films = Film::search($request->get('search'))->get();
    	}else{
    		$films = Film::get();
    	}
        return view('films/search', compact('films'));
    }
}
