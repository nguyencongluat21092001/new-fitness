<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $posts = Post::all();
        return  view("front.index", compact('posts'));
    }
    public function commentindex(){
        $contacts = Contact::all();
        return  view("front.index", compact('contacts'));
    }
}