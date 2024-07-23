<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Variant;
use Illuminate\Http\Request;

class VariantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $variant = Variant::all();
        return view('admin.variant.index',compact('variant'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        $product = Product::all();
        $detailvar = Variant::find($id);
        return view('admin.variant.update', compact('detailvar', 'product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $data = $request->all();
        $vari = Variant::find($id);
        $file =$request->file('image');
        $vari->quantity = $data['quantity'];
        $vari->color = $data['color'];

        $real_name = $data['file'];

        if ($file) {
            $size = $file->getSize();
            if ($size > 0) {
                if (file_exists('uploads/product/' . $vari->image)) {
                    unlink('uploads/product/' . $vari->image);
                }
                $path = 'uploads/product/';

                $name_file = $file->getClientOriginalName();
                $name_image = current(explode('.', $name_file));
                $real_name = $name_image . '_' . rand(1, 1000) . '.' . $file->getClientOriginalExtension();
                $file->move($path, $real_name);
            }
        }

        $vari->image = $real_name;
        $vari->save();

        return redirect()->route('variant.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $variant = Variant::find($id);
        if (file_exists('uploads/product/' . $variant->image)) {
            unlink('uploads/product/' . $variant->image);
        }
        $variant->delete();
        return redirect()->route('variant.index');
    }
}
