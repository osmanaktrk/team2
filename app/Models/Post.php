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
        'is_published',
        'extra_id',
        'created_at'
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

    public function comments(){
        return $this->hasMany(Comment::class);
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

    public function postDislikes(){
        return $this->hasMany(PostDislike::class);
    }


    public function extra(){
        return $this->hasOne(Extra::class);
    }


}
