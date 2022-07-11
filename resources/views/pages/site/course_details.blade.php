@extends('layouts.app')

@section('style')

    <style>
        p{
            word-wrap:break-word;
        }
    </style>
@endsection
@section('content')

    <!-- course area start -->
    <section class="course__area pt-115 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-xl-8 col-lg-8">
                    <div class="course__wrapper">
                        <div class="page__title-content mb-25">
                            <div class="breadcrumb__list breadcrumb__list-2 mb-10">
                                <span><a href="#">Home</a></span>
                                <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                                <span>Courses</span>
                            </div>
                            <h5 class="breadcrumb__title-2">{{$course->title}}</h5>
                        </div>
                        <div class="course__meta-2 d-sm-flex align-items-center mb-30">
                            <div class="course__teacher-3 d-flex align-items-center mr-70 mb-30">
                                <div class="course__teacher-thumb-3 mr-15">

                                </div>
                                <div class="course__teacher-info-3">
                                    <h5>Instructor</h5>
                                    <p><a href="#">{{$course->instructor}}</a></p>
                                </div>
                            </div>
                            <div class="course__update mr-80 mb-30">
                                <h5>Last Update:</h5>
                                <p>{{$course->updated_at->format('M d, Y')}}</p>
                            </div>

                            <div class="course__update mr-80 mb-30">
                                <h5>Created at:</h5>
                                <p>{{$course->created_at->format('M d, Y')}}</p>
                            </div>
                        </div>
                        <div class="course__img w-img mb-30">
                            @if($course->firstMedia)
                                <img
                                    src="{{asset('assets/images/admin/courses/'.$course->firstMedia->file_name)}}"
                                    width="720" height="450" alt="{{$course->name}}">

                                @endif
                        </div>
                        <div class="course__tab-2 mb-45">
                            <ul class="nav nav-tabs" id="courseTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true"><i class="fa-regular fa-medal"></i> <span>Discription</span> </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link " id="curriculum-tab" data-bs-toggle="tab" data-bs-target="#curriculum" type="button" role="tab" aria-controls="curriculum" aria-selected="false"><i class="fa-regular fa-book-blank"></i> <span>Curriculum</span> </button>
                                </li>


                            </ul>
                        </div>
                        <div class="course__tab-content mb-95">
                            <div class="tab-content" id="courseTabContent">
                                <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                                    <div class="course__description">
                                        <h3>Course Overview</h3>
                                        <p>{!! $course->description !!} </p>


                                    </div>
                                </div>
                                <div class="tab-pane fade" id="curriculum" role="tabpanel" aria-labelledby="curriculum-tab">
                                    <div class="course__curriculum">
                                        <div class="accordion" id="course__accordion">
                                            <div class="accordion-item mb-50">
                                                <h2 class="accordion-header" id="week-01">
                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#week-01-content" aria-expanded="true" aria-controls="week-01-content">
                                                        Week 01
                                                    </button>
                                                </h2>
                                                <div id="week-01-content" class="accordion-collapse collapse show" aria-labelledby="week-01" data-bs-parent="#course__accordion">
                                                    <div class="accordion-body">
                                                        <div class="course__curriculum-content d-sm-flex justify-content-between align-items-center">
                                                            <div class="course__curriculum-info">
                                                                <svg class="document" viewBox="0 0 24 24">
                                                                    <path class="st0" d="M14,2H6C4.9,2,4,2.9,4,4v16c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V8L14,2z"/>
                                                                    <polyline class="st0" points="14,2 14,8 20,8 "/>
                                                                    <line class="st0" x1="16" y1="13" x2="8" y2="13"/>
                                                                    <line class="st0" x1="16" y1="17" x2="8" y2="17"/>
                                                                    <polyline class="st0" points="10,9 9,9 8,9 "/>
                                                                </svg>
                                                                <h3> <span>Reading:</span> Ut enim ad minim veniam</h3>
                                                            </div>
                                                            <div class="course__curriculum-meta">
                                                                <span class="time"> <i class="icon_clock_alt"></i> 14 minutes</span>
                                                                <span class="question">2 questions</span>
                                                            </div>
                                                        </div>
                                                        <div class="course__curriculum-content d-sm-flex justify-content-between align-items-center">
                                                            <div class="course__curriculum-info">
                                                                <svg viewBox="0 0 24 24">
                                                                    <polygon class="st0" points="23,7 16,12 23,17 "/>
                                                                    <path class="st0" d="M3,5h11c1.1,0,2,0.9,2,2v10c0,1.1-0.9,2-2,2H3c-1.1,0-2-0.9-2-2V7C1,5.9,1.9,5,3,5z"/>
                                                                </svg>
                                                                <h3> <span>Video: </span> Greetings and introduction</h3>
                                                            </div>
                                                            <div class="course__curriculum-meta">
                                                                <span class="time"> <i class="icon_clock_alt"></i> 15 minutes</span>
                                                            </div>
                                                        </div>
                                                        <div class="course__curriculum-content d-sm-flex justify-content-between align-items-center">
                                                            <div class="course__curriculum-info">
                                                                <svg viewBox="0 0 16 16">

                                                                    <path class="st0" d="M2,12V8c0-3.3,2.9-6,6.4-6s6.4,2.7,6.4,6v4"/>
                                                                    <path class="st0" d="M14.8,12.7c0,0.7-0.6,1.3-1.4,1.3h-0.7c-0.8,0-1.4-0.6-1.4-1.3v-2c0-0.7,0.6-1.3,1.4-1.3h2.1V12.7z M2,12.7  C2,13.4,2.6,14,3.3,14H4c0.7,0,1.3-0.6,1.3-1.3v-2c0-0.7-0.6-1.3-1.3-1.3H2V12.7z"/>
                                                                </svg>
                                                                <h3> <span>Audio:</span> Interactive lesson</h3>
                                                            </div>
                                                            <div class="course__curriculum-meta">
                                                                <span class="time"> <i class="icon_clock_alt"></i> 7 minutes</span>
                                                                <span class="question">3 questions</span>
                                                            </div>
                                                        </div>
                                                        <div class="course__curriculum-content d-sm-flex justify-content-between align-items-center">
                                                            <div class="course__curriculum-info">
                                                                <svg class="document" viewBox="0 0 24 24">
                                                                    <path class="st0" d="M14,2H6C4.9,2,4,2.9,4,4v16c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V8L14,2z"/>
                                                                    <polyline class="st0" points="14,2 14,8 20,8 "/>
                                                                    <line class="st0" x1="16" y1="13" x2="8" y2="13"/>
                                                                    <line class="st0" x1="16" y1="17" x2="8" y2="17"/>
                                                                    <polyline class="st0" points="10,9 9,9 8,9 "/>
                                                                </svg>
                                                                <h3> <span>Reading: </span> Ut enim ad minim veniam</h3>
                                                            </div>
                                                            <div class="course__curriculum-meta">
                                                                <span class="time"> <i class="icon_clock_alt"></i> 22 minutes</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion" id="course__accordion-2">
                                            <div class="accordion-item mb-50">
                                                <h2 class="accordion-header" id="week-02">
                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#week-02-content" aria-expanded="true" aria-controls="week-02-content">
                                                        Week 02
                                                    </button>
                                                </h2>
                                                <div id="week-02-content" class="accordion-collapse  collapse show" aria-labelledby="week-02" data-bs-parent="#course__accordion-2">
                                                    <div class="accordion-body">
                                                        <div class="course__curriculum-content d-sm-flex justify-content-between align-items-center">
                                                            <div class="course__curriculum-info">
                                                                <svg class="document" viewBox="0 0 24 24">
                                                                    <path class="st0" d="M14,2H6C4.9,2,4,2.9,4,4v16c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V8L14,2z"/>
                                                                    <polyline class="st0" points="14,2 14,8 20,8 "/>
                                                                    <line class="st0" x1="16" y1="13" x2="8" y2="13"/>
                                                                    <line class="st0" x1="16" y1="17" x2="8" y2="17"/>
                                                                    <polyline class="st0" points="10,9 9,9 8,9 "/>
                                                                </svg>
                                                                <h3> <span>Reading:</span> Ut enim ad minim veniam</h3>
                                                            </div>
                                                            <div class="course__curriculum-meta">
                                                                <span class="time"> <i class="icon_clock_alt"></i> 14 minutes</span>
                                                            </div>
                                                        </div>
                                                        <div class="course__curriculum-content d-sm-flex justify-content-between align-items-center">
                                                            <div class="course__curriculum-info">
                                                                <svg viewBox="0 0 24 24">
                                                                    <polygon class="st0" points="23,7 16,12 23,17 "/>
                                                                    <path class="st0" d="M3,5h11c1.1,0,2,0.9,2,2v10c0,1.1-0.9,2-2,2H3c-1.1,0-2-0.9-2-2V7C1,5.9,1.9,5,3,5z"/>
                                                                </svg>
                                                                <h3> <span>Video: </span> Greetings and introduction</h3>
                                                            </div>
                                                            <div class="course__curriculum-meta">
                                                                <span class="time"> <i class="icon_clock_alt"></i> 15 minutes</span>
                                                            </div>
                                                        </div>
                                                        <div class="course__curriculum-content d-sm-flex justify-content-between align-items-center">
                                                            <div class="course__curriculum-info">
                                                                <svg viewBox="0 0 16 16">
                                                                    <path class="st0" d="M2,12V8c0-3.3,2.9-6,6.4-6s6.4,2.7,6.4,6v4"/>
                                                                    <path class="st0" d="M14.8,12.7c0,0.7-0.6,1.3-1.4,1.3h-0.7c-0.8,0-1.4-0.6-1.4-1.3v-2c0-0.7,0.6-1.3,1.4-1.3h2.1V12.7z M2,12.7  C2,13.4,2.6,14,3.3,14H4c0.7,0,1.3-0.6,1.3-1.3v-2c0-0.7-0.6-1.3-1.3-1.3H2V12.7z"/>
                                                                </svg>
                                                                <h3> <span>Audio:</span> Interactive lesson</h3>
                                                            </div>
                                                            <div class="course__curriculum-meta">
                                                                <span class="time"> <i class="icon_clock_alt"></i> 7 minutes</span>
                                                                <span class="question">2 questions</span>
                                                            </div>
                                                        </div>
                                                        <div class="course__curriculum-content d-sm-flex justify-content-between align-items-center">
                                                            <div class="course__curriculum-info">
                                                                <svg class="document" viewBox="0 0 24 24">
                                                                    <path class="st0" d="M14,2H6C4.9,2,4,2.9,4,4v16c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V8L14,2z"/>
                                                                    <polyline class="st0" points="14,2 14,8 20,8 "/>
                                                                    <line class="st0" x1="16" y1="13" x2="8" y2="13"/>
                                                                    <line class="st0" x1="16" y1="17" x2="8" y2="17"/>
                                                                    <polyline class="st0" points="10,9 9,9 8,9 "/>
                                                                </svg>
                                                                <h3> <span>Reading: </span> Ut enim ad minim veniam</h3>
                                                            </div>
                                                            <div class="course__curriculum-meta">
                                                                <span class="time"> <i class="icon_clock_alt"></i> 22 minutes</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4">
                    <div class="course__sidebar pl-70 p-relative">
                        <div class="course__shape">
                            <img class="course-dot" src="assets/img/course/course-dot.png" alt="">
                        </div>
                        <div class="course__sidebar-widget-2 white-bg mb-20">
                            <div class="course__video">
                                <div class="course__video-thumb w-img mb-25">
                                    <img src="assets/img/course/video/course-video.jpg" alt="">
                                    <div class="course__video-play">
                                        <a href="https://www.youtube.com/watch?v=Zv11L-ZfrSg" class="play-btn popup-video"> <i class="fas fa-play"></i> </a>
                                    </div>
                                </div>
                                <div class="course__video-meta mb-25 d-flex align-items-center justify-content-between">
                                    <div class="course__video-price">
                                        <h5>RS{{$course->price}} </h5>
                                    </div>

                                </div>
                                <div class="course__video-content mb-35">
                                    <ul>
                                        <li class="d-flex align-items-center">
                                            <div class="course__video-icon">
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16" style="enable-background:new 0 0 16 16;" xml:space="preserve">
                                             <path class="st0" d="M2,6l6-4.7L14,6v7.3c0,0.7-0.6,1.3-1.3,1.3H3.3c-0.7,0-1.3-0.6-1.3-1.3V6z"/>
                                                    <polyline class="st0" points="6,14.7 6,8 10,8 10,14.7 "/>
                                          </svg>
                                            </div>
                                            <div class="course__video-info">
                                                <h5><span>Instructor :</span> {{$course->instructor}}</h5>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <div class="course__video-icon">
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">

                                             <path class="st0" d="M4,19.5C4,18.1,5.1,17,6.5,17H20"/>
                                                    <path class="st0" d="M6.5,2H20v20H6.5C5.1,22,4,20.9,4,19.5v-15C4,3.1,5.1,2,6.5,2z"/>
                                          </svg>
                                            </div>
                                            <div class="course__video-info">
                                                <h5><span>Lectures :</span>{{$course->videos->count()}}</h5>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <div class="course__video-icon">
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16" style="enable-background:new 0 0 16 16;" xml:space="preserve">
                                             <circle class="st0" cx="8" cy="8" r="6.7"/>
                                                    <polyline class="st0" points="8,4 8,8 10.7,9.3 "/>
                                          </svg>
                                            </div>
                                            <div class="course__video-info">
                                                <h5><span>Duration :</span>6 weeks</h5>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <div class="course__video-icon">
                                                <svg>
                                                    <path class="st0" d="M13.3,14v-1.3c0-1.5-1.2-2.7-2.7-2.7H5.3c-1.5,0-2.7,1.2-2.7,2.7V14"/>
                                                    <circle class="st0" cx="8" cy="4.7" r="2.7"/>
                                                </svg>
                                            </div>
                                            <div class="course__video-info">
                                                <h5><span>Enrolled :</span>20 students</h5>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <div class="course__video-icon">
                                                <svg>
                                                    <circle class="st0" cx="8" cy="8" r="6.7"/>
                                                    <line class="st0" x1="1.3" y1="8" x2="14.7" y2="8"/>
                                                    <path class="st0" d="M8,1.3c1.7,1.8,2.6,4.2,2.7,6.7c-0.1,2.5-1,4.8-2.7,6.7C6.3,12.8,5.4,10.5,5.3,8C5.4,5.5,6.3,3.2,8,1.3z"/>
                                                </svg>
                                            </div>
                                            <div class="course__video-info">
                                                <h5><span>Language :</span>English</h5>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="course__payment mb-35">
                                    <h3>Payment:</h3>
                                    <a href="#">
                                        <img src="assets/img/course/payment/payment-1.png" alt="">
                                    </a>
                                </div>
                                <div class="course__enroll-btn">
                                    <button type="button" class="tp-btn w-100 text-center" data-bs-toggle="modal" data-bs-target="#course_enroll_modal">Enroll <i class="far fa-arrow-right"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="course__sidebar-widget-2 white-bg mb-20">
                            <div class="course__sidebar-course">
                                <h3 class="course__sidebar-title">Related courses</h3>
                                <ul>
                                    @forelse(\App\Models\Backend\Course::latest()->take(5)->get() as $post )
                                    <li>
                                        <div class="course__sm d-flex align-items-center mb-30">
                                            <div class="course__sm-thumb mr-20">
                                                <a href="{{route('site.course-details',$course->slug)}}">
                                                    @if($course->firstMedia)
                                                        <img
                                                            src="{{asset('assets/images/admin/courses/'.$course->firstMedia->file_name)}}"
                                                            width="60" height="60" alt="{{$post->title}}">
                                                    @else
                                                        <img src="{{asset('assets/images/noImage.jpg')}}" width="60" height="60"
                                                             alt="{{$course->title}}">
                                                    @endif
                                                </a>
                                            </div>
                                            <div class="course__sm-content">

                                                <h5><a href="{{route('site.course-details',$course->slug)}}">{{$course->title}}</a></h5>
                                                <div class="course__sm-price">
                                                    <span>RS {{$course->price}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    @empty
                                        <h5><span class="text-center">لم يتم العثور على دورات </span></h5>
                                    @endforelse

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- course area end -->

    <!-- course enroll popup start -->
    <div class="course__popup">
        <!-- Modal -->
        <div class="modal fade" id="course_enroll_modal" tabindex="-1" aria-labelledby="course_enroll_modal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="course__popup-wrapper p-relative">
                        <div class="course__popup-close">
                            <button type="button" class="course__popup-close-btn" data-bs-toggle="modal" data-bs-target="#course_enroll_modal"><i class="fa-light fa-xmark"></i></button>
                        </div>
                        <div class="course__popup-top d-flex align-items-start mb-40">
                            <div class="course__popup-thumb mr-20">

                                <img src="assets/img/course/course-sm-1.jpg" alt="">
                            </div>
                            <div class="course__popup-content">
                                <h3 class="course__popup-title">
                                    <a href="#">Mechanical Engineering and Electrical Engineering Explained</a>
                                </h3>
                                <div class="course__sm-rating">
                                    <ul>
                                        <li><a href="#"> <i class="fa-solid fa-star"></i> </a></li>
                                        <li><a href="#"> <i class="fa-solid fa-star"></i> </a></li>
                                        <li><a href="#"> <i class="fa-solid fa-star"></i> </a></li>
                                        <li><a href="#"> <i class="fa-solid fa-star"></i> </a></li>
                                        <li><a href="#"> <i class="fa-solid fa-star"></i> </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="course__popup-info">
                            <form action="#">
                                <div class="row gx-3">
                                    <div class="col-xl-12">
                                        <div class="course__popup-input">
                                            <input type="email" placeholder="Email">
                                            <span class="course__popup-input-icon"><i class="fa-light fa-envelope"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-xxl-12">
                                        <div class="course__popup-input">
                                            <input type="text" placeholder="Card Number">
                                            <span class="course__popup-input-icon"><i class="fa-light fa-credit-card"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6">
                                        <div class="course__popup-input">
                                            <input type="text" placeholder="MM/YY">
                                            <span class="course__popup-input-icon"><i class="fa-light fa-calendar-days"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6">
                                        <div class="course__popup-input">
                                            <input type="text" placeholder="CVC">
                                            <span class="course__popup-input-icon"><i class="fa-light fa-lock"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-xxl-12">
                                        <div class="course__popup-btn">
                                            <button type="submit" class="tp-btn w-100">Pay $10.00</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- course enroll popup end -->


@endsection
