<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class itemController extends Controller
{
    public function index ()
    {
        $items = item::with('category')->paginate(5);
        // $items = item::paginate(5);

        return view('item.item', compact('items'));
    }

    public function create ()
    {
        $categories = category::all();

        return view('item.create', compact('categories'));
    }

    public function store (Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'category_id' => 'required|exists:categories,id',
            'stock' => 'required',
            'unit' => 'required'
        ]);

        item::create($request->all());

        return redirect('/items')->with('success','data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $item = item::findOrFail($id);

        $categories = category::all();

        return view('item.edit', compact('item', 'categories'));
    }

    public function update (Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'category_id' => 'required|exists:categories,id',
            'stock' => 'required',
            'unit' => 'required'
        ]);

        $item = item::findOrFail($id);

        $item->update($request->all());

        return redirect()->route('items.index')->with('success', 'Data Berhasil Di Update');
    }

    public function destroy ($id)
    {
        $item = item::findOrFail($id);

        $item->delete();

        return redirect()->route('items.index')->with('success', 'data berhasil dihapus');
    }

    public function show ()
    {

    }
}
