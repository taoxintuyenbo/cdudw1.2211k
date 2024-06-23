<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'category_id' => 'required|integer',
            'brand_id' => 'required|integer',
            'detail' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'sale_price' => 'numeric|min:0',
            'qty' => 'required|integer|min:0',
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required|integer',
        ];
    }
}
