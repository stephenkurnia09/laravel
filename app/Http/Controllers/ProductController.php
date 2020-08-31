<?php

namespace App\Http\Controllers;

use App\product;
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = Product::create([
            'name' => $request->$name,
            'description '=> $request->$description,
            'type' => $request->$type,
            'price' => $request->$price,
            'stock' => $request->$stock
        ]);

        return response()->json([
            'status' => true,
            'code' => 201,
            'message' => 'Data produk telah ditambahkan',
            'data' => $product
            ], 201);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
        $product->update([
            'name' => $request->$name,
            'description '=> $request->$description,
            'type' => $request->$type,
            'price' => $request->$price,
            'stock' => $request->$stock
        ]);

        return response()->json([
            'status' => true,
            'code '=> 200,
            'message' => 'data Produk update'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        //
    }
}
