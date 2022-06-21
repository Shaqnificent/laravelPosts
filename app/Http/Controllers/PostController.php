<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with((['user','likes']))->paginate(20);
        return view('posts.index',
        [
            'posts' =>$posts
        ]);
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'body' => 'required'
        ]);

        // Post::create([
        //     'user_id' => auth()->id,
        //     'body' => $request->body
        // ]);

        $request->user()->posts()->create($request->only('body'));
        //     'body' => $request->body
        // ]);

        return back();
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return back();
    }
}
