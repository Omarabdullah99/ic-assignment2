<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function index()
    {
        return view('categories.index',[
             'categories' => Category::latest()->paginate(10),
        ]);
    }

    function create()
    {
        return view('categories.create');
    }

    function store(StoreCategoryRequest $request)
    {
        $validated = $request->validated();
        $validated['slug'] = str($validated['name'])->slug();
        $category= Category::create($validated);

        if($category){
            return redirect()->route('categories.index')->with('success', 'Category created successfully');
        }
    }
}
