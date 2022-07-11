<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AdminsController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\CoursesController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\MailController;
use App\Http\Controllers\Admin\PostsController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\ServicesQuestion;
use App\Http\Controllers\Admin\SocialMediaController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Livewire\Admin\Courses\WatchVideoComponent;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){

    Route::post('livewire/message/{name}', '\Livewire\Controllers\HttpConnectionHandler');
        Route::group(['prefix' => 'admin','as' => 'admin.'],function (){
            Route::group(['middleware' => 'auth:admin'],function (){


                Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');
                Route::post('/logout',[LoginController::class, 'logout'])->name('logout');


                ############################### Services Route ###############################

                Route::group(['prefix' => 'services', 'middleware' => 'can:services'],function (){

                    Route::get('/', [ServicesController::class,'index'])->name('services');
                    Route::get('/service_timings', [ServicesController::class,'serviceTimings'])->name('services.service-timings');
                    Route::get('/questions', [ServicesQuestion::class,'index'])->name('services.questions');
                });

                ############################### Courses Route ###############################

                Route::group(['prefix' => 'courses', 'middleware' => 'can:courses'],function (){

                    Route::get('/', [CoursesController::class,'index'])->name('courses');
                });

                ############################### Courses Video Route ###############################

                Route::group(['prefix' => 'videos', 'middleware' => 'can:videos'],function (){

                    Route::get('/{id}', [VideoController::class,'index'])->name('videos');
                    Route::get('/watch/{id}', [VideoController::class, 'watch'])->name('videos.watch');
                });

                ############################### Social Media Route ###############################

                Route::group(['prefix' => 'socials', 'middleware' => 'can:socials'],function (){

                    Route::get('/', [SocialMediaController::class,'index'])->name('socials');
                });

                ############################### Blog Route ###############################

                Route::group(['prefix' => 'blog', 'middleware' => 'can:blog'],function (){

                    Route::get('/posts', [PostsController::class,'index'])->name('posts');
                });


                ############################### About Route  Livewire###############################

                Route::group(['prefix' => 'about'],function (){

                    Route::get('/', [AboutController::class,'index'])->name('about');
                    Route::patch('/update', [AboutController::class,'update'])->name('about.update');
                });

                ############################### Coupons Route ###############################

                Route::group(['prefix' => 'coupons', 'middleware' => 'can:coupons'],function (){

                    Route::get('/', [CouponController::class,'index'])->name('coupons');
                    Route::post('/store', [CouponController::class,'store'])->name('coupons.store');
                    Route::put('/update', [CouponController::class,'update'])->name('coupons.update');
                    Route::delete('/delete', [CouponController::class,'destroy'])->name('coupons.destroy');
                });

                ############################### Roles Route ###############################

                Route::group(['prefix' => 'admin-roles'],function (){


                    Route::get('/', [RoleController::class,'index'])->name('roles.index');
                    Route::get('/create', [RoleController::class,'create'])->name('roles.create');
                    Route::post('/store', [RoleController::class,'store'])->name('roles.store');
                    Route::get('/edit/{id}', [RoleController::class,'edit'])->name('roles.edit');
                    Route::put('/update', [RoleController::class,'update'])->name('roles.update');
                    Route::delete('/delete', [RoleController::class,'destroy'])->name('roles.destroy');
                });



                ############################### Admin Users Route ###############################

                Route::group(['prefix' => 'admin-users'],function (){

                    Route::get('/', [AdminsController::class,'index'])->name('users');
                });

                ############################### Mail Route ###############################

                Route::group(['prefix' => 'mail', 'middleware' => 'can:mail'],function (){

                    Route::get('/', [MailController::class,'index'])->name('mail');
                    Route::delete('/delete', [MailController::class,'destroy'])->name('mail.destroy');
                    Route::get('/mail-details/{id}', [MailController::class,'mail_details'])->name('mail.mail_details');
                });
            });

            ############################ Account Settings Route Begin ##############################

            Route::group(['prefix' => 'account_settings'], function () {

                Route::get('/index', [AdminsController::class, 'account_settings'])->name('account_settings');
                Route::patch('/update', [AdminsController::class, 'update_account_settings'])->name('account_settings.update');


            });


        });

    Route::get('/login',[LoginController::class, 'getLogin'])->name('admin.getLogin');
    Route::post('/login',[LoginController::class, 'login'])->name('admin.login');


});



