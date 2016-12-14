<?php 
namespace App\Http\Controllers;
use DB, Mail, Auth;
use Request, Session;
use Illuminate\Http\Request as ValidateRequest;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index(ValidateRequest $request)
	{
		return view('page.content.home');
	}

	public function about()
	{
		$about = DB::table('posts')->where('cate_id', 7)->select('id', 'intro', 'image_link', 'title', 'content')->first();
		return view('page.content.about', compact('about'));
	}

	public function contact()
	{
		$about = DB::table('shop')->take(15)->first();
		return view('page.content.contact', compact('about'));
	}

	public function postContact(ValidateRequest $emailRequest)
	{
		$this->validate($emailRequest, 
				[
				 'name' => 'required',
				 'email' => 'required|e-mail',
				 'message' => 'required'
				], 
				[
				'name.required' => 'Bạn chưa nhập tên',
				'email.required' => 'Bạn chưa nhập email',
				'message.required' => 'Bạn chưa nhập nội dung',
				'email.e_mail' => 'Đại chỉ mail sai',
				]);
		$data = [
			'name' => $emailRequest->input('name'),
			'email' => $emailRequest->input('email'),
			'message' => $emailRequest->input('message'),
			];
		Mail::send('emails.mail_body',['data' => $data], function ($message) use ($data) {
		    $message->from($data['email'], $data['name']);
		    $message->sender($data['email'], $data['name']);
		
		    $message->to('teamchich26@gmail.com', 'Admin');
		
		    $message->replyTo($data['email'], $data['name']);
		
		    $message->subject('Liên Hệ');
		
		});

		echo "<script>
			alert('Cảm ơn bạn, chúng tối đã nhận được mail và sẽ liên hệ lại với bạn sớm nhất !!');
			window.location = '".url('/')."'
		</script>";
	}

	public function project()
	{
		$listProject = DB::table('posts')->where('cate_id', '<>', 7)->select('id', 'intro', 'image_link', 'title', 'alias')->get();
		return view('page.content.project', compact('listProject'));
	}

	public function detail($alias)
	{
		$project = DB::table('posts')->where('cate_id', '<>', 7)->where('alias', $alias)->first();
		return view('page.content.detail', compact('project'));
	}

	public function erors()
	{
		echo "string";
	}
	
}
