<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailChart extends Model
{
    use HasFactory;

    protected $fillable=[
        'idchart',
        'img',
        'name',
        'qty',
        'price',
        'subtol',
        'notelepon',
        'email',
        'alamatpesanan',
        'transfer',
        'jasapengiriman'

    ];
}
