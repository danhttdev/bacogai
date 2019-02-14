<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usercourse extends Model
{
    //
    protected $table = 'user_course';

    protected $fillable = [
		'id_user','id_course',
    ];

}
