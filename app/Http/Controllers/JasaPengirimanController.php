<?php

namespace App\Http\Controllers;

use App\Models\JasaPengiriman;
use Illuminate\Http\Request;

class JasaPengirimanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.admin.datajasapengirimanadmin');
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
     * @param  \App\Models\JasaPengiriman  $jasaPengiriman
     * @return \Illuminate\Http\Response
     */
    public function show(JasaPengiriman $jasaPengiriman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JasaPengiriman  $jasaPengiriman
     * @return \Illuminate\Http\Response
     */
    public function edit(JasaPengiriman $jasaPengiriman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JasaPengiriman  $jasaPengiriman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JasaPengiriman $jasaPengiriman)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JasaPengiriman  $jasaPengiriman
     * @return \Illuminate\Http\Response
     */
    public function destroy(JasaPengiriman $jasaPengiriman)
    {
        //
    }
}
