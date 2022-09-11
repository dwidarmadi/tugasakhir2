<?php

namespace App\Http\Controllers;

use App\Models\Chart;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        DB::statement("SET SQL_MODE=''");

        $products = DB::table('products')
                        ->join('charts','products.id','=','charts.idchart')
                        ->join('detail_products','products.id','=','detail_products.idproduct')
                        // ->where('products.id','=',$id)
                        ->groupBy('products.id')
                        ->get();

        // dd($products);

        return view('layouts.buyer.keranjangbelanja',['products' => $products]);
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

        $chartproduct = [
            'idchart' => $request->idproduct,
            'name' => $request->nameproduct,
            'qty' => $request->jumlahbelanja,
            'price' => $request->hargaproduct,
            'subtol' => $request->jumlahbelanja * $request->hargaproduct,
        ];

        // dd($chartproduct);

        DB::table('charts')->insert($chartproduct);

        return redirect('/buyer/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chart  $chart
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = DB::table('products')
                    ->where('id',$id)
                    ->get();
        $productphotos = DB::table('detail_products')
                    ->where('idproduct',$id)
                    ->get();
        // dd($product);
        return view('layouts.buyer.keranjangbelanja',['products' => $product, 'productphotos'=>$productphotos]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chart  $chart
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        DB::statement("SET SQL_MODE=''");

        $charts = DB::table('charts')
                        ->join('detail_products','charts.idchart','=','detail_products.idproduct')
                        ->join('products','charts.idchart','=','products.id')
                        ->where('charts.idchart','=',$id)
                        ->groupBy('charts.idchart')
                        ->get();
        // dd($charts);
        return view('layouts.buyer.editchart', ['products' => $charts]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Chart  $chart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $chart = Chart::findOrfail($id);

        $chartproduct = [
            'qty' => $request->jumlahbelanja,
        ];

        $x = DB::table('charts')->where('id',$id)->update($chartproduct);



        if($x){
            return redirect('buyer/chart');
            // return "datamasuk";
        }

        return "error";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chart  $chart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chart $chart)
    {
        //
    }
}
