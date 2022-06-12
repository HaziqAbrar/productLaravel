<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $myproduct = Product::all();
        return view('index', compact('myproduct'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('product.createProduct');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
        $product = new Product;
        // $product->image = $request->file('image')->store('/public/images/product-image');
        // $product->imagehover = $request->file('imagehover')->store('/public/images/product-image');
        $imageName = time().'1'.'.'.$request->image->extension();
        $request->image->move(public_path('images/product-image/'), $imageName);
        $product->image = 'images/product-image/' . $imageName;

        
        $imageNamehover = time().'2'.'.'.$request->imagehover->extension();
        $request->imagehover->move(public_path('images/product-image/'), $imageNamehover);
        $product->imagehover = 'images/product-image/' . $imageNamehover;

        $product->name = $request->name;
        $product->price = $request->price;
        $product->category = $request->category;
        $product->sku = $request->sku;
        $product->tags = $request->has('tags')
                        ?$request->get('tags')
                        :[];
        $product->description = $request->description;
        // dd($request->image);
        $product->save();
        $myproduct = Product::all();
        return redirect('/home');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
        return view('/product.showProduct', compact('product'));
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //

        // dd($request->sku);
        Product::where('sku', $request->sku)->delete();
        return redirect('/home');

    }
}
