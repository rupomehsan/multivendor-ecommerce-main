<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $casts =[
        'custom_field' => 'array',
        'payment_address_format' => 'array',
        'payment_custom_field' => 'array',
        'shipping_address_format' => 'array',
        'shipping_custom_field' => 'array',
    ];
}
