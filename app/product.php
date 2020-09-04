<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable = [
        'name', 'img', 'price', 'brand_id', 'stock', 'description',
    ];

    
    // public function brands(){
    //     return $this->hasOne(Brand::class);
    // }
}
