<?php

namespace App\Http\Requests\Course;

use App\Http\Requests\Course\StoreCourseRequest;

class UpdateCourseRequest extends StoreCourseRequest
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
        $rules = [];

        return array_merge(parent::rules(), $rules);
    }
}
