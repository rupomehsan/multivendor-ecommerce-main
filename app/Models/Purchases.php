<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchases extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $appends = ['on_date'];

    public function purchase_products()
    {
        return $this->hasMany(PurchaseProduct::class, 'invoice_id', 'invoice_id');
    }
    public function return_products()
    {
        return $this->hasMany(ReturnProduct::class, 'invoice_id', 'invoice_id');
    }
    public function supplier(){
        return $this->belongsTo(Supplier::class);
    }

    public function getOnDateAttribute(){
        return $this->created_at->toFormattedDateString();
    }


}
