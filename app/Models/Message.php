<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $table = 'messages';

    protected $fillable = [
        'id',
        'message',
        'user_id_from',
        'user_id_to',
        'is_readed',
    ];


    public function user(){
        return $this->belongsTo(User::class);
    }


   

}
