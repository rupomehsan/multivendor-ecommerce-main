<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubSubCategory extends Model
{
    use HasFactory;
    protected $guarded =[];
    protected $casts = [
        'image' => 'array'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function sub_category(){
        return $this->belongsTo(SubCategory::class);
    }
}
