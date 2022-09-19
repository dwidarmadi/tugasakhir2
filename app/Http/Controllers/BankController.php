<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banks = DB::table('banks')->get();
        return view('layouts.admin.databankadmin',['banks'=>$banks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Return view('layouts.admin.tambahbank');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bank = Bank::create($request->all());
        return redirect('admin/bank');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bank = DB::table('banks')
        ->where('id', $id)
        ->get();

        return view('layouts.admin.datamodalbank',['banks'=>$bank])->render();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bank = Bank::findOrFail($id);
        return view('layouts.admin.editdatabank', ['bank' => $bank]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $bank = bank::findOrfail($id);

        $bank->update($request->all());
        return redirect('admin/bank');
    }

    public function delete($id)
    {
        $bank = Bank::findOrfail($id);
        return view('admin/bank-delete',['banks' => $bank]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deletedBank = DB::table('banks')->where('id', $id)->delete();
        if($deletedBank){
            return redirect('admin/bank')->with('success','Data Bank Telah Dihapus');
        }

        return redirect('/admin/bank');

    }
}
