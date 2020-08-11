<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductReqeust extends FormRequest
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
            'name'     => ['required', 'string', 'min:3', 'max:50', 'unique:products'],
            'price'    => ['required', 'integer', 'min:4'],
            'address'  => ['required', 'string', 'min:3', 'max:200'],
            'member_id' => ['required', 'string'],
            'product_category_id' => ['required', 'string'],
            'description' => ['required']
        ];
    }
}
