<?php

namespace App\Http\Controllers;
use App\Http\Requests\BlogCreateRequest;


use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog(){
        $blogs = Blog::all();
        return  view("front.blog", compact('blogs'));
    }
    public function listblog(){
        $blogs = Blog::all();
        return  view("front.Admin.listBlog", compact('blogs'));
    }
    public function addblog(){
        return view('front.Admin.addBlog');
    }
    public function create(){
        return view('front.Admin.addBlog');
    }
    public function store(BlogCreateRequest $blogCreateRequest){
        try{
            Blog::create([
                "post_title"=>$blogCreateRequest->post_title, 
                "post_image"=>$blogCreateRequest->post_image, 
                "post_content"=>$blogCreateRequest->post_content, 
                "created_at"=>$blogCreateRequest->created_at, 

            ]);
            return redirect()->route('post.blog');
        }catch(\Exception $ex){
            return back();
        }
    }
    // public function delete($id){
    //     Blog::findOrFil($id)->delete();
    //     return redirect();
    // }
}
