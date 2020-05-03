<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateEditCoach extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required'],
            'bio' => ['required'],
            'grade' => ['required'],
            'photo' => 'mimes:jpeg,png,bmp,tiff |max:4096',
        ];
    }
}
