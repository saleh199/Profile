<?php

namespace Profile\Http\Controllers;

use Illuminate\Http\Request;

use Profile\Http\Requests;
use Profile\Http\Controllers\Controller;
use Profile\Post;

class PostController extends Controller
{
    public function postCreate(Request $request){
        $post = new Post;

        $this->validate($request, [
            'content' => 'required',
            'user_id' => 'required'
        ]);

        $post->content = $request->content;
        $post->user_id = $request->user_id;

        $post->save();

        return response()->json(['result' => 'ok']);
    }
}
