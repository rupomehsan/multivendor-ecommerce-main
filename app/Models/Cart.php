<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $casts = [
        'option' => 'array',
        'color' => 'array',
        'size' => 'array',
    ];

    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function  store_details(){
        return $this->belongsTo(StoreDetails::class,"shop_id","user_id");
    }
}
