<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    protected $table = 'jobs';
    protected $fillable = ['id', 'orders', 'name', 'alias', 'keywords', 'description', 'image_thumb', 'image_link', 'alt'];
    public $timestamps = false;
}
