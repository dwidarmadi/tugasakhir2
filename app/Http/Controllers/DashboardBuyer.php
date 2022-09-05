<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class DashboardBuyer extends Controller
{
    public function index(){
        $products = Product::all();

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
