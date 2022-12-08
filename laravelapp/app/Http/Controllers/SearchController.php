<?php

namespace App\Http\Controllers;
use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class SearchController extends BaseController
{
    public function find()
    {
        return view('search');
    }

    public function search(Request $request){
        // get the search value from the request
        $search = $request->input('search');
    
        // search in the title and body columns from the posts table
        $albums = Album::query()
            ->where('title', 'LIKE', "%{$search}%")
            ->orWhere('body', 'LIKE', "%{$search}%")
            ->get();
    
        // return the search view with the resluts compacted
        return view('search', compact('albums'));
    }
}
