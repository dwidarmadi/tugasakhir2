<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Contracts\Session\Session;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.seller.tambahproduk');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newName = '';

        if($request->file('photo')){
       $extension = $request->file('photo')->getClientOriginalExtension();
       $newName = $request->name.'-'.now()->timestamp.'.'.$extension;
       $request->file('photo')->storeAs('photos', $newName);
        }

        //Mass Assignment
        $request ['image'] = $newName;
        $product = Product::create($request->all());

        return redirect('product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $products = DB::table('products')->get();
        return view('layouts.seller.dataproduk',['products'=>$products]);

    }

    public function showDetail(Product $product)
    {

        return view('layouts.seller.viewproduk');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product, $id )
    {
        $product = Product::findOrFail($id);
        return view('layouts.seller.editproduk', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrfail($id);

        $product->update($request->all());
        return redirect('/product');
    }

    public function updateView(Request $request, $id)
    {
        $product = Product::findOrfail($id);

        $product->updateView($request->all());
        return redirect('/product');
    }

    public function delete($id)
    {
        $product = Product::findOrfail($id);
        return view('product-delete',['products' => $product]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deletedProduct = DB::table('products')->where('id', $id)->delete();
        if($deletedProduct){
            return redirect('/product')->with('success','Produk Telah Dihapus');
        }

        return redirect('/product');


    }
}
