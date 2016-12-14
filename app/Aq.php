<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aq extends Model
{
    protected $table = 'aq';
    protected $fillable = ['id', 'orders', 'answer', 'question', 'keywords', 'description'];
    public $timestamps = false;
}
