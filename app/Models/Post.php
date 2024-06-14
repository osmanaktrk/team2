<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = [
        'id',
        'title',
        'category_id',
        'user_id',
        'cover_id',
        'file_id',
        'is_published',
    ];




    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }


    public function cover(){
        return $this->hasOne(Cover::class);
    }

    public function file(){
        return $this->hasOne(File::class);
    }

    public function readeds(){
        return $this->hasMany(Readed::class);
    }

    public function favorites(){
        return $this->hasMany(Favorite::class);
    }

    public function postLikes(){
        return $this->hasMany(PostLike::class);
    }





}
