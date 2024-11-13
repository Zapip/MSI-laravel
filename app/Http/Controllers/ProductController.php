<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\product2;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        $products2 = product2::all();
        return view('productviews', compact('products', 'products2'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('productadd');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Product::create($request->all());
        return redirect('/')->with('success', 'Produk berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
        $product2 = product2::findOrFail($id);
        return view('productedit', compact('product', 'product2'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        Product::whereId($id)->update($request->only(['produk', 'harga', 'jumlah']));

        return redirect('/')->with('success', 'Produk berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('/')->with('success', 'Produk berhasil dihapus');
    }
}
