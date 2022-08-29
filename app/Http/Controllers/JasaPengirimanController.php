<?php

namespace App\Http\Controllers;

use App\Models\JasaPengiriman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JasaPengirimanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jasa_pengiriman = DB::table('jasa_pengiriman')->get();
        return view('layouts.admin.datajasapengirimanadmin',['jasa_pengiriman'=>$jasa_pengiriman]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.admin.tambahjasapengiriman');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jasa_pengiriman = JasaPengiriman::create($request->all());
        return redirect('/jasapengiriman');
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
        $jasa_pengiriman = JasaPengiriman::findOrFail($id);
        return view('layouts.admin.datajasapengirimanadmin', ['jasa_pengiriman' => $jasa_pengiriman]);
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
        $jasa_pengiriman = JasaPengiriman::findOrfail($id);

        $jasa_pengiriman->update($request->all());
        return redirect('/jasapengiriman');
    }

    public function delete($id)
    {
        $jasa_pengiriman = JasaPengiriman::findOrfail($id);
        return view('bank-delete',['jasa_pengiriman' => $jasa_pengiriman]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JasaPengiriman  $jasaPengiriman
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jasaPengiriman = DB::table('jasa_pengiriman')->where('id', $id)->delete();
        if($jasaPengiriman){
            return redirect('/jasapengiriman')->with('success','Data Bank Telah Dihapus');
        }

        return redirect('/jasapengiriman');
    }
}
