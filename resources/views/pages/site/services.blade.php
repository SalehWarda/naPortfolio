@extends('layouts.app')

@section('style')

    <style>
        p{
            word-wrap:break-word;
        }
    </style>
@endsection
@section('content')

    <!-- breadcrumb area start -->
    <section class="breadcrumb__area include-bg pt-150 pb-150 breadcrumb__overlay" data-background="assets/img/breadcrumb/breadcrumb-bg-1.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="breadcrumb__content text-center p-relative z-index-1">
                        <h3 class="breadcrumb__title">Our Blog</h3>
                        <div class="breadcrumb__list">
                            <span><a href="{{route('site.index')}}">Home</a></span>
                            <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                            <span>Blog</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->

    <!-- services area start -->
    <section class="course__area pt-115 pb-90 grey-bg-3">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="section__title-wrapper text-center mb-60">
                        <span class="section__title-pre">Top Services</span>
                        <h2 class="section__title section__title-44">Our Featured Services</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing aelit, sed do eiusmod</p>
                    </div>
                </div>
            </div>
            <div class="row">

                @foreach($services as $service)

                    <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6">
                        <div class="course__item white-bg transition-3 mb-30">
                            <div class="course__thumb w-img fix">
                                <a href="{{route('site.service-details',$service->slug)}}">
                                    @if($service->firstMedia)
                                        <img
                                            src="{{asset('assets/images/admin/services/'.$service->firstMedia->file_name)}}"
                                            width="320" height="220" alt="{{$service->name}}">

                                    @endif
                                </a>
                            </div>
                            <div class="course__content p-relative">
                                <div class="course__price">
                                    <span style=" width: 60px;">SAR{{$service->price}}</span>
                                </div>
                                <div class="course__tag">
                                    @if($service->status == 'open')
                                        <a href="#"><strong><span class="text-success">{{$service->status()}}</span></strong> </a>
                                    @elseif($service->status == 'closed')
                                        <a href="#"><strong> <span class="text-danger">{{$service->status()}}</span></strong></a>
                                    @else
                                        <a href="#"> <strong><span class="text-warning">{{$service->status()}}</span></strong></a>

                                    @endif
                                </div>
                                <h3 class="course__title">
                                    <a href="{{route('site.service-details',$service->slug)}}">{{$service->name}}.</a>
                                </h3>
                                <p>{!! \Illuminate\Support\Str::limit($service->description, 70, '...') !!} </p>

                                <div class="course__bottom d-sm-flex align-items-center justify-content-between">
                                    <div class="course__tutor">
                                        <a href="{{route('site.service-details',$service->slug)}}"><i class="fa fa-arrow-circle-right"></i> More details</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                @endforeach

            </div>
        </div>
    </section>
    <!-- services area end -->


@endsection
