<?php 
namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Admin\AdminController;
use Illuminate\Http\Request;
use App\InfoUser;
class InfoUserController extends AdminController {

	public function getListLevel()
	{
		$check = 'level';
		$data = InfoUser::where('alias', 'level')->get()->toArray();
		return view('admin.infouser.list', compact('data', 'check'));
	}
	public function getListEmpirical()
	{
		$check = 'empirical';
		$data = InfoUser::where('alias', 'empirical')->get()->toArray();
		return view('admin.infouser.list', compact('data', 'check'));
	}
	public function getListDiploma()
	{
		$check = 'diploma';
		$data = InfoUser::where('alias', 'diploma')->get()->toArray();
		return view('admin.infouser.list', compact('data', 'check'));
	}
	public function getListDiploma_wish()
	{
		$check = 'diploma_wish';
		$data = InfoUser::where('alias', 'diploma_wish')->get()->toArray();
		return view('admin.infouser.list', compact('data', 'check'));
	}
	public function getListExigency()
	{
		$check = 'exigency';
		$data = InfoUser::where('alias', 'exigency')->get()->toArray();
		return view('admin.infouser.list', compact('data', 'check'));
	}
	public function getListType()
	{
		$check = 'type';
		$data = InfoUser::where('alias', 'type')->get()->toArray();
		return view('admin.infouser.list', compact('data', 'check'));
	}

	public function getAdd()
	{
		return view('admin.infouser.add');
	}

	public function postAdd(Request $PostRequest)
	{		
		$this->validate($PostRequest, 
								[
								'txtName' => "required|unique:infocv_user,name",
								],
								[
								'txtName.required' => 'Vui lòng nhập tên',
								'txtName.unique' => 'Tên đã tồn tại'
								]
			);

		$info = new InfoUser;
		$info->name = $PostRequest->txtName;
		$info->orders = $PostRequest->txtOrder;
		$info->alias = $PostRequest->alias;


		if($info->save()){
			return redirect('admin/info/list/'.$PostRequest->alias);
		}
	}

	
	public function getEdit($id=0)
	{
		$info = InfoUser::find($id);
		if (isset($info) && $info != null && isset($info)) {
			$data = $info->toArray();
			return view('admin.infouser.edit', compact('data'));
		}
		return redirect()->route('admin.infouser.listlevel');
	}
	public function postEdit(Request $request)
	{

		$id = $request->id;
		$this->validate($request, 
								[
								'txtName' => "required|unique:infocv_user,name,$id",
								],
								[
								'txtName.required' => 'Vui lòng nhập tên',
								'txtName.unique' => 'Tên đã tồn tại'
								]
			);
		
		$info = InfoUser::find($id);
		if ($info) {
			$info->name = $request->txtName;
			$info->orders = $request->txtOrder;
			$info->alias = $request->alias;
			if($info->save()){
				return redirect('admin/info/list/'. $info->alias);
			}
		}
		
	}

	public function getDelete($id=0)
	{
		$info = InfoUser::find($id);
		if (isset($info) && $info && $info != null) {
			if ($info->delete()) {
				return redirect('admin/info/list/' . $info->alias);
			}
		}else{
			return redirect()->route('admin.infouser.listlevel');
		}
		
	}

	/*Edit Nhanh*/
	public function action(Request $request)
	{
		if ($request->action == 'edit') 
		{
			$info = InfoUser::find($request->id);
			if ($info) {
				$info->orders = $request->orders;
				if($info->save()){
					$response = array(
					  'code' => 'success',
					  'alias' => $info->alias
					);
				}else{
					$response = array(
					  'code' => 'fail',
					  'alias' => $info->alias
					);
				}
			}
		}
		echo json_encode($response);
	}

}
