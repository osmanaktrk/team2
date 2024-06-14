<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FavoriteModel extends Model
{
    use HasFactory;

    protected $table = 'favorites';

    protected $fillable = [
        'id',
        'user_id',
        'post_id',
    ];

    public function user(){
        return $this->belongsTo(UserModel::class);
    }

    public function post(){
        return $this->belongsTo(PostModel::class);
    }


}
