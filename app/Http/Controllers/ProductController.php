<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Http\Requests\StoreproductRequest;
use App\Http\Requests\UpdateproductRequest;
use App\Models\Categorie;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Product::with('categories')->paginate(5);
        return view('products.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $datacategorie = Categorie::all();
        return view('products.create', compact('datacategorie'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $data = Product::create($request->all());
        if($request->hasFile('picture')){
            $request->file('picture')->move('fotoproduct/', $request->file('picture')->getClientOriginalName());
            $data->picture = $request->file('picture')->getClientOriginalName();
            $data->save();
        }
        // //validate form
        // $this->validate($request, rules: [
        //     'image'     =>      'required|image|mimes:png,jpg|max:2048',
        // ]);

        // //uplod image
        // $image = $request->file('image');
        // $image->storeAs(path: 'public/posts', name: $image->hashName());

        //create post
        // Post::create({
        //     'image'  => $image->hashName()

        // });
        return redirect()->route('products')->with('sukses', 'Produk berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);

        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
        $datacategorie = Categorie::get();

        return view('products.edit', compact('product', 'datacategorie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::findOrFail($id);
        $product->update($request->all());

        return redirect()->route('products')->with('success', 'product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);

        $product->delete();

        return redirect()->route('products')->with('success', 'product deleted successfully');
    }
}
