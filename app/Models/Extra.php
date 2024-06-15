<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Extra extends Model
{
    use HasFactory;

    protected $table = 'extras';

    protected $fillable = [
        'id',
        'file',
        'name',
        'user_id',
        'post_id',
        'comment_id',
        'created_at',
    ];


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function post(){
        return $this->belongsTo(Post::class);
    }

    public function comment(){
        return $this->belongsTo(Comment::class);
    }



}
