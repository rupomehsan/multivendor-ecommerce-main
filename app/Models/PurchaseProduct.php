<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseProduct extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function purchase(){
        return $this->belongsTo(Purchases::Class,'invoice_id','invoice_id');
    }

    public function product(){
        return $this->belongsTo(Product::class);
    }
}
