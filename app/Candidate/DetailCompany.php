<?php

namespace App\Candidate;

use Illuminate\Database\Eloquent\Model;

class DetailCompany extends Model
{
    protected $table = 'detail_cv';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'candidate_id', 'intro', 'company', 'position', 'start_time', 'end_time', 'wage', 'description_job', 'achieve', 'level', 'school_name', 'start_time_school', 'end_time_school', 'description_diploma', 'loai_tn', 'image_tn', 'create_date'
    ];

    public $timestamps = false;
}
