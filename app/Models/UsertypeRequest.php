<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsertypeRequest extends Model
{
    use HasFactory;

    protected $table = 'usertype_requests';

    protected $fillable = ['id', 'user_id', 'request'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
