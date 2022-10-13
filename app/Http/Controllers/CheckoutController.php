<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use App\Models\Chart;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\Product;
use Auth;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cart = Chart::all();
        $total = $cart->sum('subtol');

        return view('layouts.buyer.checkout', [
            'data_cart' => $cart,
            'total' => $total
        ]);
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
        $data_order = $request->validate([
            'phone' => 'required|string',
            'email' => 'required|string',
            'alamat' => 'required|string',
            'payment' => 'required',
            'shipper' => 'required',
        ]);
        $data_order['invoice_code'] = 'INV-' . time() . '-' . strtoupper(Str::random(5));
        $data_order['user_id'] = Auth::user()->id;
        $data_order['name'] = Auth::user()->name;
        $data_order['status'] = 'Waiting Payment';

        $data_cart = Chart::all();

        $data_order['total'] = $data_cart->sum('subtol');

        $new_data_order = Order::create($data_order)->id;

        for ($i = 0; $i < count($data_cart); $i++) {
            $product_search = Product::find($data_cart[$i]->idproduct);

            $new_detail_order = [
                'order_id' => $new_data_order,
                'seller_id' => $product_search->iduser,
                'product_name' => $data_cart[$i]->name,
                'qty' => $data_cart[$i]->qty,
                'price' => $data_cart[$i]->price,
            ];

            $data_order_detail = OrderDetails::create($new_detail_order);

            $delete_cart = Chart::where('id', $data_cart[$i]->id)->delete();
        }

        return redirect()->route('buyer.dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
