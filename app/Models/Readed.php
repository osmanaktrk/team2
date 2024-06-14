<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;

class Readed extends Model
{
    use HasFactory;

    protected $table = 'readeds';


    protected $fillable = [
        'id',
        'post_id',
        'user_id',

    ];


    public function user(){
        return $this->belongsTo(User::class);
    }


    public function post(){
        return $this->belongsTo(Post::class);
    }


}
