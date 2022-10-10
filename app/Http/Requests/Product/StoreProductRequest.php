<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'product_code' => 'required',
            'product_name' => 'required',
            'category_id' => 'required|exists:categories,id',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
            'description' => 'required'
        ];
    }
}
