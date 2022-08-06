<?php

namespace App\Http\Controllers;

use App\Models\KeranjangBelanja;
use Illuminate\Http\Request;

class KeranjangBelanjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.buyer.keranjangbelanja');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KeranjangBelanja  $keranjangBelanja
     * @return \Illuminate\Http\Response
     */
    public function show(KeranjangBelanja $keranjangBelanja)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KeranjangBelanja  $keranjangBelanja
     * @return \Illuminate\Http\Response
     */
    public function edit(KeranjangBelanja $keranjangBelanja)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KeranjangBelanja  $keranjangBelanja
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KeranjangBelanja $keranjangBelanja)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KeranjangBelanja  $keranjangBelanja
     * @return \Illuminate\Http\Response
     */
    public function destroy(KeranjangBelanja $keranjangBelanja)
    {
        //
    }
}
