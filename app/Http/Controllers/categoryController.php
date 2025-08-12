<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function index ()
    {
        return view('category.category');
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

        category::create([
            'name' => $request->name,
            'description' => $request->description
        ]);

        return redirect('/index')->with('success', 'kategori berhasil ditambahkan');
    }

    public function show ()
    {

    }
}
