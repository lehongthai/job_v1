<?php 
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Auth;

class AdminController extends Controller {

	public function __construct()
    {
        if (!Auth::check() || Auth::user()->level != 1) {
        	echo "Không có quyền vào trang này";die;
        }
    }
}
