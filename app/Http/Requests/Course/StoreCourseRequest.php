<?php

namespace App\Http\Requests\Course;

use Illuminate\Foundation\Http\FormRequest;

class StoreCourseRequest extends FormRequest
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
            'name'        => 'required|string|max:255',
            'description' => 'required|string|max:500',
            'rating'      => 'required|numeric|min:1',
            'views'       => 'required|numeric|min:1',
            'category_id' => 'required|integer|exists:categories,id',
            'level'       => 'required|in:beginner,intermediate,high',
            'hours'       => 'required|numeric|min:1',
            'active'      => 'required|in:show,hide',
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'category_id' => 'category'
        ];
    }
}
