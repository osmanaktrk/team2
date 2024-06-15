<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;


    protected $table = 'comments';

    protected $fillable = [
        'id',
        'comment',
        'user_id',
        'post_id',
        'cover_id',

    ];



    public function user(){
        return $this->belongsTo(User::class);
    }


    public function post(){
        return $this->belongsTo(Post::class);
    }

    public function cover(){
        return $this->hasOne(Cover::class);
    }



    public function commentLikes(){
        return $this->hasMany(CommentLike::class);
    }

    public function commentDislikes(){
        return $this->hasMany(CommentDislike::class);
    }




}
