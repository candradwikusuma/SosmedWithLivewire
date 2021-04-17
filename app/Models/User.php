<?php

namespace App\Models;

use App\Models\Timeline\{Status,Comment};
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'username',
        'hash',
        'picture',
        'description'

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function avatar($size=150){

            return $this->picture? "/storage/{$this->picture}" : "https://www.gravatar.com/avatar/" . md5( strtolower( trim( $this->email ) ) ) . "&s=" . $size;
    
    }

    public function usernameOrHash()
    {
        return $this->username ?? $this->hash;
    }
    public function follow(User $user){
        return $this->follows()->save($user);
    }
     public function unfollow(User $user){
        return $this->follows()->detach($user);
    }
    public function following(User $user){
        return $this->follows()->find($user);
    }
    public function follows(){
        return $this->belongsToMany(User::class,'follows','user_id','following_user_id')->withTimestamps();
    }
     public function followers(){
        return $this->belongsToMany(User::class,'follows','following_user_id','user_id')->withTimestamps();
    }
    public function statuses(){
        return $this->hasMany(Status::class);
    }
     public function comments(){
        return $this->hasMany(Comment::class);
    }
}
