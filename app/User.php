<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable,Followable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username','name', 'email', 'password','avatar'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function timeline()
    {
        $friends = $this->follows()->pluck('id');
        
        return Tweet::whereIn('user_id', $friends)
        ->orWhere('user_id', $this->id)
        ->WithLikes()
        ->latest()->paginate(50);
    }

    public function getAvatarAttribute($value)
    {
        if($value)
        {
        return asset('storage/'.$value);
        }
        return asset('/images/default-avatar.png');
    }
   

    public function tweets(){
        return $this->hasMany(Tweet::class)->latest();
    }
    public function likes()
    {
        return $this->hasMany(Like::class);
    }

}
