<?php

namespace App\Candidate;

use Illuminate\Database\Eloquent\Model;

class DetailDiploma extends Model
{
    protected $table = 'detail_cv_diploma';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'candidate_id', 'language', 'language_level', 'listen', 'speak', 'read', 'write', 'ms_word', 'ms_excel', 'ms_power_point', 'ms_outlook', 'others', 'create_date'
    ];

    public $timestamps = false;
}
