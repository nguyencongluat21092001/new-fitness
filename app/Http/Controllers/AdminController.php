<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
session_start();

class AdminController extends Controller
{
      public function index(){
      return view('front.Admin.loginAdmin');
   }

     public function show_dashboard(){
        return view('front.Admin.dashboard');
     }
     public function dashboard(Request $request){
      $admin_email = $request->admin_email;
      $admin_password = md5($request->admin_password);

      $result = DB::table('tbl_admin')->where('admin_email',$admin_email)->where('admin_password',$admin_password)->first();
      if($result){
         Session::put('admin_name',$result->admin_name);
         Session::put('id',$result->id);
         return Redirect::to('dashboard');
      }else{
         Session::put('message',"Tài khoản hoặc mật khẩu đăng nhập không chính xác!");
         return Redirect::to('loginAdmin');
      }
   
   }
   public function logout(){
      Session::put('admin_name',null);
      Session::put('id',null);
      return Redirect::to('admin');
   }
}