@extends('layouts.app')

@section('style')

    <style>
        p {
            word-wrap: break-word;
        }
    </style>
@endsection
@section('content')

    <!-- blog area start -->
    <section class="blog__area pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-xl-8 col-lg-8">
                    <div class="postbox__wrapper postbox__details pr-20">
                        <div class="postbox__item transition-3 mb-70">
                            <div class="postbox__thumb m-img">
                                <div class="postbox__thumb postbox__slider swiper-container w-img p-relative">
                                    <div class="swiper-wrapper">
                                        @if($posts->media)

                                            @foreach($posts->media as $media)
                                                <div class="postbox__slider-item swiper-slide">
                                                    <img
                                                        src="{{asset('assets/images/admin/posts/'.$media->file_name)}}"
                                                        alt="{{$posts->title}}" width="760" height="405">
                                                </div>
                                            @endforeach

                                        @else
                                            <img src="{{asset('assets/images/noImage.jpg')}}"
                                                 alt="{{$posts->title}}">
                                        @endif

                                    </div>
                                    @if($posts->media->count() > 1)
                                        <div class="postbox-nav">
                                            <button class="postbox-slider-button-next"><i
                                                    class="fal fa-arrow-right"></i></button>
                                            <button class="postbox-slider-button-prev"><i class="fal fa-arrow-left"></i>
                                            </button>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="postbox__content">
                                <div class="postbox__meta">
                                    <span><i class="far fa-calendar-check"></i> {{$posts->created_at->format('M d, Y h:i A')}} </span>
                                    <span><a href="#"><i class="far fa-user"></i> {{$posts->created_by}}</a></span>
                                </div>
                                <h3 class="postbox__title">{{$posts->title}}</h3>
                                <div class="postbox__text mb-40">
                                    <p>{!! $posts->content !!}</p>
                                </div>


                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4">
                    <div class="blog__sidebar pl-70">
                        <div class="sidebar__widget mb-60">
                            <div class="sidebar__widget-content">
                                <div class="sidebar__search p-relative">
                                    <form action="#">
                                        <input type="text" placeholder="Search for courses...">
                                        <button type="submit">
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                 viewBox="0 0 584.4 584.4"
                                                 style="enable-background:new 0 0 584.4 584.4;" xml:space="preserve">
                                       <g>
                                           <g>
                                               <path class="st0"
                                                     d="M565.7,474.9l-61.1-61.1c-3.8-3.8-8.8-5.9-13.9-5.9c-6.3,0-12.1,3-15.9,8.3c-16.3,22.4-36,42.1-58.4,58.4    c-4.8,3.5-7.8,8.8-8.3,14.5c-0.4,5.6,1.7,11.3,5.8,15.4l61.1,61.1c12.1,12.1,28.2,18.8,45.4,18.8c17.1,0,33.3-6.7,45.4-18.8    C590.7,540.6,590.7,499.9,565.7,474.9z"/>
                                               <path class="st1"
                                                     d="M254.6,509.1c140.4,0,254.5-114.2,254.5-254.5C509.1,114.2,394.9,0,254.6,0C114.2,0,0,114.2,0,254.5    C0,394.9,114.2,509.1,254.6,509.1z M254.6,76.4c98.2,0,178.1,79.9,178.1,178.1s-79.9,178.1-178.1,178.1S76.4,352.8,76.4,254.5    S156.3,76.4,254.6,76.4z"/>
                                           </g>
                                       </g>
                                       </svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar__widget mb-55">
                            <div class="sidebar__widget-head mb-35">
                                <h3 class="sidebar__widget-title">Recent posts</h3>
                            </div>
                            <div class="sidebar__widget-content">
                                <div class="rc__post-wrapper">


                                    @forelse(\App\Models\Backend\Post::whereStatus(true)->latest()->take(5)->orderBy('id','DESC')->get() as $post )
                                        <div class="rc__post d-flex align-items-start">
                                            <div class="rc__thumb mr-20">
                                                <a href="{{route('site.blog.post',$post->slug)}}">
                                                    @if($post->firstMedia)
                                                        <img
                                                            src="{{asset('assets/images/admin/posts/'.$post->firstMedia->file_name)}}"
                                                            width="60" height="60" alt="{{$post->title}}">
                                                    @else
                                                        <img src="{{asset('assets/images/noImage.jpg')}}" width="60" height="60"
                                                             alt="{{$post->title}}">
                                                    @endif

                                                </a>
                                            </div>
                                            <div class="rc__content">
                                                <div class="rc__meta">
                                                    <span>{{$post->created_at->format('M d, Y h:i A')}}</span>
                                                </div>
                                                <h6 class="rc__title"><a href="{{route('site.blog.post',$post->slug)}}">{{$post->title}}</a></h6>
                                            </div>
                                        </div>

                                    @empty
                                        <h5><span class="text-center">لم يتم العثور على بوستات في المدونة</span></h5>
                                    @endforelse

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog area end -->

@endsection
