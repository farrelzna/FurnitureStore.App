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
        return view('products.index', compact('product'));
    }
    
    public function create(Request $request)
    {
        return view('products.create', compact('request'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate
        (
    [
            'name' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            ]
        );

        $image = $request->file('image');
        $imageName = $image->hashName();
        $image->move(public_path('upload-image'), $imageName);

        Product::create([
            'name' => $request->name,
            'price' => str_replace('.', '', $request->price),
            'stock' => $request->stock,
            'description' => $request->description,
            'image' => 'upload-image/' . $imageName,
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
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        // Update atribut produk
        $product->fill([
            'name' => $request->name,
            'price' => str_replace(',', '', $request->price),
            'stock' => $request->stock,
            'description' => $request->description,
        ]);

        // Update gambar jika ada unggahan baru
        if ($request->hasFile('image')) {
            // Hapus gambar lama kecuali jika gambar default
            if ($product->image && $product->image !== 'no-image.png') {
                Storage::delete('public/upload-image/' . $product->image);
            }

            // Simpan gambar baru dan perbarui atribut gambar produk
            $imageName = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('upload-image'), $imageName);
            $product->image = 'upload-image/' . $imageName;
        }

        $product->save();

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
