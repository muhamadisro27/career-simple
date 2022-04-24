<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'id_card_number' => 'required',
            'name' => 'required|min:3|max:255',
            'email' => 'required|email:dns|max:255',
            'password' => 'required|alpha_num|min:6|max:255',
            'sex' => 'required'
        ];
    }
}
