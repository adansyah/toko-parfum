<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KategoryRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'name_kategory' => 'required',
            'perbandingan' => 'required',
            'botol' => 'required|in:1:1,2:1',
            'bibit' => 'required',
        ];
    }
}
