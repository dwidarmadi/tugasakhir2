<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;


class LandingPageController extends Controller
{
    public function index(){
        $products = Product::all();

        return view('layouts.tamplate-landing',['products' => $products]);
    }
}
