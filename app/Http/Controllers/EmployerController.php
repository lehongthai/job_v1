<?php 
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Common, App\CvUser;
use Auth, Mail;

class EmployerController extends Controller {
	public function getPostJob()
	{
		/*$listJob = Common::getJob();
		$listProvin = Common::getProvin();
		$listLevel = Common::getLevel();
		$listEmpirical = Common::getEmpirical();
		$listDiploma = Common::getDiploma();
		$listDiplomaWish = Common::getDiplomaWish();
		$listExigency = Common::getExigency();
		$listType = Common::getType();*/
		return view('page.content.employer.post_job');
	}

	public function postResume(Request $request)
	{
		$this->validate($request,
		 				[
		 				'title' 		=> 'required',
		 				'wage' 			=> 'numeric',
		 				'level' 		=> 'required|exists:infocv_user,id,alias,level',
		 				'empirical' 	=> 'required|exists:infocv_user,id,alias,empirical',
		 				'diploma' 		=> 'required|exists:infocv_user,id,alias,diploma',
		 				'diploma_wish' 	=> 'required|exists:infocv_user,id,alias,diploma_wish',
		 				'job' 			=> 'required|exists:jobs,id',
		 				'exigency' 		=> 'required|exists:infocv_user,id,alias,exigency',
		 				'type' 			=> 'required|exists:infocv_user,id,alias,type',
		 				'provin' 		=> 'required|exists:provins,id',
		 				],
		 				[
		 				'title.required' 		=> 'TÊN HỒ SƠ không được để trống',
		 				'wage.numeric' 			=> 'TIỀN LƯƠNG phải là số',
		 				'level.required'		=> 'TRÌNH ĐỘ CAO NHẤT không được để trống',
		 				'level.exists'			=> 'TRÌNH ĐỘ CAO NHẤT không đúng',
		 				'empirical.required'	=> 'SỐ NĂM KINH NGHIỆM không được để trống',
		 				'empirical.exists'		=> 'SỐ NĂM KINH NGHIỆM không đúng',
		 				'diploma.required'		=> 'CẤP BẬC HIỆN TẠI không được để trống',
		 				'diploma.exists'		=> 'CẤP BẬC HIỆN TẠI không đúng',
		 				'diploma_wish.required'	=> 'CẤP BẬC MONG MUỐN không được để trống',
		 				'diploma_wish.exists'	=> 'CẤP BẬC MONG MUỐN không đúng',
		 				'exigency.required'		=> 'NHU CẦU LÀM VIỆC không được để trống',
		 				'exigency.exists'		=> 'NHU CẦU LÀM VIỆC không đúng',
		 				'type.required'			=> 'KIỂU LÀM VIỆC không được để trống',
		 				'type.exists'			=> 'KIỂU LÀM VIỆC MUỐN không đúng',
		 				'job.required'			=> 'NGÀNH NGHỀ MONG MUỐN không được để trống',
		 				'job.exists'			=> 'NGÀNH NGHỀ MONG MUỐN không đúng',
		 				'provin.required'		=> 'NƠI LÀM VIỆC MONG MUỐN không được để trống',
		 				'provin.exists'			=> 'NƠI LÀM VIỆC MONG MUỐN không đúng',
		 				]);

		/*Thêm Dữ Liệu*/
		$cv = new CvUser;
		$cv->title = $request->title;
		$cv->wage = $request->wage;
		$cv->level = $request->level;
		$cv->empirical = $request->empirical;
		$cv->diploma = $request->diploma;
		$cv->diploma_wish = $request->diploma_wish;
		$cv->exigency = $request->exigency;

		if (isset($request->job_wish) && $request->job_wish != NULL) {
			$cv->job_wish = implode(',', $request->job_wish);
		}

		if (isset($request->provin_wish) && $request->provin_wish != NULL) {
			$cv->provin_wish = implode(',', $request->provin_wish);
		}
		if (isset($request->type) && $request->type != NULL) {
			$cv->type = implode(',', $request->type);
		}

		$cv->status = $request->status;
		$cv->description = $request->description;
		$cv->user_id = Auth::user()->id;

		if($cv->save()){
			$message = ['level' => 'success', 'flash_message' => 'Tạo thành công hồ sơ '.$request->title];
			return redirect()->route('admin.post.list')->with($message);
		}


	}

	public function getDetailResume($id=0)
	{
		return view('page.content.post_resume_detail');
	}
}
