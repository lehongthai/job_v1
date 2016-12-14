<?php 
namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserRequest extends Request {

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
			'name' => 'required',
			'password' => 'required|min:6',
			'password_confirmation' => 'same:password',
			'email' => 'required|E-Mail|unique:users,email',
		];
	}

	public function messages()
	{
		return [
			'name.required' 	=> 'Username không được để trống',
			'email.unique' 	=> 'Email đã được sử dụng',
			'password.required' 	=> 'Password không được để trống',
			'password.min' 		=> 'Password ít nhất 6 ký tự',
			'password_confirmation.same' 	=> 'Nhập lại Password không đúng',
			'email.required' => 'Email không được để trống',
			'email.e_mail' 	=> 'Email không đúng định dạng',
		];
	}

}
