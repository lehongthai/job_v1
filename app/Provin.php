<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provin extends Model
{
    protected $table = 'provins';
    protected $fillable = ['id', 'name', 'compass', 'keywords', 'description', 'search'];
    public $timestamps = false;
}
