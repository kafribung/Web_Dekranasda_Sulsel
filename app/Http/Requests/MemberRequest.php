<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MemberRequest extends FormRequest
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
            'img'      => ['required', 'mimes:png,jpg,jpeg'],
            'name'     => ['required', 'string', 'min:3', 'max:50', 'unique:members'],
            'contact'  => ['required', 'string', 'min:10', 'max:15'],
            'website'  => ['required', 'url'],
            'address'  => ['required'],
            'description' => ['required'],
        ];
    }
}
