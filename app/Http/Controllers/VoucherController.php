<?php

namespace App\Http\Controllers;

use App\Models\Voucher;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class VoucherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $voucher = Voucher::paginate(6);
        return view('vouchers.index', compact('voucher'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return view('vouchers.create', compact('request'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
                [
                    'name' => 'required',
                    'discount' => ' required|numeric',
                    'stock' => 'required|numeric',
                    'type' => 'required',
                    'description' => 'required',
                    'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
                ]
            );

        $image = $request->file('image');
        $imageName = $image->hashName();
        $image->move(public_path('upload-image'), $imageName);

        Voucher::create(
            [
                'name' => $request->name,
                'discount' => $request->discount,
                'stock' => $request->stock,
                'type' => $request->type,
                'description' => $request->description,
                'image' => 'upload-image/' . $imageName,
            ]
        );

        return redirect()->route('vouchers.index')->with('success', 'voucher Created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Voucher $voucher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Voucher $voucher)
    {
        return view('vouchers.edit', compact('voucher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Voucher $voucher)
    {
        $request->validate(
            [
                'name' => 'required',
                'discount' => 'required',
                'stock' => 'required|numeric',
                'type' => 'required',
                'description' => 'required',
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
            ]
        );

        $voucher->fill(
            [
                'name' => $request->name,
                'discount' => $request->discount,
                'stock' => $request->stock,
                'type' => $request->type,
                'description' => $request->description,
            ]
        );

        // Update gambar jika ada unggahan baru
        if ($request->hasFile('image')) {
            // Hapus gambar lama kecuali jika gambar default
            if ($voucher->image && $voucher->image !== 'no-image.png') {
                Storage::delete('public/upload-image/' . $voucher->image);
            }

            // Simpan gambar baru dan perbarui atribut gambar produk
            $imageName = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('upload-image'), $imageName);
            $voucher->image = 'upload-image/' . $imageName;
        }

        $voucher->save();

        return redirect()->route('vouchers.index')->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */ 
    public function destroy(Voucher $voucher)
    {
        if ($voucher->image === 'noimage.png') {
            Storage::disk('local')->delete('app/public/' . $voucher->image);
        }

        $voucher->delete();
        return redirect()->route('vouchers.index')->with('success', 'voucher deleted successfully');
    }
}
