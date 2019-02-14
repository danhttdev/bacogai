<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    protected $table = 'course';

    protected $fillable = [
		'name','user_id','description','status'
    ];

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
