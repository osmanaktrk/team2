<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class UserModel extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'firstname',
        'lastname',
        'username',
        'avatar',
        'education_type',
        'education_name',
        'education_year',
        'is_banned',
        'usertype',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function posts(){
        return $this->hasMany(PostModel::class);
    }

    public function comments(){
        return $this->hasMany(CommentModel::class);
    }

    public function favorites(){
        return $this->hasMany(FavoriteModel::class);
    }


    public function commentlikes(){
        return $this->hasMany(CommentLike::class);
    }


    public function postLikes(){
        return $this->hasMany(PostLike::class);
    }


    public function messages(){
        return $this->hasMany(MessageModel::class);
    }


    public function covers(){
        return $this->hasMany(CoverModel::class);
    }



    public function files(){
        return $this->hasMany(FileModel::class);
    }

    public function readeds(){
        return $this->hasMany(ReadedModel::class);
    }

 







}
