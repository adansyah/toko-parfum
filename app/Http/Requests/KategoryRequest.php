<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KategoryRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'name_kategory' => 'required',
            'botol' => 'required|in:15ML,25ML,35ML,50ML,100ML,',
            'perbandingan' => 'required|in:1:1,2:1',
            'bibit' => 'required',
        ];
    }
}
