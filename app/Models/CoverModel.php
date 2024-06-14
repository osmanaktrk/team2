<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoverModel extends Model
{
    use HasFactory;

    protected $table = 'covers';

    protected $fillable = [
        'id',
        'cover',
        'user_id',
        'post_id',
        'comment_id',
    ];

    public function user(){
        return $this->belongsTo(UserModel::class);
    }

    public function post(){
        return $this->belongsTo(PostModel::class);
    }


    public function comment(){
        return $this->belongsTo(CommentModel::class);
    }



}
