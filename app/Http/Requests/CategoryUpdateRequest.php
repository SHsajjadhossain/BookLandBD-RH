<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryUpdateRequest extends FormRequest
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
            'category_update_name' => 'required',
            'category_update_photo' => 'image|mimes:png,jpg,jpeg|dimensions:width=521, height=270'
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     */
    public function messages(): array
    {
        return [
            'category_update_name.required' => 'The category name field is required',
            'category_update_photo.image' => 'Please give a image',
            'category_update_photo.mimes' => 'The file only support type: png, jpg, jpeg',
            'category_update_photo.dimensions' => 'Wrong image dimensions',
        ];
    }
}
