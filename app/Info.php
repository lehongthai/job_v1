<?php 
namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Info extends Model {

	protected $table = 'abouts';

	protected $fillable = ['id', 'meta_key', 'meta_desc', 'image', 'title'];

	public $timestamps = false;
	public static function getSider()
	{
		return DB::table('images')->take(15)->get();
	}

	public static function getFooter()
	{
		return DB::table('shop')->take(15)->first();
	}

	public static function getMenu()
	{
		return DB::table('category_post')->orderBy('order')->take(15)->get();
	}

	public static function getSeo()
	{
		return DB::table('abouts')->first();
	}

}
