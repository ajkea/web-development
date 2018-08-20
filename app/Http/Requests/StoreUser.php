<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUser extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|',
            'email' => 'unique|required|email',
            'country' => 'required|string|present',
            'zip_code' => 'required|integer|',
            'city' => 'required|string|',
            'phone_number' => 'required|integer|',
            'account_number' => 'required|integer|',
            'vat_number' => 'required|integer|',
            'password' => 'required|alpha_num|min:6',
            'password_confirmation' => 'required|same:password',
        ];
    }
}
