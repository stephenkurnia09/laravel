<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class SellerProfile extends Controller
{
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'adress' => $request->adress,
                'password' => bcrypt($request->password),
                'role' => $request->role,
        ]);

        return response()->json([
            'status' => true,
            'code' => 201,
            'message' => 'Data Seller telah ditambahkan',
            'data' => $user
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($seller)
    {
        $user = User::find($seller);
        return response()->json([
            'status' => true,
            'code' => 200,
            'message' => 'Seller data',
            'data' => $user
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $seller)
    {
        $seller->update([
            'first_name'=> $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'adress' => $request->adress
        ]);

        return response()->json([
            'status' => true,
            'code '=> 200,
            'message' => 'data seller update'
        ], 200);
    }

}
