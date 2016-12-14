<?php 
namespace App\Http\Requests;

use App\Http\Requests\Request;

class LoginRequest extends Request {

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
			'usernameLogin' => 'required',
			'passwordLogin' => 'required',
		];
	}

	public function messages()
	{
		return [
			'usernameLogin.required' => 'Chưa Nhập Tên Đăng Nhập',
			'passwordLogin.required' => 'Chưa Nhập Mật Khảu'
		];
	}

}
