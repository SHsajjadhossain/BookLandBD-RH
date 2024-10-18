<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CouponFormRequest extends FormRequest
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
            'coupon_name' => 'required|unique:coupons,coupon_name',
            'discount_percentage' => 'required|numeric|min:1|max:99',
            'coupon_validity' => 'required|date|after:today',
            'coupon_limit' => 'required|numeric|min:1'
        ];
    }

    public function messages()
    {
        return [
            'coupon_name.unique' => 'The coupon name has already been taken.',
            'discount_percentage.numeric' => 'The coupon discount percentage field must be a number.',
        ];
    }
}
