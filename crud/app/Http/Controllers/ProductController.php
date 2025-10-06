<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function store(Request $request){
        $Data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'description' => 'nullable|string'
        ]);

        $newProduct = Product::create($Data);
        return redirect(route('crud.index'));
    }

    public function edit(Product $product){
        return view('dashboard.editProducts', ['product' => $product]);
    }

    public function update(Product $product, Request $request){
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'description' => 'nullable|string'
        ]);

        $product->update($data);
        return redirect(route('crud.index'))->with('success', 'Product Updated Successfully');
    }

    public function delete(Product $product){
        $product->delete();
        return redirect(route('crud.index'))->with('success', 'Product Deleted Successfully');
    }
}
