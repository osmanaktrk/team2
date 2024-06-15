<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentLike extends Model
{
    use HasFactory;

    protected $table = 'comment_likes';

    protected $fillable = [
        'id',
        'user_id',
        'comment_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }



    public function comment(){
        return $this->belongsTo(Comment::class);
    }


}
