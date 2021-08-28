<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostCreateRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return  view("front.Admin.dashboard_manager", compact('posts'));
    }
    public function create(){
        return view("front.Admin.dashboard");
    }
    
    public function store(PostCreateRequest $postCreateRequest){
        try{
            Post::create([
               "post_name"=>$postCreateRequest->post_name, 
               "post_age"=>$postCreateRequest->post_age, 
               "post_image"=>$postCreateRequest->post_image, 
               "post_introduce"=>$postCreateRequest->post_introduce, 
               "post_experience"=>$postCreateRequest->post_experience, 
            ]);
            
            return redirect()->route('post.index');
        }catch(\Exception $ex){
            
            return back();
        }
        
    }
}