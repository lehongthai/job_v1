<?php 
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\User;
use Hash, Auth, Mail;
use Response, Input;

class UserController extends Controller {

	public function getList()
	{
		$users = User::all()->toArray();
		return view('admin.user.list', compact('users'));
	}

	public function getAdd()
	{
		return view('admin.user.add');
	}

	public function postAdd(UserRequest $addRequest)
	{

		$user = new User;
		$user->name			= $addRequest->name;
		$user->email			= $addRequest->email;
		$user->password			= bcrypt($addRequest->password);
		$user->level			= 1;
		$user->remember_token 	= $addRequest->_token;
		$user->active = md5(uniqid());

		if($user->save()){
			$id = $user->id;
			$data = array('id'=>$id , 'userMail' => $user->email);
            Mail::send('emails.active', $data, function ($message) use ($user)  {
                $message->from('teamchich26@gmail.com', 'Xác nhận tài khoản');
                $message->to($user->email)->subject('Xác nhận tài khoản');
            });

			$message = ['level' => 'success', 'flash_message' => 'Tạo thành công thành viên <b>'.$addRequest->name.'</b>'];
		}else{
			$message = ['level' => 'danger', 'flash_message' => 'Tạo không thành công thành viên <b>'.$addRequest->name.'</b>'];
		}

		return redirect()->route('/home')->with($message);
	}


	public function getConfirmUser($id)
	{
		$user = User::find($id);
        if ($user) {
            $user->active = 1;
            if ($user->save()) {
                echo "<script>
		            alert('Xác nhận tài khoản thành công, Cảm ơn bạn đã tin tưởng shop !!');
		            window.location = '".url('/')."'
		        </script>";
		            }
            $message = ['level' => 'danger', 'info' => 'Thông báo :', 'flash_message' => 'Có lỗi khi xác nhận đơn hàng, vui lòng check mail'];
        }else{
            $message = ['level' => 'danger', 'info' => 'Thông báo :', 'flash_message' => 'Có lỗi khi xác nhận đơn hàng, vui lòng check mail'];
        }
       
    }

    public function getChange()
    {
        if (Auth::check()) {
            return view('auth.passwords.reset');
        }
    }

    public function postChange(Request $request)
    {
    	$this->validate($request, 
			[
				'email' => 'required|e-mail',
				'password' => 'required|min:6',
				'password_confirmation' => 'same:password' 
			]);
		$email = $request->email;

		if ($email == Auth::user()->email) {
			$user = User::find(Auth::user()->id);
			$user->password = Hash::make($request->password);
			$user->save();
			$message = ['level' => 'success', 'flash_message' => 'đổi mật khẩu thành công'];
			return redirect()->route('admin.catepost.list');
		}else{
			$message = ['level' => 'danger', 'flash_message' => 'Mật khẩu không đúng'];
		}
		return redirect()->back()->with($message);
    }
}
