<?php

namespace App\Http\Requests\Employee;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployeeRequest extends FormRequest {
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize() {
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules() {
		return [
			'first_name' => 'required|string|max:255',
			'last_name'  => 'required|string|max:255',
			'company_id' => 'required|integer|exists:companies,id',
			'email' 	 => 'required|unique:employees,email|email|max:255',
			'phone' 	 => 'required|unique:employees,phone|numeric|min:0|digits:11',
		];
	}
}
