<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductCreateRequest extends FormRequest
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
            'product_name' => 'required',
            'product_slug' => 'required',
            'category_id' => 'required',
            'product_price' => 'required',
            'product_short_description' => 'required',
            'product_long_description' => 'required',
            'product_code' => 'required',
            'product_photo' => 'required|image|mimes:png,jpg,jpeg|dimensions:width=700, height=700'
        ];
    }
}
