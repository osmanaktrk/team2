<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;

    protected $table = 'topics';

    protected $fillable = ['id', 'category', 'user_id', 'title', 'created_at', 'updated_at'];
    
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    
    public function posts()
    {
        return $this->hasMany('App\Models\Post');
    }
    
    
}
