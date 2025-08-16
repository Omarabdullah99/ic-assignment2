<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function index()
    {
        return view('posts.index',[
             'posts' => Post::with('category')->latest()->paginate(10),
        ]);
    }

    function create()
    {
        return view('posts.create', [
            'categories' => Category::latest()->get()
        ]);
    }

    function store(StorePostRequest $request)
    {
        $validated = $request->validated();
        $validated['slug'] = str($validated['title'])->slug();
        $post = Post::create($validated);

        if ($post) {
            return redirect()->route('posts.index')->with('success', 'Post created successfully');
        }
    }
}
