<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable=[
    'invoice_code',
    'user_id',
    'name',
    'phone',
    'email',
    'alamat',
    'payment',
    'shipper',
    'airwaybill',
    'total',
    'payment_img',
    'status',
    ];
}
