<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Contracts\Validation\Validator;
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
			'name' => "required|min:2|max:10|Alpha",
			'paternal_name' => "required|min:2|max:100|Alpha",
			'maternal_name' => "min:2|max:100|Alpha",
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
			'required' => trans("user.:attribute is required"),
			'min' =>  trans("user.:attribute minimum is :min characters"),
			'max' => trans("user.:attribute maximum is :max characters"),
			'ins' => trans("user.:attribute must be one of the following :values"),
		];
	}



}
