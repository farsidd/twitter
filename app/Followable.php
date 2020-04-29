<?php

namespace App;

trait Followable
{
    public function follows()
    {
        return $this->belongsToMany(User::class,'follows','user_id','following_user_id');
    }
    public function follow(User $user)
    {
        $this->follows()->save($user);
    }
    public function unfollow(User $user)
    {
        $this->follows()->detach($user);
    }
    public function isFollowing(User $user)
    {
        return $this->follows()->where('following_user_id', $user->id)->exists();
    }
    

    public function toggleFollowUnFollow(User $user)
    {
        if($this->isFollowing($user))
        {
            return $this->unfollow($user);
        }
        return $this->follow($user);
    }

    
}





?>