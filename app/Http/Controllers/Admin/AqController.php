<?php 
namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Aq;
class AqController extends AdminController {

	public function getList()
	{
		$data = Aq::get()->toArray();
		return view('admin.a&q.list', compact('data'));
	}

	public function getAdd()
	{
		return view('admin.a&q.add');
	}

	public function postAdd(Request $PostRequest)
	{
		$this->validate($PostRequest, 
								[
								'txtAnswer' 		=> "required|unique:aq,answer",
								'txtQuestion' 		=> 'required',
								'txtOrder'			=> 'numeric',
								],
								[
								'txtAnswer.required' 	=> 'Vui nhập câu hỏi',
								'txtQuestion.required' 	=> 'Vui nhập câu trả lời',
								'txtAnswer.exists' 	=> 'Câu hỏi đã tồn tại',
								'txtOrder.numeric' 	=> 'Vị trí phải nhập số'
								]
			);		

		$aq = new Aq;
		$aq->answer = $PostRequest->txtAnswer;
		$aq->keywords = $PostRequest->txtKeyword;
		$aq->description = $PostRequest->txtDescription;
		$aq->question = $PostRequest->txtQuestion;
		$aq->orders = $PostRequest->txtOrder;

		if($aq->save()){
			return redirect()->route('admin.aq.list');
		}
	}

	
	public function getEdit($id=0)
	{
		$aq = Aq::find($id);
		if (isset($aq) && $aq != null && isset($aq)) {
			$data = $aq->toArray();
			return view('admin.a&q.edit', compact('data'));
		}
		return redirect()->route('admin.aq.list');
	}
	public function postEdit(Request $request)
	{

		$id = $request->id;
		$this->validate($request, 
								[
								'txtAnswer' 		=> "required|unique:aq,answer, $id",
								'txtQuestion' 		=> 'required',
								'txtOrder'			=> 'numeric',
								],
								[
								'txtAnswer.required' 	=> 'Vui nhập câu hỏi',
								'txtQuestion.required' 	=> 'Vui nhập câu trả lời',
								'txtAnswer.exists' 	=> 'Câu hỏi đã tồn tại',
								'txtOrder.numeric' 	=> 'Vị trí phải nhập số'
								]
			);
		
		$aq = Aq::find($id);
		if ($aq) {
			$aq->answer = $request->txtAnswer;
			$aq->keywords = $request->txtKeyword;
			$aq->description = $request->txtDescription;
			$aq->question = $request->txtQuestion;
			$aq->orders = $request->txtOrder;
			if($aq->save()){
				return redirect()->route('admin.aq.list');
			}
		}
		
		return redirect()->route('admin.aq.list');
	}

	public function getDelete($id=0)
	{
		$aq = Aq::find($id);
		if (isset($aq) && $aq && $aq != null) {
			if ($aq->delete()) {
				return redirect()->route('admin.aq.list');
			}
		}
		return redirect()->route('admin.aq.list');
	}

}
