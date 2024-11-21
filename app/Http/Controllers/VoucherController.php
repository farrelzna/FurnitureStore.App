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
        $voucher = Voucher::all();

        return view('vouchers.index', compact('vouchers'));
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
        $request->validate
        (
    [
            'name' => 'required',
            'price' =>' required|numeric',
            'stock' => 'required|numeric',
            'type' => 'required',
            'description' => 'required',
            ]
        );

        Voucher::create(
            [
                'name' => $request->name,
                'price' => $request->price,
                'stock' => $request->stock,
                'type' => $request->type,
                'description' => $request->description,
            ]
        );

        return redirect()->route('vouchers.index')->with('success', 'Vouchers Created successfully');
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
        return view('vouchers.edit', compact('voucer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Voucher $voucher)
    {
        $request->validate(
            [
                'name' => 'required',
                'price' =>' required|numeric',
                'stock' => 'required|numeric',
                'type' => 'required',
                'description' => 'required',
            ]
        );

        $voucher->fill(
            [
                'name' => $request->name,
                'price' => $request->price,
                'stock' => $request->stock,
                'type' => $request->type,
                'description' => $request->description,
            ]
            );

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
        return redirect()->route('products.index')->with('success', 'Product deleted successfully');
    }
}