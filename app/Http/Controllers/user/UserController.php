<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Comment;
use Carbon\Carbon;
use Auth;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    public function dashboard(){
        return view('user.dashboard');
    }
    public function AddComment(Request $request)
    {
        // rules validation 
        $validatedData = $request->validate([
            'content'=>['required','string'],
            'article_id'=>['required'],
        ]);
        // add new comment to article
        Comment::create([
            'content'=>$request->content,
            'article_id'=>$request->article_id,
            'user_id'=>auth()->user()->id
        ]);

        return back();
    }
    
}
