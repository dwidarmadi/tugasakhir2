<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class DashboardAll extends Controller
{
    public function index(){
        DB::statement("SET SQL_MODE=''");
        // $products = Product::all();
        $products = DB::table('products')
                        ->join('detail_products','products.id','=','detail_products.idproduct')
                        // ->where('products.id','=',$id)
                        ->groupBy('products.id')
                        ->get();
        //dd($products);
        return view('layouts.buyer.dashboardbuyer',['products' => $products]);
    }

    public function index1(){
        $products = Product::all();

        return view('layouts.seller.dashboardseller',['products' => $products]);
    }

    public function index2(){
        $products = Product::all();

        return view('layouts.admin.dashboardadmin');
    }
}
