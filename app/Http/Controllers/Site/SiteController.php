<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ContactRequest;
use App\Models\Backend\AboutUs;
use App\Models\Backend\Course;
use App\Models\Backend\Mail;
use App\Models\Backend\Post;
use App\Models\Backend\Service;
use App\Models\Backend\ServiceTiming;
use App\Models\Backend\SocialMedia;
use App\Models\Counter;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    public function index()
    {
        $about = AboutUs::firstOrFail();
        $courses = Course::with('firstMedia')->take(6)->orderBy('id','DESC')->whereStatus(true)->get();
        $timings = ServiceTiming::with('service')->orderBy('id','DESC')->get();
        $counters = Counter::orderBy('id', 'DESC')->get();

        return view('pages.site.index',compact('timings','courses','about','counters'));
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
        $services = Service::with('firstMedia')->orderBy('id','DESC')->paginate(6);
        return view('pages.site.services',compact('services'));
    }

    public function serviceDetails($slug)
    {

        $service = Service::with('media','serviceTimings','questions')->whereSlug($slug)->firstOrFail();

        return view('pages.site.service_details',compact('service'));
    }

    public function courses()
    {
        $courses = Course::with('firstMedia')->orderBy('id','DESC')->whereStatus(true)->paginate(6);
        return view('pages.site.courses',compact('courses'));
    }

    public function courseDetails($slug)
    {
        $course = Course::with('firstMedia','videos','orders')->whereSlug($slug)->firstOrFail();
        return view('pages.site.course_details',compact('course'));
    }

    public function contact()
    {
        $socials = SocialMedia::get();
        $about = AboutUs::first();

        return view('pages.site.contact',compact('socials','about'));
    }
    public function contact_store(ContactRequest $request)
    {

       $input['name'] = $request->name;
       $input['company'] = $request->company;
       $input['email'] = $request->email;
       $input['mobile'] = $request->mobile;
       $input['subject'] = $request->subject;
       $input['message'] = $request->message;

       Mail::create($input);

        return back()->with([

            'message' => 'تم الإرسال بنجاح !',
            'alert-type' => 'success'
        ]);
    }

    public function cart()
    {

        return view('pages.site.cart');
    }

    public function checkout()
    {

        return view('pages.site.checkout');
    }
}
