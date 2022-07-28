@extends('layouts.app')

@section('style')

    <style>
        p {
            word-wrap: break-word;
        }
    </style>

@endsection
@section('content')

    <!-- slider area start -->
    <section class="slider__area slider__height-2 include-bg d-flex align-items-center"
             data-background="{{ asset('assets/site/img/slider/2/slider-2-bg.jpg')}}">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-6 col-lg-6">
                    <div class="slider__content-2 mt-30">
                        <span style="font-size: 30px">{{$about->name}}</span><br>
                        <h3 class="slider__title-2" style="font-size: 40px">{{$about->degree}}</h3>
                        <p>{!! $about->goals !!}</p>
                        <a href="{{route('site.courses')}}" class="tp-btn-green">{{trans('site.Explore_Courses')}}</a>
                    </div>
                </div>
                <div class="col-xxl-6 col-lg-6">
                    <div class="slider__thumb-2 p-relative">
                        <div class="slider__shape">
{{--                            <img class="slider__shape-1"--}}
{{--                                 src="{{asset('assets/site/img/slider/2/shape/slider-cap-1.png')}}" alt="">--}}
{{--                            <img class="slider__shape-2"--}}
{{--                                 src="{{asset('assets/site/img/slider/2/shape/slider-cap-2.png')}}" alt="">--}}
{{--                            <img class="slider__shape-3"--}}
{{--                                 src="{{asset('assets/site/img/slider/2/shape/slider-cap-3.png')}}" alt="">--}}
{{--                            <img class="slider__shape-4" src="{{asset('assets/site/img/slider/2/shape/ba1.jpg')}}"--}}
{{--                                 width="219" alt="">--}}
{{--                            <img class="slider__shape-5" src="{{asset('assets/site/img/slider/2/shape/ba2.png')}}"--}}
{{--                                 width="122" alt="">--}}
                        </div>
                        <span class="slider__thumb-mask">
                           <img src="{{asset('assets/site/img/team/team-5s.png')}}" alt="">
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- slider area end -->

    <!-- counter area start -->
    <section class="counter__area pb-120 pb-140">
        <div class="container">
            <div class="counter__inner counter__inner-2 grey-bg-8">
                <div class="row">
                    @foreach($counters as $counter)
                        <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6">
                            <div class="counter__item d-flex align-items-start counter__item-border counter__item-border-2">
                                <div class="counter__icon counter__icon-2 mr-15">
                                    <i class="{{$counter->icon}}" width="38" height="39" style="color: #007a70"></i>
                                </div>
                                <div class="counter__content counter__content-2">
                                    <h4 ><span class="counter">{{$counter->counter}}</span>+</h4>
                                    <p>{{$counter->title}}</p>
                                </div>
                            </div>
                        </div>

                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!-- counter area end -->

    <!-- services area start -->
    <livewire:site.featured-services/>
    <!-- services area end -->








    <!-- course area start -->
    <section class="course__area pt-115 pb-90 grey-bg-3">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="section__title-wrapper text-center mb-60">
                        <span class="section__title-pre">{{trans('site.Top_Courses')}}</span>
                        <h2 class="section__title section__title-44">{{trans('site.My_Special_Courses')}}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-12">

                    <div class="row">
                        <div class="col-xxl-12">
                            <div class="course__tab-conent">
                                <div class="tab-content" id="courseTabContent">
                                    <div class="tab-pane fade show active" id="grid" role="tabpanel"
                                         aria-labelledby="grid-tab">
                                        <div class="row">
                                            @forelse($courses as $course)
                                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                                    <div class="course__item-2 transition-3 white-bg mb-30 fix">
                                                        <div class="course__thumb-2 w-img fix">
                                                            <a href="{{route('site.course-details',$course->slug)}}">

                                                                @if($course->firstMedia)
                                                                    <img
                                                                        src="{{asset('assets/images/admin/courses/'.$course->firstMedia->file_name)}}"
                                                                        width="320" height="220"
                                                                        alt="{{$course->name}}">

                                                                @endif
                                                            </a>
                                                        </div>
                                                        <div class="course__content-2">
                                                            <div
                                                                class="course__top-2 d-flex align-items-center justify-content-between">
                                                                <div class="course__tag-2">
                                                                    <a href="#">{{$course->instructor}}</a>
                                                                </div>

                                                            </div>
                                                            <h3 class="course__title-2">
                                                                <a href="{{route('site.course-details',$course->slug)}}">{{$course->title}}</a>
                                                            </h3>
                                                            <div
                                                                class="course__bottom-2 d-flex align-items-center justify-content-between">
                                                                <div class="course__action">
                                                                    <ul>
                                                                        <li>
                                                                            <div
                                                                                class="course__action-item d-flex align-items-center">
                                                                                <div class="course__action-icon mr-5">
                                                                  <span>
                                                                   <i class="fa fa-money-check"></i>
                                                                  </span>
                                                                                </div>
                                                                                <div class="course__price-2">
                                                                                    <span>{{trans('site.SR')}} {{$course->price}}</span>
                                                                                </div>
                                                                            </div>
                                                                        </li>

                                                                    </ul>
                                                                </div>
                                                                <div class="course__lesson">
                                                                    <a href="#">
                                                                        <i class="fab fa-youtube"></i>
                                                                        {{$course->videos->count()}} {{trans('site.Lessons')}}
                                                                    </a>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            @empty
                                            @endforelse

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- course area end -->

@endsection
