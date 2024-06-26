<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules = [
            'name' => [
                'required',
                'string',
                'max:200'
            ],
            'price' => [
                'required',
            ],
            'slug' => [
                'required',
                'string',
                'max:200'
            ],
            'description' => [
                'required',
                'string',
                'max:1000'
            ],
            'image' => [
                'nullable',
                'file',
                'mimes:jpeg,jpg,png,jfif'
            ],
        ];
        return $rules;
    }
}
