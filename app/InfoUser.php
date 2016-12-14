<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InfoUser extends Model
{
    protected $table = 'infocv_user';
    protected $fillable = ['id', 'orders', 'name', 'alias', 'note'];
    public $timestamps = false;
}
