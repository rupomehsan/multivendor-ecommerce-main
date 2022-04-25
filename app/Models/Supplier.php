<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $casts = [
        'image' => 'array',
        'store' => 'array'
    ];

    public function purchases(){
        return $this->hasMany(Purchases::class);
    }
}
