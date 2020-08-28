<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateEditMember extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string'],
            'email' => ['required', 'string', 'unique:users,email,'.$this->request->get('member_id')],
            'grade_id' => ['required', 'string'],
            'birthdate' => ['nullable', 'date_format:d/m/Y'],
            'subscription_until' => ['nullable', 'date_format:d/m/Y'],
        ];
    }
}
