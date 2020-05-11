<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    public function show(User $user)
    {
        return view('profiles.index', [
            'user' => $user,
            'tweets' => $user->tweets()->WithLikes()->paginate(50)
        ]);
    }
    public function edit(User $user)
    {
        return view('profiles.edit', compact('user'));
    }
    public function update(User $user)
    {
        
        $attributes = request()->validate([
            'username' => ['string','required','max:255','alpha_dash', Rule::unique('users')->ignore($user)],
            
            'name' => ['string','required','max:255'],
            'avatar' => [ 'file'],
            'email' => ['string','required','max:255','email'],
            'password' => ['string','required','min:8','max:255','confirmed']
            
        ]);
        if(request('avatar')){
            $attributes['avatar'] = request('avatar')->store('avatars');
        }
        
       $attributes['password'] = Hash::make($attributes['password']);
        $user->update($attributes);
        return redirect('/profiles/'.$user->username );
    }
}
