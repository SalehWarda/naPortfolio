<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Backend\AboutUs;
use App\Models\Backend\Course;
use App\Models\Backend\Post;
use App\Models\Backend\Service;
use App\Models\Backend\SocialMedia;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    public function index()
    {
        $services = Service::with('firstMedia')->orderBy('id','DESC')->paginate(6);
        return view('pages.site.index',compact('services'));
    }

    public function about()
    {
        $about = AboutUs::firstOrFail();
        $socials = SocialMedia::get();
        return view('pages.site.about',compact('about','socials'));
    }

    public function blog()
    {
        $posts = Post::with('media')->whereStatus(true)->orderBy('id','DESC')->paginate(4);
        return view('pages.site.blog',compact('posts'));
    }

    public function postDetails($slug)
    {
        $posts = Post::with('media')->whereSlug($slug)->firstOrFail();
        return view('pages.site.post_details',compact('posts'));
    }

    public function services()
    {
        $services = Service::with('firstMedia')->paginate(6);
        return view('pages.site.services',compact('services'));
    }

    public function serviceDetails($slug)
    {
        $service = Service::with('media','questions')->whereSlug($slug)->firstOrFail();
        return view('pages.site.service_details',compact('service'));
    }

    public function courses()
    {
        $courses = Course::with('firstMedia')->whereStatus(true)->paginate(6);
        return view('pages.site.courses',compact('courses'));
    }

    public function courseDetails($slug)
    {
        $course = Course::with('firstMedia','videos')->whereSlug($slug)->firstOrFail();
        return view('pages.site.course_details',compact('course'));
    }
}
