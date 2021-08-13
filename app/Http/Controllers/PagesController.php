<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PagesController extends Controller
{
    public function showOne($id)
    {
       $post = Posts::find($id);

        return view('showUserPost', [
            'post' => $post
        ]);
    }

    public function showblog()
    {
        $posts = Posts::get();
        return view('blog' , [
            'posts' => $posts]);
    }

    public function showsignup()
    {
        return view('signup');
    }

    public function showlogin()
    {
        return view('login');
    }

   
    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);

        Auth::attempt($request->only('email', 'password'));
        if (auth()->user() && auth()->user()->is_admin) {
            return redirect()->route('create');
        }

        return redirect()->route('blog')->with('Invalid', 'Only admin can log in');
    }

    public function logout()
    {
         Auth::logout();
         return redirect()->route('blog');
    }
}
