<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CvUser extends Model
{
    protected $table = 'cv_user';
    protected $fillable = ['id', 'user_id', 'title', 'level', 'empirical', 'diploma', 'diploma_wish', 'jobs_wish', 'wage', 'provin_wish', 'exigency', 'status', 'description', 'create_date', 'type'];
    public $timestamps = false;
}
