<?php 
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Image;
class ImageController extends Controller {

	public function getList()
	{
		$data = Image::select('id', 'image_thumb', 'content')->get();
		return view('admin.images.list', compact('data'));
	}

	public function getAdd()
	{
		return view('admin.images.add', compact('parent'));
	}

	public function postAdd(Request $request)
	{
		$image_arr = explode('/', $request->images);
		$count = count($image_arr);	

		$image = new Image;
		$image->content = $request->txtTitle;
		$image->link = $request->txtLink;
		$image->name = $request->txtName;
		$image->image_thumb = URL('').'/public/upload/_thumbs/Files/'.$image_arr[$count-1];
		$image->image_link = $request->images;
		if($image->save()){
			$message = ['level' => 'success', 'flash_message' => 'Tạo thành công Imagegory '.$request->txtTitle];
			return redirect()->route('admin.image.list')->with($message);
		}
	}

	public function getDelete($id)
	{
			$image = Image::find($id);
			if ($image) {
				if ($image->delete()) {
					$notic = ['level' => 'danger', 'flash_message' => 'Xóa thành công '];
				}else{
					$notic = ['level' => 'wraning', 'flash_message' => 'Xóa không thành công '];
				}
			}else{
				$notic = ['level' => 'warning', 'flash_message' => 'Không có thông tin'];
			}
		return redirect()->route('admin.image.list')->with($notic);
	}

	public function getEdit($id=0)
	{
		$data = Image::find($id);
		if (isset($data) && $data != null && isset($id)) {
			$data = $data->toArray();
			return view('admin.images.edit', compact('data'));
		}
		$notic = ['level' => 'danger', 'flash_message' => 'Không có thông tin'];
		return redirect()->route('admin.image.list')->with($notic);
	}
	public function postEdit(Request $request)
	{
		$id = $request->id;
		$image_arr = explode('/', $request->images);
		$count = count($image_arr);	
		$image = Image::find($id);
		if ($image) {
			$image->content = $request->txtTitle;
			$image->link = $request->txtLink;
			$image->name = $request->txtName;
			$image->image_thumb = URL('').'/public/upload/_thumbs/Files/'.$image_arr[$count-1];
			$image->image_link = $request->images;
			if($image->save()){
				$message = ['level' => 'success', 'flash_message' => 'Cập nhật thành công'];
			}else{
				$message = ['level' => 'danger', 'flash_message' => 'Cập nhật thất bại'];
			}
		}else{
			$message = ['level' => 'warning', 'flash_message' => 'Không có thông tin'];
		}
		
		return redirect()->route('admin.image.list')->with($message);
	}

}
