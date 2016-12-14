<?php 
namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model {

	protected $table = 'images';

	protected $fillable = ['id', 'image_link', 'alt', 'text'];

	public $timestamps = false;

}
