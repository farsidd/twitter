<?php

namespace App\Http\Controllers;

use App\Tweet;
use Illuminate\Http\Request;

class TweetController extends Controller
{
    public function store()
    {
        $attribue = request()->validate(['body' => 'required|max:255']);
        Tweet::create([
            'user_id' =>auth()->id(),
            'body' => $attribue['body']
        ]);
        return redirect('/home');
    }

    public function index()
    {
      
       
        return view('tweets.index', [
            'tweets' => auth()->user()->timeline(),
            
        ]);
    }
}
