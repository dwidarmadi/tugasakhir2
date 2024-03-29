<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\DetailProduct;
use Illuminate\Contracts\Session\Session;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;



class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = DB::table('products')->get();
        return view('layouts.seller.dataproduk',['products'=>$products]);
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

        // $newName = '';

        // if($request->file('photo')){
        //     $extension = $request->file('photo')->getClientOriginalExtension();
        //     $newName = $request->name.'-'.now()->timestamp.'.'.$extension;
        //     $request->file('photo')->storeAs('photos', $newName);
        // }

        // //Mass Assignment
        // $request ['image'] = $newName;
        // $product = Product::create($request->all());

        // return redirect('product');

        $productdata = [
            'name' => $request->name,
            'description' => $request->description,
            'qty' => $request->qty,
            'status' => $request->status,
            'price' => $request->price,
        ];

        $detailproductdata = [
            'name' => $request->name,
            'description' => $request->description,
            'qty' => $request->qty,
            'status' => $request->status,
            'price' => $request->price,
            'photos' => $request->photos,
        ];

        $validate = Validator::make($detailproductdata, [
            'photos' => 'required',
            'photos.*' => 'required|mimes:jpg,png'
        ]);


        if($validate->fails()){
            return "kurang foto / file harus gambar";
        }

        $insertProduct = Product::create($productdata);

        if($insertProduct){

            $photos = [];

            if ($request->file('photos')){
                foreach($request->file('photos') as $key => $file)
                {
                    $fileName = time().rand(1,99).'.'.$file->extension();
                    $file->move(public_path('photos'), $fileName);
                    // $photos[]['idproduct'] = $insertProduct->id;
                    // $photos[]['photo'] = $fileName;
                    $photos[$key]['idproduct'] = $insertProduct->id;
                    $photos[$key]['photo'] = $fileName;
                }
            }

            // DetailProduct::create($file);

            foreach ($photos as $key => $file) {

                // $xdata = [
                //     'idproduct' => $insertProduct->id,
                // ];

                DetailProduct::create($file);
            }

            return redirect('/product');
        }
        // return redirect('product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = DB::table('products')->where('id',$id)->get();
        //dd($product);
        return view('layouts.seller.viewproduk',['products' => $product]);

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
