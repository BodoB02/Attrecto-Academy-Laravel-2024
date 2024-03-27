<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Tymon\JWTAuth\Contracts\JWTSubject;
<<<<<<< HEAD
use Attribute;
=======
>>>>>>> 7ee5ed741d13135d4182a9968e8f5dd3486b503a

class User extends Authenticatable implements JWTSubject
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
<<<<<<< HEAD
=======

>>>>>>> 7ee5ed741d13135d4182a9968e8f5dd3486b503a
    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
<<<<<<< HEAD
    public function courses(){
        return $this->hasMany(Course::class,'author_id','id');
    }
    public function TitleWithAuthor():Attribute {
        return new Attribute(
            fn($value) => this->author ? $this->title . '/' . $this->author->name: 'Ismeretlen',
            fn($value) => $value,
=======

    /**
     * @return HasOne
     */
    public function author(): HasOne
    {
        return $this->hasOne(
            User::class,
            'id',
            'author_id'
>>>>>>> 7ee5ed741d13135d4182a9968e8f5dd3486b503a
        );
    }
}
