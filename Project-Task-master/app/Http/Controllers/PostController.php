<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{


    public function index()
    {
        $posts = Post::paginate(10);
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        Post::create([
            'title' => $request->title,
            'body' => $request->body,
        ]);

        return redirect()->route('posts.index')->with('success', 'تم إنشاء المنشور بنجاح.');
    }

    public function show(Post $post)
    {

        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {

        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {


        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        $post->update($request->only(['title', 'body']));

        return redirect()->route('posts.index')->with('success', 'تم تحديث المنشور بنجاح.');
    }

    public function destroy(Post $post)
    {
    
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'تم حذف المنشور بنجاح.');
    }
}
