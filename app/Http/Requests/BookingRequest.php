<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookingRequest extends FormRequest
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
           'supplier_id' => ['required'],
           'cylinder' => ['required'],
           'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'max:10'],
            'gender' => ['required', ],
            'age' => ['required', 'max:2',],
            'aadhar_number' => ['required', 'max:12'],
            'covid_status' => ['required'],
            'identity_proof' => ['required'],
            'address' => ['required'],
            'state' => ['required'],
            'city' => ['required', ],
        ];
    }
     protected function getValidatorInstance() {
            $validator = parent::getValidatorInstance();
            $validator->sometimes('covid_positive', 'required', function($input) {
                return $input->covid_status == 'positive';
            });
            return $validator;
        }
}
