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
    <section class="breadcrumb__area include-bg pt-150 pb-150 breadcrumb__overlay" >
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="breadcrumb__content text-center p-relative z-index-1">
                        <h3 class="breadcrumb__title">About</h3>
                        <div class="breadcrumb__list">
                            <span><a href="index.html">Home</a></span>
                            <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                            <span>About</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->


    <!-- instructor details area start -->
    <section class="teacher__area pt-120 pb-110">

        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-xl-6 col-lg-6 col-md-6">
                    <div class="teacher__details-thumb p-relative pr-30">
                        @if($about->firstMedia)
                            <img class="team-thumb"
                                 src="{{asset('assets/images/admin/about/'.$about->firstMedia->file_name)}}"
                                 alt="{{$about->title}}" width="500">
                        @else
                            <img class="team-thumb" src="{{asset('assets/images/noImage.jpg')}}"
                                 alt="{{$about->title}}" width="500">
                        @endif

                    </div>
                </div>
                <div class="col-xxl-4 col-xl-6 col-lg-6">
                    <div class="teacher__wrapper">
                        <div class="teacher__top d-md-flex align-items-end justify-content-between">
                            <div class="teacher__info">
                                <h4>{{$about->name}}</h4>
                                <h5> <span>{{$about->degree}}</span></h5>
                            </div>

                            <div class="teacher__social-2">
                                <h3>:تابعني</h3>
                                <ul>
                                    @foreach($socials as $social)
                                        <li>
                                            <a href="{{$social->link}}">
                                                <i class="fa-brands fa-{{$social->name}}"></i>
                                            </a>
                                        </li>
                                    @endforeach


                                </ul>
                            </div>

                        </div>
                        <div class="teacher__bio">
                            <h3>:نبذة تعريفية</h3>
                            <p>{!! $about->bio !!}</p>

                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- instructor details area end -->



    <!-- faq area start -->
    <section class="faq__area pt-20 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12 col-xl-12 col-lg-12">
                    <div class="faq__wrapper pt-45 pr-25">
                        <div class="section__title-wrapper mb-5">
                            <h2 class="section__title section__title-44">Educations</h2>
                        </div>


                    </div>
                </div>  </div>
            <div class="row">
                <div class="col-xxl-12 col-xl-12 col-lg-12">
                    <div class="faq__item-wrapper pl-100">
                        <div class="faq__accordion">
                            <div class="accordion" id="faqaccordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="faqOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Who will view my content?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="faqOne" data-bs-parent="#faqaccordion">
                                        <div class="accordion-body">
                                            <p>{!! $about->education !!}</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-xxl-12 col-xl-12 col-lg-12">
                    <div class="faq__wrapper pt-45 pr-25">
                        <div class="section__title-wrapper mb-5">
                            <h2 class="section__title section__title-44">Professional Experiences</h2>
                        </div>


                    </div>
                </div>  </div>
            <div class="row">
                <div class="col-xxl-12 col-xl-12 col-lg-12">
                    <div class="faq__item-wrapper pl-100">
                        <div class="faq__accordion">
                            <div class="accordion" id="faqaccordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="faqTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                            Who will view my content?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse " aria-labelledby="faqTwo" data-bs-parent="#faqaccordion">
                                        <div class="accordion-body">
                                            <p>{!! $about->experiences !!}</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-xxl-12 col-xl-12 col-lg-12">
                    <div class="faq__wrapper pt-45 pr-25">
                        <div class="section__title-wrapper mb-5">
                            <h2 class="section__title section__title-44">Future Goals</h2>
                        </div>


                    </div>
                </div>  </div>
            <div class="row">
                <div class="col-xxl-12 col-xl-12 col-lg-12">
                    <div class="faq__item-wrapper pl-100">
                        <div class="faq__accordion">
                            <div class="accordion" id="faqaccordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="faqThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                            Who will view my content?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse " aria-labelledby="faqThree" data-bs-parent="#faqaccordion">
                                        <div class="accordion-body">
                                            <p>{!! $about->goals !!}</p>
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
    <!-- faq area end -->





@endsection
