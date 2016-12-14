<?php 
namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Jobs;
class JobController extends AdminController {

	public function getList()
	{
		$data = Jobs::get()->toArray();
		return view('admin.job.list', compact('data'));
	}

	public function getAdd()
	{
		return view('admin.job.add');
	}

	public function postAdd(Request $PostRequest)
	{
		$this->validate($PostRequest, 
								[
								'txtName' 		=> "required|unique:jobs,name",
								'image_link' 	=> 'required',
								'txtOrder'		=> 'numeric',
								'txtUrl'  		=> 'unique:jobs,alias'
								],
								[
								'txtName.required' 	=> 'Vui nhập tên công việc',
								'txtName.exists' 	=> 'Tên công việc đã tồn tại',
								'txtUrl.exists' 	=> 'Đường dẫn đã tồn tại',
								'image_link.required' => 'Vui lòng nhập ảnh hiển thị',
								'txtOrder.numeric' 	=> 'Vị trí phải nhập số'
								]
			);		

		$image_arr = explode('/', $PostRequest->image_link);
		$count = count($image_arr);	

		$job = new Jobs;
		$job->name = $PostRequest->txtName;
		if (isset($PostRequest->txtUrl) && $PostRequest->txtUrl != NULL) {
			$job->alias = $PostRequest->txtUrl;
		}else{
			$job->alias = convert_vi_to_en($PostRequest->txtName);
		}

		$job->keywords = $PostRequest->txtKeyword;
		$job->description = $PostRequest->txtDescription;
		$job->image_link = $PostRequest->image_link;
		$job->alt = $PostRequest->txtAltImage;
		$job->orders = $PostRequest->txtOrder;
		$job->image_thumb = URL('').'/public/upload/_thumbs/Files/'.$image_arr[$count-1];

		if($job->save()){
			return redirect()->route('admin.job.list');
		}
	}

	
	public function getEdit($id=0)
	{
		$job = Jobs::find($id);
		if (isset($job) && $job != null && isset($job)) {
			$data = $job->toArray();
			return view('admin.job.edit', compact('data'));
		}
		return redirect()->route('admin.job.list');
	}
	public function postEdit(Request $request)
	{

		$id = $request->id;
		$this->validate($request, 
								[
								'txtName' 		=> "required|unique:jobs,name, $id",
								'image_link' 	=> 'required',
								'txtOrder'		=> 'numeric',
								'txtUrl'  		=> "unique:jobs,alias,$id"
								],
								[
								'txtName.required' 	=> 'Vui nhập tên công việc',
								'txtName.exists' 	=> 'Tên công việc đã tồn tại',
								'txtUrl.exists' 	=> 'Đường dẫn đã tồn tại',
								'image_link.required' => 'Vui lòng nhập ảnh hiển thị',
								'txtOrder.numeric' 	=> 'Vị trí phải nhập số'
								]
			);
		
		$job = Jobs::find($id);
		if ($job) {
			$image_arr = explode('/', $request->image_link);
			$count = count($image_arr);	
			$job->name = $request->txtName;
			if (isset($request->txtUrl) && $request->txtUrl != NULL) {
				$job->alias = $request->txtUrl;
			}else{
				$job->alias = convert_vi_to_en($request->txtName);
			}

			$job->keywords = $request->txtKeyword;
			$job->description = $request->txtDescription;
			$job->image_link = $request->image_link;
			$job->alt = $request->txtAltImage;
			$job->orders = $request->txtOrder;
			$job->image_thumb = URL('').'/public/upload/_thumbs/Files/'.$image_arr[$count-1];
			if($job->save()){
				return redirect()->route('admin.job.list');
			}
		}
		
		return redirect()->route('admin.post.list')->with($message);
	}

	public function getDelete($id=0)
	{
		$job = Jobs::find($id);
		if (isset($job) && $job && $job != null) {
			if ($job->delete()) {
				return redirect()->route('admin.job.list');
			}
		}
		return redirect()->route('admin.job.list');
	}



}
