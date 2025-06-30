<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name_product',
        'harga',
        'id_kategory',
    ];

    public function kategory()
    {
        return $this->belongsTo(Kategory::class);
    }

    public function ulasan()
    {
        return $this->hasMany(Ulasan::class);
    }

    public function stock()
    {
        return $this->hasMany(Stock::class);
    }

    public function transaction()
    {
        return $this->hasMany(Transaction::class);
    }

    public function detailTransaction()
    {
        return $this->hasMany(DetailTransaction::class);
    }
}
