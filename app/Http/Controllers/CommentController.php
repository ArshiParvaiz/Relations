<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use App\User;
class CommentController extends Controller
{
    public function index(Request $request)
    {
         $posts = Post::get();
         return view('welcome',compact('posts'));
    }
    public function comments(Request $request)
    {
         $comments = Post::find($request->post)->comments;
         return view('comments',compact('comments'));
    }

    public function users(Request $request)
    {
     $users = User::get();
     return view('users',compact('users'));
    }

    public function user_roles(Request $request)
    {
     $roles = User::find($request->user)->roles;
     return view('user-roles',compact('roles'));
    }
}
