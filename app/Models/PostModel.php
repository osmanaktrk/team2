<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostModel extends Model
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
        return $this->belongsTo(CategoryModel::class);
    }

    public function user(){
        return $this->belongsTo(UserModel::class);
    }


    public function cover(){
        return $this->hasOne(CoverModel::class);
    }

    public function file(){
        return $this->hasOne(FileModel::class);
    }

    public function readeds(){
        return $this->hasMany(ReadedModel::class);
    }

    public function favorites(){
        return $this->hasMany(FavoriteModel::class);
    }

    public function postLikes(){
        return $this->hasMany(PostLike::class);
    }





}
