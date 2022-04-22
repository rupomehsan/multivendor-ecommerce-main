<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchases extends Model
{
    use HasFactory;
    protected $guarded=[];

    public  function purchase_products(){
        return $this->hasMany(PurchaseProduct::class,'invoice_id','invoice_id');
    }


}
