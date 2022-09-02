<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JasaPengiriman;
use Illuminate\Routing\Controller;
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
        if('role' === 'admin'){
            return view('admin/jasapengiriman');
        }
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
        if('role' === 'admin'){
            return view('admin/jasapengiriman');
        }
        return redirect('admin/jasapengiriman');
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
    public function edit($id)
    {
        $jasa_pengiriman = JasaPengiriman::findOrFail($id);
        if('role' === 'admin'){
            return view('admin/jasapengiriman');
        }
        return view('layouts.admin.editdatajasapengiriman', ['jasa_pengiriman' => $jasa_pengiriman]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JasaPengiriman  $jasaPengiriman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $jasa_pengiriman = JasaPengiriman::findOrfail($id);
        $jasa_pengiriman->update($request->all());
        if('role' === 'admin'){
            return view('admin/jasapengiriman');
        }
        return redirect('admin/jasapengiriman');
    }

    public function delete($id)
    {
        $jasa_pengiriman = JasaPengiriman::findOrfail($id);
        if('role' === 'admin'){
            return view('admin/jasapengiriman');
        }
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
        if('role' === 'admin'){
            return view('admin/jasapengiriman');
        }
        if($jasaPengiriman){
            return redirect('admin/jasapengiriman')->with('success','Data Bank Telah Dihapus');
        }

        return redirect('admin/jasapengiriman');
    }
}
