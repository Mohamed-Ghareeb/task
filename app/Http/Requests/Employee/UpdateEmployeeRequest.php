<?php

namespace App\Http\Requests\Employee;

use App\Http\Requests\Employee\StoreEmployeeRequest;

class UpdateEmployeeRequest extends StoreEmployeeRequest {
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
		$rules = [
			'email' => ['required', 'unique:employees,email,' . $this->route('employee')->id],
			'phone' => ['required', 'numeric', 'min:0', 'digits:11', 'unique:employees,phone,' . $this->route('employee')->id],
		];

		return array_merge(parent::rules(), $rules);
	}
}
