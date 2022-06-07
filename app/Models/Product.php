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
    protected $appends=['is_wish_list','is_compare_list'];

    public function prchase_products(){
        return $this->hasMany(PurchaseProduct::class);
    }
    public function category(){
        return $this->hasMany(Category::class,'id','category_id');
    }
    public function reviews(){
        return $this->hasMany(Review::class);
    }
    public function brand(){
        return $this->belongsTo(Brand::class);
    }
    public function carts(){
        return $this->hasMany(Brand::class);
    }
    public function store_details(){
        return $this->belongsTo(StoreDetails::class,'vendors_id','user_id');
    }

    public  function wish_lists(){
        return $this->hasMany(WishList::class);
    }

    public function compare_lists()
    {
        return $this->hasMany(CompareList::class);
    }

    public function getIsWishListAttribute(){
        $clientIp = request()->ip();
        if($clientIp){
            return $this->wish_lists->where('client_ip',$clientIp)->first() ? true : false;
        }else{
            return false;
        }
    }
    public function getIsCompareListAttribute(){
        $clientIp = request()->ip();
        if($clientIp){
            return $this->compare_lists->where('client_ip',$clientIp)->first() ? true : false;
        }else{
            return false;
        }
    }




}
