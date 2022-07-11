@extends('layouts.app')

@section('style')

    <style>
        p{
            word-wrap:break-word;
        }
    </style>
@endsection
@section('content')

    <!-- event area start -->
    <section class="event__area pt-115 p-relative">
        <div class="page__title-shape">
            <img class="page-title-shape-5 d-none d-sm-block" src="{{asset('assets/site/img/breadcrumb/page-title-shape-1.png')}}" alt="">
            <img class="page-title-shape-6" src="{{asset('assets/site/img/breadcrumb/page-title-shape-2.png')}}" alt="">
            <img class="page-title-shape-7" src="{{asset('assets/site/img/breadcrumb/page-title-shape-4.png')}}" alt="">
            <img class="page-title-shape-8" src="{{asset('assets/site/img/breadcrumb/page-title-shape-5.png')}}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xxl-8">
                    <div class="event__wrapper">
                        <div class="page__title-content mb-25">
                            <div class="breadcrumb__list breadcrumb__list-2 mb-10">
                                <span><a href="{{route('site.index')}}">Home</a></span>
                                <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                                <span>Services</span>
                            </div>
                            <h5 class="breadcrumb__title-2">{{$service->name}}</h5>
                        </div>
                        <div class="course__meta-2 d-sm-flex align-items-center mb-30">
                            <div class="course__teacher-3 d-flex align-items-center mr-70 mb-30">

                                <div class="course__teacher-info-3">
                                    <h5>Teacher</h5>
                                    <p><a href="#">Elon Gated</a></p>
                                </div>
                            </div>
                            <div class="course__update mr-80 mb-30">
                                <h5>Created at:</h5>
                                <p>{{$service->created_at->format('M d, Y')}}</p>
                            </div>
                            <div class="course__update mr-80 mb-30">
                                <h5>Last Update:</h5>
                                <p>{{$service->updated_at->format('M d, Y')}}</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- event area end -->

    <!-- event details area start -->
    <section class="event__area pb-110">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-xl-8 col-lg-8">
                    <div class="event_wrapper">
                        <div class="postbox__thumb postbox__slider swiper-container w-img p-relative">
                        <div class="swiper-wrapper">
                            @if($service->media)

                                @foreach($service->media as $media)
                                    <div class="postbox__slider-item swiper-slide">
                                        <img
                                            src="{{asset('assets/images/admin/services/'.$media->file_name)}}"
                                            alt="{{$service->name}}" width="760" height="405">
                                    </div>
                                @endforeach


                            @else
                                <img src="{{asset('assets/images/noImage.jpg')}}"
                                     alt="{{$service->name}}">
                            @endif

                        </div>
                            @if($service->media->count() > 1)
                                <div class="postbox-nav">
                                    <button class="postbox-slider-button-next"><i class="fal fa-arrow-right"></i></button>
                                    <button class="postbox-slider-button-prev"><i class="fal fa-arrow-left"></i></button>
                                </div>
                            @endif

                        </div><br>
                        <div class="event__details mb-35">
                            <h3>Description</h3>
                            <p> {!! $service->description !!}</p>
                        </div>

                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4">
                    <div class="event__sidebar pl-70">
                        <div class="event__sidebar-widget white-bg mb-20">
                            <div class="event__sidebar-shape">
                                <img class="event-sidebar-img-2" src="{{asset('assets/site/img/events/event-shape-2.png')}}" alt="">
                                <img class="event-sidebar-img-3" src="{{asset('assets/site/img/events/event-shape-3.png')}}" alt="">
                            </div>
                            <div class="event__info">
                                <div class="event__info-meta mb-25 d-flex align-items-center justify-content-between">
                                    <div class="event__info-price">
                                        <h5><span>SAR{{$service->price}}</span> </h5>

                                    </div>

                                </div>
                                <div class="event__info-content mb-35">
                                    <ul>
                                        <li class="d-flex align-items-center">
                                            <div class="event__info-icon">

                                            </div>
                                            <div class="event__info-item">
                                                <h5><span>Status: </span> {{$service->status()}}</h5>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <div class="event__info-icon">

                                            </div>
                                            <div class="event__info-item">
                                                <h5><span>days:</span>  10:45 AM-01:30 PM</h5>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <div class="event__info-icon">

                                            </div>
                                            <div class="event__info-item">
                                                <h5><span>Time:</span>  10:45 AM-01:30 PM</h5>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <div class="event__info-icon">

                                            </div>
                                            <div class="event__info-item">
                                                <h5><span>Note: </span> Before enroll, please answer this question...</h5>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="event__join-btn">
                                    <a href="contact.html" class="tp-btn text-center w-100">Enroll <i class="far fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- event details area end -->
    <section class="faq__area pt-20 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12 col-xl-12 col-lg-12">
                    <div class="faq__wrapper pt-45 pr-25">
                        <div class="section__title-wrapper mb-5">
                            <h2 class="section__title section__title-44">Questuins</h2>
                        </div>


                    </div>
                </div>  </div>

            <livewire:admin.services.answers-questions-component :service="$service"/>
        </div>
    </section>

@endsection
