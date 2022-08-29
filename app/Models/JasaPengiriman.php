<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JasaPengiriman extends Model
{
    use HasFactory;

    protected $table = 'jasa_pengiriman';

    protected $fillable=[
        'name',
        'no_tlp',
    ];
}
