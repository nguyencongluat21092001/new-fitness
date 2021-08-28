<?php

namespace App\Http\Controllers;
use App\Http\Requests\UsersCreateRequest;
use App\Models\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function users(){
        $users = Users::all();
        return  view("front.Admin.users", compact('users'));
    }
    public function register(){
        return view('front.Users.register');
    }
    public function create(){
        return view("front.Users.register");
    }
    
    public function store(UsersCreateRequest $usersCreateRequest){
        try{
            Users::create([
               "post_name"=>$usersCreateRequest->post_name, 
               "post_phone"=>$usersCreateRequest->post_phone, 
               "post_email"=>$usersCreateRequest->post_email, 
               "post_password"=>$usersCreateRequest->post_password, 
               "post_epeatpassword"=>$usersCreateRequest->post_epeatpassword, 

            ]);
            
            return redirect()->route('post.users');
        }catch(\Exception $ex){
            
            return back();
        }
        
    }
}
