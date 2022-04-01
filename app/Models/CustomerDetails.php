<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerDetails extends Model
{
    use HasFactory;
    protected $guarded=[];
    /**
     * @var mixed
     */
    private $fax;

    public function user(){
        return $this->belongsTo(User::class);
    }
}
