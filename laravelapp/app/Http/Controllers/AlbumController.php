<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\User;
use GuzzleHttp\Psr7\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AlbumController extends Controller
{
    public function __construct(){}

    public function index(){
        // return view('album.index', [
        //     'albums' => Album::latest()->filter(
        //         request(['search', 'author'])
        //     )->paginate(18)->withQueryString()
        // ]);

        $albums = Album::all();

        return view('admin.adminAlbumSection')->with('albums', $albums);
    }

    public function show($id)
    {
        $album = Album::find($id);
        return view('admin/albums/show')->with('albums', $album);
    }

    public function saveAlbum(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'title' => 'required',
            'slug' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);

        $album = Album::create([
            'user_id' => $request->user()->id,
            'title' => $request->input('title'),
            'slug' => $request->input('slug'),
            'excerpt' => $request->input('excerpt'),
            'body' => $request->input('body'),
        ]);

        return back()->with('album_add', "Album addedd succesfully");
    }
    public function albumList()
    {
        $albums = DB::table('albums')->get();
        return view('albums', compact('albums'));
    }

    public function showAlbum($id)
    {
        $album = Album::where('id', $id)->firstOrFail();

        return view('album_view', compact('album'));
    }
    
    // public function create()
    // {
    //     return view('admin/albums/create');
    // }

    // public function edit($id)
    // {
    //     $album = Album::where('id', $id)->firstOrFail();

    //     return view('admin/albums/edit')->with('albums', $album);
    // }

    // public function store()
    // {
    //     $attributes = request()->validate([
    //         'title' => 'required',
    //         'slug' => ['required', Rule::unique('albums', 'slug')],
    //         'excerpt' => 'required',
    //         'body' => 'required'
    //     ]);

    //     $attributes['user_id'] = auth()->id();
    //     Album::create($attributes);

    //     return redirect('albums')->with('flash_message', 'Album addedd') ;
    // }

    // public function addAlbum()
    // {
    //     return view('add-album');
    // }

//     public function update(Request $request, $id)
//     {
//         $this->validate($request, [
//             'title' => 'required|max:255',
//             'body' => 'required',
//         ]);

//         $album = Album::where('id', $id)->firstOrFail();

//         $album->title = $request->input('title');
//         $album->body = $request->input('body');
//         $album->save();

//         return redirect('albums')->with('flash_message', 'Album updated');
//     }   

//     public function destroy($id)
//     {
//         $album = Album::where('id', $id)->firstOrFail();

//         $album->delete();

//         return redirect('admin.adminAlbumSection')->with('flash_message', 'Album deleted successfully');
//    }
}
