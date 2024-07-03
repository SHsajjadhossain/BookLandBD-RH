<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryCreateRequest extends FormRequest
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
            'category_name' => 'required',
            'category_photo' => ['required', 'mimes:png,jpg,jpeg', 'dimensions:width=397px,height=203px']
        ];
    }

    public function messages(): array
    {
        return[
            'category_photo.dimensions' => 'Wrong image dimension',
        ];
    }
}
