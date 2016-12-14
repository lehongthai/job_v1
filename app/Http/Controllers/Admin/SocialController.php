<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use Socialite;
use App\User, App\Socials, App\Common;
use Auth, Mail;
use App\Http\Controllers\Controller;

class SocialController extends Controller
{
    public function redirectFacebookToProvider()
    {
    	return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookProviderCallback()
    {
    	$user = Socialite::driver('facebook')->user();
    	
    	$socials = Socials::where('social_id', $user->id)->where('provider', 'facebook')->first();
    	if ($socials) {
    		$u = User::where('email', $user->email)->first();
    		Auth::login($u);
    		return redirect('/');
    	}else{
    		$facebook = new Socials;
    		$facebook->social_id = $user->id;
    		$facebook->_token = $user->_token;
    		$facebook->provider = 'facebook';
    		$facebook->avatar = $user->avatar;
    		$facebook->create_at = Carbon\Carbon::now();

    		$u = User::where('email', $user->email)->first();
    		if (!$u) {
    			$u = User::create([
    								'fullname' => $user->name,
    								'email' => $user->email,
    								'level' => 1,
    								'active' => 1
    								]);
    		}

    		$facebook->user_id = $u->id;
    		$facebook->save();
    		Auth::login($u);
    		return redirect('/');

    	}
    }

    public function redirectGoogleToProvider()
    {
    	return Socialite::driver('google')->redirect();
    }

    public function handleGoogleProviderCallback()
    {
    	$user = Socialite::driver('google')->user();
    	
    	$socials = Socials::where('social_id', $user->id)->where('provider', 'google')->first();
    	if ($socials) {
    		$u = User::where('email', $user->email)->first();
    		Auth::login($u);
    		return redirect('/');
    	}else{
    		$google = new Socials;
    		$google->social_id = $user->id;
    		$google->_token = $user->_token;
    		$google->provider = 'google';
    		$google->avatar = $user->avatar;
    		$google->create_at = Carbon\Carbon::now();

    		$u = User::where('email', $user->email)->first();
    		if (!$u) {
    			$u = User::create([
    								'fullname' => $user->name,
    								'email' => $user->email,
    								'level' => 1,
    								'active' => 1
    								]);
    		}

    		$google->user_id = $u->id;
    		$google->save();
    		Auth::login($u);
    		return redirect('/');

    	}
    }

    public function postRegister(Request $request)
    {
    	$this->validate($request,
    		[
    		'fullname' 				=> 'required',
			'passwordRegister' 		=> 'required|min:6',
			'password_confirm'      => 'same:passwordRegister',
			'email' 				=> 'required|E-Mail|unique:users,email',
            'phone'                 => 'required|numeric',
            'birthday'              => 'date|before:today',
            'sex'                   => 'in:1,2',
            'provin'                => 'exists:provins,id',
			],
			[
			'fullname.required' 	=> 'Tên không được để trống',
			'email.unique' 			=> 'Email đã được sử dụng',
			'phone.numeric' 		=> 'Số điện thoại phải là số',
			'phone.required' 	    => 'Số điện thoại không được để trống',
			'passwordRegister.required' 	=> 'Mật Khẩu không được để trống',
			'passwordRegister.min' 			=> 'Mật Khẩu ít nhất 6 ký tự',
			'password_confirmation.same' 	=> 'Nhập lại Mật Khẩu không đúng',
			'email.required'		=> 'Email không được để trống',
			'email.e_mail' 			=> 'Email không đúng định dạng',
            'birthday.date'         => 'Ngày sinh không đúng định dạng',
            'provin.exists'         => 'Tỉnh / Thành phố không tồn tại',
            'sex.in'                => 'Giới tính chỉ được là nam hoặc nữ',
            'birthday.before'       => 'Ngày sinh phải bé hơn ngày hiện tại',  
			]);


    	$user = new User;
		$user->fullname			= $request->fullname;
		$user->address			= $request->address;
		$user->email			= $request->email;
        $user->sex              = $request->sex;
        $user->birthday          = $request->birthday;
        $user->phone            = $request->phone;
        $user->provin            = $request->provin;
		$user->password			= bcrypt($request->password);
		$user->level			= 1;
		$user->remember_token 	= $request->_token;
		$user->active = md5(uniqid());

		if($user->save()){
			$id = $user->id;
			$data = array('id'=>$id , 'userMail' => $user->email);
            Mail::send('emails.active', $data, function ($message) use ($user)  {
                $message->from('teamchich26@gmail.com', 'Xác nhận tài khoản');
                $message->to($user->email)->subject('Xác nhận tài khoản');
            });

			$message = ['level' => 'success', 'flash_message' => 'Tạo thành công thành viên <b>'.$request->name.'</b>'];
		}else{
			$message = ['level' => 'danger', 'flash_message' => 'Tạo không thành công thành viên <b>'.$request->name.'</b>'];
		}

		return redirect('/');
    }

    public function getConfirmUser($id)
	{
		$user = User::find($id);
        if ($user) {
            $user->active = 1;
            if ($user->save()) {
                echo "<script>
		            alert('Xác nhận tài khoản thành công, Cảm ơn bạn đã đăng ký tài khoản !!');
		            window.location = '".url('/')."'
		        </script>";
		            }
        }else{
             echo "<script>
		            alert('Xác nhận tài khoản không thành công, Xin lỗi vì sự cố này !!');
		            window.location = '".url('/')."'
		        </script>";
		}
       
    }

    public function getRegister()
    {
        $listProvin = Common::getProvin();
        return view('page.content.register', compact('listProvin'));
    }

}
