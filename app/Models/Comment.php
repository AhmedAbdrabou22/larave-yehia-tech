<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $fillable = ['content','author','post_id'];
    protected $guard = ['id'];

    public function post(){
        return $this->belongsTo(Post::class);
    }
}
