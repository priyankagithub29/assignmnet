<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
           'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'max:10', 'unique:users'],
            'gender' => ['required', ],
            'age' => ['required', 'max:2',],
            'aadhar_number' => ['required', 'max:12'],
            'identity_proof' => ['required'],
            'address' => ['required'],
            'state' => ['required'],
            'city' => ['required', ],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'password_confirmation' => ['required'],
        ];
    }
}
