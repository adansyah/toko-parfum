<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $fillable = [
        'id_product',
        'quantity'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
