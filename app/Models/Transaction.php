<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'kode_transaksi',
        'date_transaksi',
        'id_product',
        'total',
        'id_user',
        'alamat',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
