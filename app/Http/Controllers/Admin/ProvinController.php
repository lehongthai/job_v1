<?php 
namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Admin\AdminController;
use Illuminate\Http\Request;
use App\Provin;
class ProvinController extends AdminController {

	public function getList()
	{
		$data = Provin::get()->toArray();
		return view('admin.provin.list', compact('data'));
	}

	public function getAdd()
	{
		return view('admin.provin.add');
	}

	public function postAdd(Request $PostRequest)
	{		
		$this->validate($PostRequest, 
								[
								'txtCompass' => 'required',
								'txtName' => "required|unique:provins,name",
								],
								[
								'txtCompass.required' => 'Vui lòng chọn Miền',
								'txtName.required' => 'Vui lòng nhập tên',
								'txtName.unique' => 'Tên tỉnh đã tồn tại'
								]
			);

		$provin = new Provin;
		$provin->name = $PostRequest->txtName;
		$provin->compass = $PostRequest->txtCompass;
		$provin->keywords = $PostRequest->txtKeyword;
		$provin->description = $PostRequest->txtDescription;
		$provin->search = $PostRequest->txtSearch;


		if($provin->save()){
			return redirect()->route('admin.provin.list');
		}
	}

	
	public function getEdit($id=0)
	{
		$provin = Provin::find($id);
		if (isset($provin) && $provin != null && isset($provin)) {
			$data = $provin->toArray();
			return view('admin.provin.edit', compact('data'));
		}
		return redirect()->route('admin.provin.list');
	}
	public function postEdit(Request $request)
	{

		$id = $request->id;
		$this->validate($request, 
								[
								'txtCompass' => 'required',
								'txtName' => "required|unique:provins,name,$id",
								],
								[
								'txtCompass.required' => 'Vui lòng chọn Miền',
								'txtName.required' => 'Vui lòng nhập tên',
								'txtName.unique' => 'Tên viết đã tồn tại'
								]
			);
		
		$provin = Provin::find($id);
		if ($provin) {
			$provin->name = $request->txtName;
			$provin->compass = $request->txtCompass;
			$provin->keywords = $request->txtKeyword;
			$provin->description = $request->txtDescription;
			$provin->search = $request->txtSearch;
			if($provin->save()){
				return redirect()->route('admin.provin.list');
			}
		}
		
	}

	public function getDelete($id=0)
	{
		$provin = Provin::find($id);
		if (isset($provin) && $provin && $provin != null) {
			if ($provin->delete()) {
				return redirect()->route('admin.provin.list');
			}
		}
		
	}

	/*Edit Nhanh*/
	public function action(Request $request)
	{
		if ($request->action == 'edit') 
		{
			$provin = Provin::find($request->id);
			if ($provin) {
				$provin->search = $request->search;
				if($provin->save()){
					$response = array(
					  'code' => 'success'
					);
				}else{
					$response = array(
					  'code' => 'fail'
					);
				}
			}
		}
		echo json_encode($response);
	}

}
