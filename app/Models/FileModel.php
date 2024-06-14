<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileModel extends Model
{
    use HasFactory;


    protected $tabel = 'files';

    protected $fillable = [
        'id',
        'file',
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
