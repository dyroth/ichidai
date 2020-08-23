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
            'name' => ['required', 'string'],
            'day' => ['required', 'string'],
            'group' => ['required', 'string'],
            'location' => ['required', 'string'],
            'starting_time' => ['required', 'date_format:H:i'],
            'ending_time' => ['required', 'date_format:H:i', 'after:starting_time'],
        ];
    }

    public function messages()
    {
        return [
            'ending_time.after' => 'De start tijd moet na de begin tijd liggen.',
        ];
    }
}
