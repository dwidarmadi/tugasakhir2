<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;


class LandingPageController extends Controller
{
    public function index()
    {
        // $products = Product::all();
        DB::statement("SET SQL_MODE=''");
        // $products = Product::all();
        $products = DB::table('products')
            ->join('detail_products', 'products.id', '=', 'detail_products.idproduct')
            // ->where('products.id','=',$id)
            ->groupBy('products.id')
            ->get();
        // dd($products);

        // return view('layouts.tamplate-landing',['products' => $products]);
        return view('layouts.website.index', ['products' => $products]);
    }

    public function SingleProduct($id)
    {
        DB::statement("SET SQL_MODE=''");
        $products = DB::table('products')
            ->join('detail_products', 'products.id', '=', 'detail_products.idproduct')
            ->where('products.id', $id)
            ->groupBy('products.id')
            ->first();

        return view('layouts.website.products.singleproduct', ['product' => $products]);
    }
}
