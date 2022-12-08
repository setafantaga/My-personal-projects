<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Album;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use GuzzleHttp\Psr7\Request as Psr7Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use IntlChar;use Symfony\Component\Console\Input\Input;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/adminAlbumSection', [
            'albums' => Album::paginate(7)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.albums.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        // $album = new Album;
        // $album->user_id = request(auth()->id());
        // $album->title = $request->input('title');
        // $album->slug = $request->input('slug');
        // $album->excerpt = $request->input('excerpt');
        // $album->body = $request->input('body');
        // $album->save();
        
        $album = Album::create([
            'user_id' => '34',
            'title' => $request->input('title'),
            'slug' =>$request->input('slug'),
            'excerpt' =>$request->input('excerpt'),
            'body' =>$request->input('body')
        ]);
        $album->save();

        return redirect('admin/adminAlbumSection')->with('succcess', 'Album created successfully!'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $album = Album::find($id);
        return view('admin.albums.show')->with('albums', $album);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Album $album, $id)
    {
        $album = Album::find($id);
        return view('admin.albums.edit', compact('album'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $album = Album::where('id', $id)->update([
            'user_id' => '34',
            'title' => $request->input('title'),
            'slug' =>$request->input('slug'),
            'excerpt' =>$request->input('excerpt'),
            'body' =>$request->input('body')
        ]);
        //$album->save();

        return redirect('admin/adminAlbumSection')->with('success', 'album Updated!');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Album $album, $id)
    {
        $album=Album::find($id);
        $album->delete();
        return redirect()->back()->with('flash_message', 'Album deleted!');
    }
}