<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UsersController;

use App\Models\Post;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/','HomeController@index');
Route::get('/blog', function () {
    return view('front.blog');
});
Route::get('/gallery', function () {
    return view('front.gallery');
});
Route::get('/contact', function () {
    return view('front.contact');
});
Route::get('/pricing', function () {
    return view('front.pricing');
});
Route::get('/dashboard-product', function () {
    return view('front.Admin.dashboard');
    
});


// backend-login(Admin)
Route::get('/loginAdmin','App\Http\Controllers\AdminController@index');
Route::get('/admin','App\Http\Controllers\AdminController@index');
Route::get('/dashboard','App\Http\Controllers\AdminController@show_dashboard');
Route::get('/logout','App\Http\Controllers\AdminController@logout');
Route::post('/admin-dashboard','App\Http\Controllers\AdminController@dashboard');

//backend-users
Route::get('/addregister',[UsersController::class,'create']);
Route::post('/storeusers',[UsersController::class,'store'])->name('store.users');
Route::get('/register',[UsersController::class,'users'])->name('post.users');
Route::get('/users',[UsersController::class,'users']);



// dashboard-add huấn luyện viên
Route::get('/post','App\Http\Controllers\PostController@create')->name('post.create');
Route::post('store','App\Http\Controllers\PostController@store')->name('store.post');
Route::get('/dashboard_manager', [PostController::class,'index'])->name('post.index');
Route::get('/trang-chu', [HomeController::class,'index']);
Route::get('/trainer', [TrainerController::class,'trainer']);

// dashboard-các gói tập
Route::get('/addPricing',[PricingController::class,'create']);
Route::post('storepack',[PricingController::class,'store'])->name('store.pack');
Route::get('/listPricing',[PricingController::class,'index'])->name('post.pack');
Route::get('/pricing', [PricingController::class,'pricing']);

// dashboard-thời khóa biểu
Route::get('/addschedule',[ScheduleController::class,'create']);
Route::get('/listschedule',[ScheduleController::class,'index'])->name('post.schedule');
Route::post('/storeschedule',[ScheduleController::class,'store'])->name('store.schedule');
Route::get('/gallery', [ScheduleController::class,'gallery']);

// dashboard-blog
Route::get('/addBlog',[BlogController::class,'addblog']);
Route::post('/storeblog',[BlogController::class,'store'])->name('store.blog');
Route::get('/listBlog',[BlogController::class,'listblog'])->name('post.blog');
Route::get('/blog', [BlogController::class,'blog']);
Route::get('/deleteblog', [BlogController::class,'delete']);

//dashboard-contact
Route::get('/addcontact',[ContactController::class,'addcontact']);
Route::post('/storecontact',[ContactController::class,'store'])->name('store.contact');
Route::get('/listContact',[ContactController::class,'listcontact']);
Route::get('/comment', [ContactController::class,'contact']);



