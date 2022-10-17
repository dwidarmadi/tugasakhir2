<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('orders')->join('order_details', 'orders.id', 'order_details.order_id' )->select('orders.*')->where('order_details.seller_id', Auth::user()->id)
                    ->where('orders.status', '!=', 'Waiting Payment')
                    ->where('orders.status', '!=', 'Checking Payment')
                    ->where('orders.status', '!=', 'Failed Payment')
                    ->where('orders.status', '!=', 'Cancelled')
                    ->first();

        return view('layouts.seller.pesananmasukseller', ['orders' => $data]);
    }

    public function indexBuyer()
    {
        $data = DB::table('orders')->where('user_id', Auth::user()->id)->where('status', '!=', 'Received')->orWhere('status', '!=', 'Cancelled')->get();

        return view('layouts.buyer.pesanan', ['orders' => $data]);
    }

    public function indexAdmin()
    {
        $data = DB::table('orders')->get();

        return view('layouts.admin.informasipesananadmin', ['orders' => $data]);
    }

    public function indexHistory()
    {
        $data = DB::table('orders')->where('user_id', Auth::user()->id)->where('status', 'Received')->orWhere('status', 'Cancelled')->get();

        return view('layouts.buyer.historipesanan', ['orders' => $data]);
    }

    public function createPay($id)
    {
        return view('layouts.buyer.uploadpay', ['invoice' => $id]);
    }

    public function storePay(Request $request, $id)
    {
        $data_attachment = $request->validate([
            'attachment' => 'required|image|mimes:jpeg,bmp,png|max:2048',
        ]);

        $image    = $request->file('attachment');
        $new_name =   uniqid().'_'.time().'.'.$image->extension();
        $image->move(public_path('photos'), $new_name);
        $data_image['payment_img'] = $new_name;
        $data_image['status'] = 'Checking Payment';

        $data = DB::table('orders')->where('invoice_code', $id)->update($data_image);

        return redirect('buyer/order/order-list');
    }

    public function paymentUpdate(Request $request, $id)
    {
        if($request->status == 'a'){
            $data_status['status'] = 'On Process';
        }else{
            $data_status['status'] = 'Payment Failed';
        }

        $data = DB::table('orders')->where('invoice_code', $id)->update($data_status);

        return redirect('admin/order/order-in');
    }

    public function createShipping($id)
    {
        return view('layouts.seller.uploadresi', ['invoice' => $id]);
    }

    public function storeShipping(Request $request, $id)
    {
        $data_shipping = $request->validate([
            'airwaybill' => 'required',
        ]);

        $data_shipping['status'] = "Shipping";

        $data = DB::table('orders')->where('invoice_code', $id)->update($data_shipping);

        return redirect('seller/order');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
