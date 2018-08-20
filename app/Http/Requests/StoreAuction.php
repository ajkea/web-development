<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAuction extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
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
            'style' => 'required|string|present',
            'year' =>  'required|date_format:Y|before:today',
            'width' => 'required|numeric',
            'height' => 'required|numeric',
            'description' => 'required|string|',
            'condition' => 'required|string',
            'origin' => 'required|string',
            'min_price' => 'required|integer',
            'max_price' => 'required|integer',
            'end_date' => 'required|date_format:Y-m-d|after:today',
            'media1' => 'required',
            'media1.*' => 'file|image|max:10000',
            'media2' => 'required|file|image|max:10000',
            'media3' => 'file|image|max:10000',
        ];
    }

    public function messages()
    {
        return [
            'media1.required' => 'Upload a photo of this auction.',
            'media2.required' => 'Upload a photo from your signature.',
        ];
    }
}
