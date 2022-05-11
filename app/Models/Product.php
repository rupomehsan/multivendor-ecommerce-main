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
    public function category(){
        return $this->hasMany(Category::class,'id','category_id');
    }

    public function reviews(){
        return $this->hasMany(Review::class);
    }
    public function brands(){
        return $this->hasMany(Brand::class);
    }
    public function carts(){
        return $this->hasMany(Brand::class);
    }
}
