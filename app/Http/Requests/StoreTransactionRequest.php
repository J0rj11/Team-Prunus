<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTransactionRequest extends FormRequest
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
            'transaction_name' => 'required',
            'address' => 'required',
            'payment_method' => 'required',
            'contact_number' => 'required',
            'payment_method' => 'required|in:0,1',
            'due_date' => 'nullable|sometimes|date',
            'delivery_status' => 'required|in:0,1'
        ];
    }
}
