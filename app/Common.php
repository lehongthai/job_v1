<?php 
namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Common extends Model {

	public static function getProvin()
	{
		return DB::table('provins')->get();
	}

	public static function getJob()
	{
		return DB::table('jobs')->select('id', 'name')->get();
	}

	public static function getLevel()
	{
		return DB::table('infocv_user')->where('alias', 'level')->get();
	}

	public static function getEmpirical()
	{
		return DB::table('infocv_user')->where('alias', 'empirical')->get();
	}

	public static function getDiploma()
	{
		return DB::table('infocv_user')->where('alias', 'diploma')->get();
	}

	public static function getDiplomaWish()
	{
		return DB::table('infocv_user')->where('alias', 'diploma_wish')->get();
	}

	public static function getExigency()
	{
		return DB::table('infocv_user')->where('alias', 'exigency')->get();
	}
	public static function getProbationTime()
	{
		return DB::table('infocv_user')->where('alias', 'probation_time')->get();
	}

	public static function getWage()
	{
		return DB::table('infocv_user')->where('alias', 'wage')->get();
	}

	public static function Attribute()
	{
		return DB::table('infocv_user')->where('alias', 'attribute')->get();
	}

	public static function getType()
	{
		return DB::table('type')->get();
	}
	public static function getLoaiTn()
	{
		return DB::table('infocv_user')->where('alias', 'loai_tn')->get();
	}
	public static function getLanguage()
	{
		return DB::table('infocv_user')->where('alias', 'language')->get();
	}
	public static function getLanguageLevel()
	{
		return DB::table('infocv_user')->where('alias', 'language_level')->get();
	}

	public static function getNameById($id)
	{
		return DB::table('infocv_user')->where('id', $id)->first()->name;
	}

	public static function getTypeLanguageAndTech($value)
	{
		$result = 'Không Xác Định';
		if ($value == 1) {
			$result = 'Giỏi';
		}elseif($value == 2){
			$result = 'Khá';
		}elseif($value == 3){
			$result = 'Trung Bình';
		}elseif($value == 4){
			$result = 'Kém';
		}

		return $result;
	}
}
