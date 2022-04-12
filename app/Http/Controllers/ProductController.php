<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('product');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('add_product');
    }

    public function store(Request $request)
    {
        $product = new Product();
        if ($request->hasFile('image')){
           $product->name = $request->name;
           $product->price = $request->price;
           $product->image = $request->file('image')->store('images');
        }else{
            $product->name = $request->name;
            $product->price = $request->price;
        }
         $product->save();

        return  redirect('/product');
    }
    public function show(Product $product)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    public function update(Request $request)
    {
        $id = $request->id;
        $product =  Product::find($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->save();

        return redirect('/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
