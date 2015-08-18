<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserForm extends Request {

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
			'name' => "required|min:1|max:100|Alpha",
			'paternal_name' => "required|min:1|max:100|Alpha",
			'maternal_name' => "min:1|max:100|Alpha",
			'gender' => "required|in:male,female",
			'email' => "required|email|Unique:users",
			'password' => "required|AlphaNum|min:6|max:50,confirmed",
			'password_confirmation'=>'required|AlphaNum|Between:4,8',
			'avatar' => "min:10|max:100",
		];
	}

	public function messages()
	{
		return [
			'name.required' => 'El campo nombre es requerido!',
			'name.min' => 'El campo nombre no puede tener menos de :min carácteres',
			'name.max' => 'El campo title no puede tener más de :max carácteres',
		];
	}


}
