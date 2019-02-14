<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $table = 'comment';

    protected $fillable = [
		'id_user','id_course','comment'
    ];

    public function comments()
    {
        return $this->hasMany('App\CommentFilm');
    }
}
