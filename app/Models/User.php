<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */


    protected $table = 'users';
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
        return $this->hasMany(Post::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
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


    public function messages(){
        return $this->hasMany(Message::class);
    }


    public function covers(){
        return $this->hasMany(Cover::class);
    }




    public function readeds(){
        return $this->hasMany(Readed::class);
    }

 

    public function contacts(){
        return $this->hasMany(Contact::class);
    }


    public function extras(){
        return $this->hasMany(Extra::class);
    }

    public function UsertypeRequest(){
        return $this->hasMany(UsertypeRequest::class);
    }


}
