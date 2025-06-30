<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategory extends Model
{
    protected $fillable = [
        'name_kategory',
        'perbandingan',
        'botol',
        'bibit'
    ];
}
