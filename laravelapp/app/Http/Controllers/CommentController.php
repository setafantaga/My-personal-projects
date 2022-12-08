<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use App\Models\User;
use App\Models\Comment;
//use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Session;

// use function PHPSTORM_META\registerArgumentsSet;

class CommentController extends Controller
{

    public function store(Request $request)
    {
        // $request->validate([
        //     'body'=>'required',
        // ]);

        // $input = $request->all();
        // $input['user_id'] = auth()->user()->id;

        // Comment::create($input);
        
        // return back();
    
    
        $comment = new Comment;
        $comment->body = $request->get('comment_body');
        $comment->author()->associate($request->user());
        $album = Album::find($request->get('album_id'));
        $album->comments()->save($comment);

        return back();
    
    }
}
