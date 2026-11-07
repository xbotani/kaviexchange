<?php

namespace App\Http\Requests\Currency;

use Illuminate\Foundation\Http\FormRequest;

class CurrencyStoreRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string',
            'code' => 'required|string|max:255',
            'currency_code' => 'required|string|max:255',
            'order' => 'required|numeric',
            'sale' => ["required", "numeric"],
            'buy' => ["required", "numeric"],
        ];
    }
}
