<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateEditLessonTime extends FormRequest
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
            'day' => ['required'],
            'group' => ['required'],
            'grouplocation' => ['required'],
            'starting_time' => ['required'],
            'ending_time' => ['required'],
        ];
    }
}
