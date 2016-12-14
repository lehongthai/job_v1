<?php 
namespace App\Http\Controllers;

use Validator;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Common, App\Candidate\CvUser, App\Candidate\DetailCompany, App\Candidate\DetailDiploma;
use Auth, Mail;

class UserController extends Controller {
	public function getResume()
	{
		$listJob = Common::getJob();
		$listProvin = Common::getProvin();
		$listLevel = Common::getLevel();
		$listEmpirical = Common::getEmpirical();
		$listDiploma = Common::getDiploma();
		$listDiplomaWish = Common::getDiplomaWish();
		$listExigency = Common::getExigency();
		$listType = Common::getType();
		return view('page.content.candidate.post_resume2', compact('listJob', 'listProvin', 'listLevel', 'listEmpirical', 'listDiploma', 'listDiplomaWish', 'listExigency', 'listType'));
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
		 				'type' 			=> 'required|exists:type,id',
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
		 				'type.exists'			=> 'KIỂU LÀM VIỆC không đúng',
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
		$cv->user_id = /*Auth::user()->id*/2;

		if($cv->save()){
			$message = ['level' => 'success', 'flash_message' => 'Tạo thành công hồ sơ '.$request->title];
			return redirect('/')->with($message);
		}


	}

	public function getDetailResume($id=0)
	{
		$listLevel = Common::getLevel();
		$listLoaiTn = Common::getLoaiTn();
		$listLanguage = Common::getLanguage();
		$listLanguageLevel = Common::getLanguageLevel();
		return view('page.content.candidate.post_resume_detail', compact('listLevel', 'listLoaiTn', 'listLanguage', 'listLanguageLevel'));
	}

	public function postDetailResume(Request $request, $id=0)
	{
		$this->validate($request, 
						[
						'intro' => 'required|string|max:200|min:10',
						'company' => 'required|string|max:100|min:1',
						'position' => 'required',
						'wage' => 'numeric',
						'description_job' => 'required|string|max:1000|min:10',
						'achieve' => 'string|max:1000',
						'level' => 'exists:infocv_user,id,alias,level',
						'school_name' => 'required',
						'description_diploma' => 'required',
						'loai_tn' => 'exists:infocv_user,id,alias,loai_tn',
						'language' => 'exists:infocv_user,id,alias,language',
						'language_level' => 'exists:infocv_user,id,alias,language_level',
						],
						[
						'intro.required' => 'Vui lòng nhập phần giới thiệu của ứng viên',
						'intro.max'	=> 'Phần giới thiệu không được nhập quá dài',
						'intro.min'	=> 'Phần giới thiệu không được phép quá ngắn',
						'company.required' => 'Vui lòng nhập tên công ty',
						'company.max'	=> 'Tên công ty không được nhập quá dài',
						'company.min'	=> 'Tên công ty không được phép quá ngắn',
						'position.required' => 'Vui lòng nhập chức vụ ở công ty',
						'wage.numeric' => 'Mức lương phải nhập bằng chữ số',
						'description_job.required' => 'Vui lòng nhập phần mô tả công việc',
						'description_job.max'	=> 'Mô tả công việc không được nhập quá dài',
						'description_job.min'	=> 'Phần mô tả công việc không được phép quá ngắn',
						'achieve.max'	=> 'Thành tích đạt được không được nhập quá dài',
		 				'level.exists'			=> 'Trình độ không đúng',
		 				'school_name.required'		=> 'Vui lòng nhập đơn vị đào tạo',
		 				'description_diploma.required'		=> 'Vui lòng nhập chuyên ngành đào tạo',
		 				'loai_tn.required'		=> 'Vui lòng nhập loại tốt nghiệp',
		 				'loai_tn.exists'			=> 'Loại tốt nghiệp không đúng',
		 				'language.exists'			=> 'Ngôn ngữ không đúng',
		 				'language_level.exists'			=> 'Trình độ ngôn ngữ không đúng',
						]);


		/*insert data company*/
		$detailCompany = new DetailCompany;
		$detailCompany->candidate_id = /*Auth::user()->id*/2;
		$detailCompany->intro = $request->intro;
		$detailCompany->company = $request->company;
		$detailCompany->position = $request->position;
		$detailCompany->start_time = $request->start_month . '/' . $request->start_year;
		$detailCompany->end_time = $request->end_month . '/' . $request->end_year;
		$detailCompany->wage = $request->wage;
		$detailCompany->description_job = $request->description_job;
		$detailCompany->achieve = $request->achieve;
		$detailCompany->level = $request->level;
		$detailCompany->school_name = $request->school_name;
		$detailCompany->start_time_school = $request->start_time_school;
		$detailCompany->end_time_school = $request->end_time_school;
		$detailCompany->description_diploma = $request->description_diploma;
		$detailCompany->loai_tn = $request->loai_tn;
		$detailCompany->image_tn = $request->image_tn;
		$detailCompany->create_date = \Carbon\Carbon::now();


		/*insert data Diploma*/
		$detailDiploma = new DetailDiploma;
		$detailDiploma->candidate_id = /*Auth::user()->id*/2;
		$detailDiploma->language = $request->language;
		$detailDiploma->language_level = $request->language_level;
		$detailDiploma->listen = $request->listen_language;
		$detailDiploma->speak = $request->speak_language;
		$detailDiploma->read = $request->read_language;
		$detailDiploma->write = $request->write_language;
		$detailDiploma->ms_word = $request->ms_word;
		$detailDiploma->ms_excel = $request->ms_excel;
		$detailDiploma->ms_power_point = $request->ms_power_point;
		$detailDiploma->ms_outlook = $request->ms_outlook;
		$detailDiploma->others = $request->others;
		$detailDiploma->create_date = \Carbon\Carbon::now();

		if ($detailCompany->save() && $detailDiploma->save()) {
			$message = ['level' => 'success', 'flash_message' => 'Tạo thành công hồ sơ '];
			return redirect('/')->with($message);
		}

	}

	public function getViewDetailResume()
	{
		$detailDiploma = DetailDiploma::where('candidate_id', 2)->limit(1)->first();
		$detailCompany = DetailCompany::where('candidate_id', 2)->limit(1)->first();
		$infoCv = CvUser::where('user_id', 2)->limit(1)->orderBy('id')->first();

		return view('page.content.candidate.view_resume', compact('detailDiploma', 'detailCompany', 'infoCv'));
	}
}
