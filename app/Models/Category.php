<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded =[];
    protected $casts = [
        'image' => 'array'
    ];

    public function pruducts(){
        return $this->hasMany(Product::class);
    }
}
