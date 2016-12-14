<?php namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class AdminPostJob extends Model {

	protected $table = 'admin_post_jobs';

	protected $fillable = ['id', 'title', 'quanlity', 'sex', 'description', 'require', 'attribute', 'level', 'empirical', 'wage', 'min_kickback', 'max_kickback', 'type', 'probation_time', 'benefit', 'fields', 'provin', 'status', 'expired_at', 'create_date', 'employer_id', 'type_job'];

	public $timestamps = false;

}
