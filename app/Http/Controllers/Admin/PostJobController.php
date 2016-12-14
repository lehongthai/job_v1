<?php 
namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\AdminPostJob,App\Common;
class PostJobController extends AdminController {

	public function getList()
	{
		$data = AdminPostJob::get()->toArray();
		return view('admin.admin_post_job.list', compact('data'));
	}

	public function getAdd()
	{
		$listJob = Common::getJob();
		$listProvin = Common::getProvin();
		$listLevel = Common::getLevel();
		$listEmpirical = Common::getEmpirical();
		$listDiploma = Common::getDiploma();
		$listExigency = Common::getExigency();
		$listType = Common::getType();
		$listProbationTime = Common::getProbationTime();
		$listWage = Common::getWage();
		$listAttribute = Common::Attribute();
		return view('admin.admin_post_job.add', compact('listJob','listProvin','listLevel','listEmpirical','listDiploma','listExigency','listType','listProbationTime','listWage','listAttribute'));
	}

	public function postAdd(Request $PostRequest)
	{	

		$job = new AdminPostJob;
		$job->title = $PostRequest->title;
		$job->quanlity = $PostRequest->quanlity;
		if (isset($PostRequest->job) && $PostRequest->job != NULL) {
			$job->fields = implode(',', $PostRequest->job);
		}
		if (isset($PostRequest->job) && $PostRequest->job != NULL) {
			$job->provin = implode(',', $PostRequest->provin);
		}

		$job->description = $PostRequest->description;
		$job->sex = $PostRequest->sex;
		$job->require = $PostRequest->require;
		$job->attribute = $PostRequest->attribute;
		$job->level = $PostRequest->level;
		$job->empirical = $PostRequest->empirical;
		$job->wage = $PostRequest->wage;
		$job->min_kickback = $PostRequest->min_kickback;
		$job->max_kickback = $PostRequest->max_kickback;
		$job->type = $PostRequest->type;
		$job->probation_time = $PostRequest->probation_time;
		$job->benefit = $PostRequest->benefit;
		$job->status = $PostRequest->status;
		$job->expired_at = $PostRequest->expired_at;
		$job->type_job = $PostRequest->type_job;
		$job->create_date = \Carbon\Carbon::now();
		$job->employer_id = 2;
		

		if($job->save()){
			return redirect()->route('admin.postjob.list');
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
