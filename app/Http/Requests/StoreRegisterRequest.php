<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRegisterRequest extends FormRequest
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
            'full_name'         => ['required', 'string', 'min:3', 'max:30'],
            'email_address'     => ['required', 'email', 'unique:details'],
            'birth_date'        => ['required'],
            'position_applied'  => ['required', 'string'],
            'edge'              => ['required', 'string', 'min:5']
        ];
    }
}
