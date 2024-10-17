<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;



class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::paginate(6);
        return view('products.index', compact( 'product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return view('products.create', compact('request'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $image = $request->file('image');
        $image->storeAs('public', $image->hashName());

        Product::create([
            'name' => $request->name,
            'price' => str_replace('.', '', $request->price),
            'stock' => $request->stock,
            'description' => $request->description,
            'image' => $image->hashName(),
        ]);

        return redirect()->route('products.index')->with('success', 'Product created successfully');
    }


    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }


    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
            'description' => 'required',
        ]);

        $product->name = $request->name;
        $product->price = str_replace(',', '', $request->price);
        $product->stock = $request->stock;
        $product->description = $request->description;

        if ($request->file('image')) {

            if ($product->image === 'noimage.png') {
                Storage::disk('local')->delete('public/' . $product->image);
            }
            $image = $request->file('image');
            $image->storeAs('public', $image->hashName());
            $product->image = $image->hashName();
        }

        $product->update();

        return redirect()->route('products.index')->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        if ($product->image === 'noimage.png') {
            Storage::disk('local')->delete('app/public/' . $product->image);
        }

        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully');
    }
}