<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreproductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            // 'product_name','sale_price','MRP','category','quantity'
            'product_name' => 'required|string',
            'sale_price' => 'required|numeric',
            'MRP' => 'required|numeric',
            'category' => 'required|string',
            'quantity' => 'required|numeric',
        ];
    }
}
