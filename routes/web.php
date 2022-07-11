<?php

use App\Http\Controllers\Site\SiteController;
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


Route::get('/',[SiteController::class, 'index'])->name('site.index');
Route::get('/blog',[SiteController::class, 'blog'])->name('site.blog');
Route::get('/blog/post/{slug}',[SiteController::class, 'postDetails'])->name('site.blog.post');
Route::get('/about',[SiteController::class, 'about'])->name('site.about');
Route::get('/services',[SiteController::class, 'services'])->name('site.services');
Route::get('/service/{slug}',[SiteController::class, 'serviceDetails'])->name('site.service-details');
Route::get('/courses',[SiteController::class, 'courses'])->name('site.courses');
Route::get('/courses/{slug}',[SiteController::class, 'courseDetails'])->name('site.course-details');



