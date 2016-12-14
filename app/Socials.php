<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Socials extends Model
{
    protected $table = 'socials';
    protected $fillable = ['id', 'social_id', 'provider', '_token', 'avatar', 'create_at', 'user_id'];

    public function user()
    {
    	return $this->belongTo(User::class);
    }
}
