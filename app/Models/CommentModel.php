<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentModel extends Model
{
    use HasFactory;


    protected $table = 'comments';

    protected $fillable = [
        'id',
        'comment',
        'user_id',
        'post_id',
        'cover_id',
        'file_id',

    ];



    public function user(){
        return $this->belongsTo(UserModel::class);
    }


    public function post(){
        return $this->belongsTo(PostModel::class);
    }

    public function cover(){
        return $this->hasOne(CoverModel::class);
    }


    public function file(){
        return $this->hasOne(FileModel::class);
    }

    public function commentlikes(){
        return $this->hasMany(CommentLike::class);
    }




}
