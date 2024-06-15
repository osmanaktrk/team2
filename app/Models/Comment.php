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
        'extra_id',
        'created_at',

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



    public function extra(){
        return $this->hasOne(Extra::class);
    }

}
