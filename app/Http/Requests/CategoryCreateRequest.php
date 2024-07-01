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
            'category_left_photo' => ['image','mimes:png,jpg,jpeg','dimensions:min_width=255px,min_height=386px'],
            'category_photo' => ['required', 'dimensions:width=397px,height=203px']
        ];
    }

    // public function messages(): array
    // {
    //     return[
    //         'category_left_photo.image' => 'Please give a image',
    //         'category_left_photo.dimensions' => 'Wrong image dimension',
    //     ];
    // }
}
