<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function index ()
    {
        $categories = category::paginate(5);

        return view('category.category', compact('categories'));
    }

    public function create ()
    {
        return view('category.add-category');
    }

    public function store (Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:255'
        ]);

        category::create($request->all());

        return redirect()->route('categories.index')->with('success', 'kategori berhasil ditambahkan');
    }

    public function show ()
    {

    }
}
