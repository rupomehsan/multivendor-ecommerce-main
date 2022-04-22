<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $casts = [
        'language_id' => 'array',
        'category_id' => 'array',
        'filters' => 'array',
        'related_product_id' => 'array',
        'attributes' => 'array',
        'option' => 'array',
        'recurring' => 'array',
        'discount' => 'array',
        'special' => 'array',
        'reward_point' => 'array',
        'design' => 'array',
        'image' => 'array',
    ];

    public function prchase_products(){
        return $this->hasMany(PurchaseProduct::class);
    }
}
