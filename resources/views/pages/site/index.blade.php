@extends('layouts.app')

@section('style')

    <style>
        p{
            word-wrap:break-word;
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
                        <span>The Leader in Online Learning</span>
                        <h3 class="slider__title-2">Build an Incredible Learning Experience</h3>
                        <p>The right mentoring relationship can be a powerful tool for Professional growth. Bark up the
                            right tree.</p>
                        <a href="course-v1.html" class="tp-btn-green">Explore Coureses</a>
                    </div>
                </div>
                <div class="col-xxl-6 col-lg-6">
                    <div class="slider__thumb-2 p-relative">
                        <div class="slider__shape">
                            <img class="slider__shape-1" src="{{asset('assets/site/img/slider/2/shape/slider-cap-1.png')}}" alt="">
                            <img class="slider__shape-2" src="{{asset('assets/site/img/slider/2/shape/slider-cap-2.png')}}" alt="">
                            <img class="slider__shape-3" src="{{asset('assets/site/img/slider/2/shape/slider-cap-3.png')}}" alt="">
                            <img class="slider__shape-4" src="{{asset('assets/site/img/slider/2/shape/slider-shape-1.jpg')}}" alt="">
                            <img class="slider__shape-5" src="{{asset('assets/site/img/slider/2/shape/slider-shape-2.jpg')}}" alt="">
                        </div>
                        <span class="slider__thumb-mask">
                           <img src="{{asset('assets/site/img/slider/2/slider-thumb.png')}}" alt="">
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
                    <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6">
                        <div class="counter__item d-flex align-items-start counter__item-border counter__item-border-2">
                            <div class="counter__icon counter__icon-2 mr-15">
                                <svg width="38" height="39" viewBox="0 0 38 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M37 19.1667C37 9.23075 28.936 1.16675 19 1.16675C9.064 1.16675 1 9.23075 1 19.1667C1 29.1027 9.064 37.1667 19 37.1667" stroke="#031220" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M11.8 2.9668H13.6C10.09 13.4788 10.09 24.8548 13.6 35.3668H11.8" stroke="#031220" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M24.4 2.9668C26.146 8.2228 27.028 13.6948 27.028 19.1668" stroke="#031220" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M2.80005 26.3667V24.5667C8.05605 26.3127 13.528 27.1947 19 27.1947" stroke="#031220" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M2.80005 13.7665C13.312 10.2565 24.688 10.2565 35.2001 13.7665" stroke="#031220" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path class="search" d="M30.16 36.0867C33.3412 36.0867 35.92 33.5078 35.92 30.3267C35.92 27.1455 33.3412 24.5667 30.16 24.5667C26.9789 24.5667 24.4 27.1455 24.4 30.3267C24.4 33.5078 26.9789 36.0867 30.16 36.0867Z" stroke="#3D6CE7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path class="search" d="M37.0001 37.1667L35.2001 35.3667" stroke="#3D6CE7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="counter__content counter__content-2">
                                <h4><span class="counter">17</span>+</h4>
                                <p>Years of Language Education Experience</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6">
                        <div class="counter__item d-flex align-items-start counter__item-border counter__item-border-2">
                            <div class="counter__icon counter__icon-2 mr-15">
                                <svg width="50" height="38" viewBox="0 0 50 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.6984 27.5676V25.3757H16.1609V27.5676H14.6984Z" fill="#031220" stroke="#F5F6F8" stroke-width="0.1"/>
                                    <path d="M18.9289 27.5676V25.3757H20.3914V27.5676H18.9289Z" fill="#031220" stroke="#F5F6F8" stroke-width="0.1"/>
                                    <path d="M17.5234 25.9512C14.1936 25.9512 11.7765 23.4538 11.7765 20.0065V19.0436H13.239V20.0065C13.239 21.2677 13.6787 22.3416 14.436 23.1004C15.1932 23.8591 16.2649 24.2997 17.5234 24.2997C18.7821 24.2997 19.8538 23.8591 20.611 23.1004C21.3682 22.3416 21.8078 21.2677 21.8078 20.0065V14.6279H23.2703V20.006C23.2707 23.4538 20.8532 25.9512 17.5234 25.9512Z" fill="#031220" stroke="#F5F6F8" stroke-width="0.1"/>
                                    <path d="M15.2448 8.89414L25.4444 8.89327V12.1213C25.4444 14.2014 23.9423 15.8832 22.1085 15.8832H13.9511C13.5654 15.8832 13.262 16.2371 13.262 16.6588V23.2591L9.42375 18.0384V13.3221C9.42375 11.6064 10.6626 10.221 12.1734 10.221H12.6784H12.7032L12.7182 10.2013C13.3495 9.37396 14.2661 8.89414 15.2448 8.89414ZM10.8859 17.4764H10.911L11.7096 18.5626L11.7999 18.6854V18.533V16.6588C11.7999 15.3145 12.7704 14.2316 13.9515 14.2316H22.1085C23.1468 14.2316 23.9816 13.2789 23.9816 12.1213V10.5948V10.5448H23.9316L15.2445 10.5448L15.2444 10.5448C14.6109 10.5457 14.0256 10.9051 13.6774 11.5015C13.6774 11.5015 13.6774 11.5015 13.6774 11.5015L13.4607 11.8725H12.173C11.4577 11.8725 10.8859 12.5288 10.8859 13.3221V17.4264V17.4764Z" fill="#031220" stroke="#F5F6F8" stroke-width="0.1"/>
                                    <path d="M42.9272 32.716V21.0804H44.3897V32.716H42.9272Z" fill="#031220" stroke="#F5F6F8" stroke-width="0.1"/>
                                    <path d="M7.07152 32.7159H5.60862V6.08232C5.60862 4.82863 6.51389 3.81892 7.61448 3.81892H26.0965V5.4705H7.61487C7.3095 5.4705 7.07152 5.75095 7.07152 6.08232V32.7159Z" fill="#031220" stroke="#F5F6F8" stroke-width="0.1"/>
                                    <path d="M10.2844 32.0648H8.82229V30.104C8.82229 28.2623 10.2812 26.7664 12.0711 26.7664H23.1184C24.9083 26.7664 26.3668 28.2627 26.3668 30.104V31.5266H24.9043V30.104C24.9043 29.1711 24.1002 28.418 23.1184 28.418H12.0707C11.0885 28.418 10.2844 29.1715 10.2844 30.104V32.0648Z" fill="#031220" stroke="#F5F6F8" stroke-width="0.1"/>
                                    <path d="M0.34435 35.8766L0.344278 35.8765L0.05 35.6292V31.807H49.95V35.6292L49.6558 35.8773C49.5603 35.9573 49.0814 36.3514 48.4465 36.7253C47.81 37.1002 47.0245 37.4499 46.3141 37.4499H3.68516C2.9745 37.4499 2.18909 37.1002 1.55278 36.7252C0.918101 36.3512 0.439536 35.9568 0.34435 35.8766ZM1.5125 34.7592V34.7844L1.5328 34.7994C1.84194 35.0277 2.22749 35.2768 2.61064 35.469C2.99207 35.6603 3.3778 35.7988 3.68516 35.7988H46.3145C46.6216 35.7988 47.0073 35.6603 47.3888 35.469C47.772 35.2768 48.1578 35.0277 48.4676 34.7994L48.4879 34.7844V34.7592V33.509V33.459H48.4379H1.5625H1.5125V33.509V34.7592Z" fill="#031220" stroke="#F5F6F8" stroke-width="0.1"/>
                                    <path class="video" d="M31.8141 23.2115V19.0489V18.9989H31.7641H30.2215C29.1088 18.9989 28.1863 17.876 28.1863 16.4732V2.57745C28.1863 1.17324 29.1089 0.05 30.2215 0.05H45.3773C46.4916 0.05 47.4164 1.17335 47.4164 2.57745V16.4732C47.4164 17.8759 46.492 18.9989 45.3773 18.9989H36.2426H36.2225L36.208 19.0127L31.8141 23.2115ZM30.1715 1.70158V1.70539C30.0271 1.72498 29.9017 1.82807 29.8117 1.97022C29.7108 2.12959 29.6488 2.34555 29.6488 2.57789V16.4732C29.6488 16.7051 29.7108 16.9206 29.8117 17.0797C29.912 17.2377 30.0562 17.3473 30.2215 17.3473H33.2766V19.5336V19.6506L33.3611 19.5698L35.6865 17.3473H45.3769C45.543 17.3473 45.6882 17.2379 45.7893 17.0798C45.891 16.9208 45.9535 16.7052 45.9535 16.4732V2.57745C45.9535 2.34526 45.8911 2.12925 45.7895 1.96982C45.6885 1.81136 45.5433 1.70158 45.3769 1.70158H30.2215H30.1715Z" fill="#3D6CE7" stroke="#F5F6F8" stroke-width="0.1"/>
                                    <path class="video" d="M36.2705 6.36712L36.1933 6.3168V6.40902V11.6887V11.7809L36.2705 11.7306L40.3256 9.09143L40.39 9.04954L40.3256 9.00763L36.2705 6.36712ZM43.318 9.04952L34.7308 14.6386V3.45831L43.318 9.04952Z" fill="#3D6CE7" stroke="#F5F6F8" stroke-width="0.1"/>
                                </svg>
                            </div>
                            <div class="counter__content counter__content-2">
                                <h4><span class="counter">26</span>k</h4>
                                <p>Innovative Foreign Online Courses</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6">
                        <div class="counter__item d-flex align-items-start counter__item-border counter__item-border-2">
                            <div class="counter__icon counter__icon-2 mr-15">
                                <svg width="44" height="41" viewBox="0 0 44 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M23.3422 18.3518C23.5378 18.3322 23.7725 18.3322 23.9877 18.3518C28.6435 18.1953 32.3408 14.3806 32.3408 9.68568C32.3408 4.89291 28.4675 1 23.6551 1C18.8624 1 14.9695 4.89291 14.9695 9.68568C14.989 14.3806 18.6863 18.1953 23.3422 18.3518Z" stroke="#031220" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M10.8983 4.91248C7.10324 4.91248 4.05152 7.98376 4.05152 11.7593C4.05152 15.4566 6.98587 18.4692 10.644 18.6061C10.8005 18.5866 10.9766 18.5866 11.1526 18.6061" stroke="#031220" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M33.1235 25.5703C37.8576 28.7394 37.8576 33.9039 33.1235 37.0534C27.7438 40.6529 18.9212 40.6529 13.5416 37.0534C8.80748 33.8843 8.80748 28.7198 13.5416 25.5703C18.9016 21.9904 27.7243 21.9904 33.1235 25.5703Z" stroke="#031220" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M7.12298 36.2123C5.71449 35.9188 4.38426 35.3515 3.28876 34.5103C0.237038 32.2215 0.237038 28.446 3.28876 26.1572C4.36469 25.3356 5.67537 24.7879 7.06429 24.4749" stroke="#031220" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path class="star" d="M35.8077 22.6875L37.3377 25.7729C37.5464 26.2024 38.1027 26.6143 38.5722 26.6932L41.3454 27.1578C43.1188 27.4558 43.5361 28.7531 42.2582 30.0328L40.1022 32.2066C39.7371 32.5747 39.5372 33.2847 39.6502 33.7931L40.2674 36.484C40.7542 38.614 39.6328 39.4379 37.7637 38.3247L35.1644 36.7733C34.6949 36.4928 33.9212 36.4928 33.4431 36.7733L30.8437 38.3247C28.9834 39.4379 27.8532 38.6052 28.34 36.484L28.9573 33.7931C29.0703 33.2847 28.8703 32.5747 28.5052 32.2066L26.3492 30.0328C25.08 28.7531 25.4886 27.4558 27.2621 27.1578L30.0353 26.6932C30.496 26.6143 31.0524 26.2024 31.261 25.7729L32.7911 22.6875C33.6256 21.0133 34.9818 21.0133 35.8077 22.6875Z" fill="#F5F6F8" stroke="#3D6CE7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="counter__content counter__content-2">
                                <h4><span class="counter">44</span>+</h4>
                                <p>Qualified Teachers and language experts</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6">
                        <div class="counter__item d-flex align-items-start">
                            <div class="counter__icon counter__icon-2 mr-15">
                                <svg x="0px" y="0px"
                                     viewBox="0 0 67.4 70.6" xml:space="preserve">
                          <path class="st0" d="M59.7,25.4c0,0.1,0.4,2.8,6.4,12.2c0.6,0.8,0.8,1.8,0.6,2.8c-0.1,0.5-0.4,1-0.7,1.4c-0.3,0.4-0.8,0.8-1.2,1
                             c-1.7,0.9-3.4,1.8-5.2,2.5c0.4,3.7,0.4,7.4,0,11.1c-0.7,3.7-7.1,4.3-10.8,4.3c-0.3,0-0.7,0-1,0.1c-0.3,0.1-0.6,0.3-0.8,0.5
                             c-0.2,0.2-0.4,0.5-0.5,0.8c-0.1,0.3-0.2,0.6-0.1,1v5c0,0.1,0,0.3-0.1,0.4c0,0.1-0.1,0.2-0.2,0.4c-0.1,0.1-0.2,0.2-0.3,0.2
                             c-0.1,0.1-0.3,0.1-0.4,0.1s-0.3,0-0.4-0.1c-0.1-0.1-0.2-0.1-0.3-0.2c-0.1-0.1-0.2-0.2-0.2-0.4c0-0.1-0.1-0.3-0.1-0.4v-5
                             c0-0.6,0.1-1.2,0.3-1.8c0.2-0.6,0.6-1.1,1-1.5c0.4-0.4,1-0.7,1.5-0.9c0.6-0.2,1.2-0.3,1.8-0.2c4.9,0,8.4-1,8.7-2.6
                             c0.7-3.6-0.1-10.8-0.1-11.3c0,0,0,0,0,0c0-0.2,0-0.5,0.1-0.7c0.1-0.2,0.3-0.3,0.5-0.4c1.9-0.8,3.8-1.7,5.6-2.7
                             c0.2-0.1,0.4-0.3,0.6-0.4c0.2-0.2,0.3-0.4,0.4-0.6c0.1-0.4,0-0.9-0.3-1.2c-6.4-10.1-6.8-12.9-6.8-13.2C55.1,4.4,38,2.7,32.8,2.7
                             c-0.5,0-0.9,0-1.2,0l0,0c-0.2,0-0.4,0-0.5,0c-3.2,0-15.6,0.7-21.9,10.1h11c0.8,0,1.6,0.2,2.3,0.6c0.7,0.4,1.3,0.9,1.8,1.5
                             c0.5-0.6,1.1-1.2,1.8-1.5c0.7-0.4,1.5-0.6,2.3-0.6h18c0.3,0,0.5,0.1,0.7,0.3c0.2,0.2,0.3,0.5,0.3,0.7V52c0,0.1,0,0.3-0.1,0.4
                             c-0.1,0.1-0.1,0.2-0.2,0.3c-0.1,0.1-0.2,0.2-0.3,0.2c-0.1,0.1-0.3,0.1-0.4,0.1h-18c-0.8,0-1.6,0.3-2.2,0.9s-0.9,1.4-0.9,2.2
                             c0,0.3-0.1,0.5-0.3,0.7c-0.2,0.2-0.5,0.3-0.7,0.3c-0.3,0-0.5-0.1-0.7-0.3c-0.2-0.2-0.3-0.4-0.3-0.7c0-0.8-0.3-1.6-0.9-2.2
                             c-0.6-0.6-1.4-0.9-2.2-0.9h-4.5c0,0,0,0,0,0.1c0,0,0.1,0.1,0.1,0.1c2.2,4.8,2.3,14.5,2.3,14.9c0,0.3-0.1,0.5-0.3,0.7
                             c-0.2,0.2-0.5,0.3-0.7,0.3h0c-0.3,0-0.5-0.1-0.7-0.3c-0.2-0.2-0.3-0.5-0.3-0.7l0,0c0-0.2-0.1-9.7-2.1-14c-0.2-0.4-0.4-0.7-0.6-1.1
                             H2.2c-0.3,0-0.5-0.1-0.7-0.3c-0.2-0.2-0.3-0.5-0.3-0.7V13.9c0-0.3,0.1-0.5,0.3-0.7c0.2-0.2,0.5-0.3,0.7-0.3h4.5
                             C13.5,1.2,28.8,0.7,31,0.7l0.5,0c0.3,0,0.8,0,1.3,0C38.4,0.7,57,2.5,59.7,25.4z M26.2,15.8c-0.6,0.6-0.9,1.4-0.9,2.2v34
                             c0.9-0.7,2-1,3.1-1h17V14.9h-17C27.6,14.9,26.8,15.2,26.2,15.8z M22.4,15.8c-0.6-0.6-1.4-0.9-2.2-0.9h-17V51h17c1.1,0,2.2,0.4,3.1,1
                             V18C23.3,17.2,22.9,16.4,22.4,15.8z M7.7,22.2h11.1c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.5,0.3-0.7c0-0.3-0.1-0.5-0.3-0.7
                             c-0.2-0.2-0.5-0.3-0.7-0.3H7.7c-0.3,0-0.5,0.1-0.7,0.3s-0.3,0.5-0.3,0.7c0,0.3,0.1,0.5,0.3,0.7C7.2,22.1,7.4,22.2,7.7,22.2z
                              M7.7,30.1h11.1c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.5,0.3-0.7s-0.1-0.5-0.3-0.7C19.3,28.1,19,28,18.8,28H7.7
                             c-0.3,0-0.5,0.1-0.7,0.3c-0.2,0.2-0.3,0.5-0.3,0.7s0.1,0.5,0.3,0.7C7.1,30,7.4,30.1,7.7,30.1z M18.8,37.9H7.7c-0.1,0-0.3,0-0.4-0.1
                             c-0.1-0.1-0.2-0.1-0.3-0.2c-0.1-0.1-0.2-0.2-0.2-0.3c-0.1-0.1-0.1-0.3-0.1-0.4c0-0.1,0-0.3,0.1-0.4c0.1-0.1,0.1-0.2,0.2-0.3
                             c0.1-0.1,0.2-0.2,0.3-0.2c0.1-0.1,0.3-0.1,0.4-0.1h11.1c0.1,0,0.3,0,0.4,0.1c0.1,0.1,0.2,0.1,0.3,0.2c0.1,0.1,0.2,0.2,0.2,0.3
                             c0.1,0.1,0.1,0.3,0.1,0.4c0,0.1,0,0.3-0.1,0.4c-0.1,0.1-0.1,0.2-0.2,0.3c-0.1,0.1-0.2,0.2-0.3,0.2C19,37.9,18.9,37.9,18.8,37.9z
                              M7.7,45.8h11.1c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.5,0.3-0.7s-0.1-0.5-0.3-0.7c-0.2-0.2-0.5-0.3-0.7-0.3H7.7
                             c-0.3,0-0.5,0.1-0.7,0.3c-0.2,0.2-0.3,0.5-0.3,0.7s0.1,0.5,0.3,0.7C7.1,45.7,7.4,45.8,7.7,45.8z M40.9,22.2H29.8
                             c-0.3,0-0.5-0.1-0.7-0.3c-0.2-0.2-0.3-0.5-0.3-0.7c0-0.3,0.1-0.5,0.3-0.7c0.2-0.2,0.5-0.3,0.7-0.3h11.1c0.3,0,0.5,0.1,0.7,0.3
                             s0.3,0.5,0.3,0.7c0,0.3-0.1,0.5-0.3,0.7C41.5,22.1,41.2,22.2,40.9,22.2z M29.8,30.1h11.1c0.3,0,0.5-0.1,0.7-0.3
                             c0.2-0.2,0.3-0.5,0.3-0.7s-0.1-0.5-0.3-0.7c-0.2-0.2-0.5-0.3-0.7-0.3H29.8c-0.3,0-0.5,0.1-0.7,0.3c-0.2,0.2-0.3,0.5-0.3,0.7
                             s0.1,0.5,0.3,0.7C29.3,30,29.6,30.1,29.8,30.1z M40.9,37.9H29.8c-0.1,0-0.3,0-0.4-0.1c-0.1-0.1-0.2-0.1-0.3-0.2
                             c-0.1-0.1-0.2-0.2-0.2-0.3c-0.1-0.1-0.1-0.3-0.1-0.4c0-0.1,0-0.3,0.1-0.4c0.1-0.1,0.1-0.2,0.2-0.3c0.1-0.1,0.2-0.2,0.3-0.2
                             c0.1-0.1,0.3-0.1,0.4-0.1h11.1c0.1,0,0.3,0,0.4,0.1c0.1,0.1,0.2,0.1,0.3,0.2c0.1,0.1,0.2,0.2,0.2,0.3c0.1,0.1,0.1,0.3,0.1,0.4
                             c0,0.1,0,0.3-0.1,0.4c-0.1,0.1-0.1,0.2-0.2,0.3c-0.1,0.1-0.2,0.2-0.3,0.2C41.2,37.9,41,37.9,40.9,37.9z M29.8,45.8h5.5
                             c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.5,0.3-0.7s-0.1-0.5-0.3-0.7c-0.2-0.2-0.5-0.3-0.7-0.3h-5.5c-0.3,0-0.5,0.1-0.7,0.3
                             c-0.2,0.2-0.3,0.5-0.3,0.7s0.1,0.5,0.3,0.7C29.3,45.7,29.6,45.8,29.8,45.8z"/>
                                    <path class="st1" d="M7.7,22.2h11.1c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.5,0.3-0.7c0-0.3-0.1-0.5-0.3-0.7c-0.2-0.2-0.5-0.3-0.7-0.3
                             H7.7c-0.3,0-0.5,0.1-0.7,0.3s-0.3,0.5-0.3,0.7c0,0.3,0.1,0.5,0.3,0.7C7.2,22.1,7.4,22.2,7.7,22.2z"/>
                                    <path class="st1" d="M7.7,30.1h11.1c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.5,0.3-0.7s-0.1-0.5-0.3-0.7C19.3,28.1,19,28,18.8,28H7.7
                             c-0.3,0-0.5,0.1-0.7,0.3c-0.2,0.2-0.3,0.5-0.3,0.7s0.1,0.5,0.3,0.7C7.1,30,7.4,30.1,7.7,30.1z"/>
                                    <path class="st1" d="M7.7,37.9h11.1c0.1,0,0.3,0,0.4-0.1c0.1-0.1,0.2-0.1,0.3-0.2c0.1-0.1,0.2-0.2,0.2-0.3c0.1-0.1,0.1-0.3,0.1-0.4
                             c0-0.1,0-0.3-0.1-0.4c-0.1-0.1-0.1-0.2-0.2-0.3c-0.1-0.1-0.2-0.2-0.3-0.2c-0.1-0.1-0.3-0.1-0.4-0.1H7.7c-0.1,0-0.3,0-0.4,0.1
                             C7.2,36,7.1,36.1,7,36.2c-0.1,0.1-0.2,0.2-0.2,0.3c-0.1,0.1-0.1,0.3-0.1,0.4c0,0.1,0,0.3,0.1,0.4c0.1,0.1,0.1,0.2,0.2,0.3
                             c0.1,0.1,0.2,0.2,0.3,0.2C7.4,37.9,7.6,37.9,7.7,37.9L7.7,37.9z"/>
                                    <path class="st1" d="M7.7,45.8h11.1c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.5,0.3-0.7s-0.1-0.5-0.3-0.7c-0.2-0.2-0.5-0.3-0.7-0.3H7.7
                             c-0.3,0-0.5,0.1-0.7,0.3c-0.2,0.2-0.3,0.5-0.3,0.7s0.1,0.5,0.3,0.7C7.1,45.7,7.4,45.8,7.7,45.8L7.7,45.8z"/>
                                    <path class="st1" d="M29.8,22.2h11.1c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.5,0.3-0.7c0-0.3-0.1-0.5-0.3-0.7s-0.5-0.3-0.7-0.3H29.8
                             c-0.3,0-0.5,0.1-0.7,0.3c-0.2,0.2-0.3,0.5-0.3,0.7c0,0.3,0.1,0.5,0.3,0.7C29.3,22.1,29.6,22.2,29.8,22.2L29.8,22.2z"/>
                                    <path class="st1" d="M29.8,30.1h11.1c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.5,0.3-0.7s-0.1-0.5-0.3-0.7c-0.2-0.2-0.5-0.3-0.7-0.3
                             H29.8c-0.3,0-0.5,0.1-0.7,0.3c-0.2,0.2-0.3,0.5-0.3,0.7s0.1,0.5,0.3,0.7C29.3,30,29.6,30.1,29.8,30.1z"/>
                                    <path class="st1" d="M29.8,37.9h11.1c0.1,0,0.3,0,0.4-0.1c0.1-0.1,0.2-0.1,0.3-0.2c0.1-0.1,0.2-0.2,0.2-0.3c0.1-0.1,0.1-0.3,0.1-0.4
                             c0-0.1,0-0.3-0.1-0.4c-0.1-0.1-0.1-0.2-0.2-0.3c-0.1-0.1-0.2-0.2-0.3-0.2c-0.1-0.1-0.3-0.1-0.4-0.1H29.8c-0.1,0-0.3,0-0.4,0.1
                             c-0.1,0.1-0.2,0.1-0.3,0.2c-0.1,0.1-0.2,0.2-0.2,0.3c-0.1,0.1-0.1,0.3-0.1,0.4c0,0.1,0,0.3,0.1,0.4c0.1,0.1,0.1,0.2,0.2,0.3
                             c0.1,0.1,0.2,0.2,0.3,0.2C29.6,37.9,29.7,37.9,29.8,37.9L29.8,37.9z"/>
                                    <path class="st1" d="M29.8,45.8h5.5c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.5,0.3-0.7s-0.1-0.5-0.3-0.7c-0.2-0.2-0.5-0.3-0.7-0.3h-5.5
                             c-0.3,0-0.5,0.1-0.7,0.3c-0.2,0.2-0.3,0.5-0.3,0.7s0.1,0.5,0.3,0.7C29.3,45.7,29.6,45.8,29.8,45.8L29.8,45.8z"/>
                          </svg>
                            </div>
                            <div class="counter__content counter__content-2">
                                <h4><span class="counter">52</span>+</h4>
                                <p>Learners Enrolled in Educal Courses</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- counter area end -->

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


    <!-- research area start -->
    <section class="research__area pt-115 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-6">
                    <div class="research__wrapper-2">
                        <div class="section__title-wrapper-2">
                            <span class="section__title-pre-2">Discover Research</span>
                            <h3 class="section__title-2">More then just learning</h3>
                        </div>
                        <p>Learn from anywhere in the world on desktop, or mobile phone with an Internet connection.</p>
                        <div class="research__btn-2 mb-70">
                            <a href="contact.html" class="tp-btn-5 tp-btn-6">Get started now</a>
                        </div>

                        <div class="research__download">
                            <div class="research__download-bg include-bg"
                                 data-background="assets/img/research/2/research-bg.jpg"></div>
                            <div class="research__content-2 p-relative z-index-1">
                                <h3 class="research__title-2">Start Learning by Downloading Apps</h3>
                                <div class="research__store">
                                    <ul>
                                        <li>
                                            <a href="#"><img src="{{asset('assets/site/img/icon/google-play-store.png')}}"
                                                             alt="google-play-store"> Google play</a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="{{asset('assets/site/img/icon/apple-store.png')}}" alt="apple-store">Apple
                                                store</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="research__thumb-2">
                                <img src="{{asset('assets/site/img/research/2/research-1.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-5 offset-xxl-1 col-xl-5 offset-xl-1 col-lg-6">
                    <div class="research__features-wrapper pt-35">
                        <div class="research__features-item d-sm-flex align-items-start mb-40">
                            <div class="research__features-icon mr-25">
                              <span>
                                 <svg width="27" height="27" viewBox="0 0 27 27" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M26 13.9961V15.1656C26 19.8436 24.8875 21 20.45 21H6.55C2.1125 21 1 19.8305 1 15.1656V6.83443C1 2.16951 2.1125 1 6.55 1H8.5"
                                        stroke="#6151FB" stroke-width="1.6" stroke-linecap="round"
                                        stroke-linejoin="round"/>
                                    <path d="M13.5 21.5V25.5" stroke="#6151FB" stroke-width="1.6" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                    <path d="M1 14.75H26" stroke="#6151FB" stroke-width="1.6" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                    <path d="M7.875 26H19.125" stroke="#6151FB" stroke-width="1.6"
                                          stroke-linecap="round" stroke-linejoin="round"/>
                                    <path
                                        d="M20.825 10.2127H14.875C13.15 10.2127 12.575 9.0627 12.575 7.9127V3.5127C12.575 2.1377 13.7 1.0127 15.075 1.0127H20.825C22.1 1.0127 23.125 2.0377 23.125 3.31269V7.9127C23.125 9.1877 22.1 10.2127 20.825 10.2127Z"
                                        stroke="#6151FB" stroke-width="1.6" stroke-linecap="round"
                                        stroke-linejoin="round"/>
                                    <path
                                        d="M24.6375 8.39985L23.125 7.33735V3.88735L24.6375 2.82485C25.3875 2.31235 26 2.62485 26 3.53735V7.69985C26 8.61235 25.3875 8.92485 24.6375 8.39985Z"
                                        stroke="#6151FB" stroke-width="1.6" stroke-linecap="round"
                                        stroke-linejoin="round"/>
                                 </svg>
                              </span>
                            </div>
                            <div class="research__features-content">
                                <h4>Educal Online <br> Training from Experts </h4>
                                <p>Learn from anywhere in the world on desktop mobile Phone with an Internet
                                    connection.</p>
                            </div>
                        </div>
                        <div class="research__features-item d-sm-flex align-items-start mb-40">
                            <div class="research__features-icon mr-25">
                              <span class="yellow-bg">
                                 <svg width="28" height="27" viewBox="0 0 28 27" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11.4 19.746H6.47299C2.092 19.746 1 18.654 1 14.273V6.47299C1 2.092 2.092 1 6.47299 1H20.162C24.543 1 25.635 2.092 25.635 6.47299"
                                        stroke="#F4930E" stroke-width="1.7" stroke-linecap="round"
                                        stroke-linejoin="round"/>
                                    <path d="M11.3999 25.6218V19.7458" stroke="#F4930E" stroke-width="1.7"
                                          stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M1 14.5459H11.4" stroke="#F4930E" stroke-width="1.7" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                    <path d="M7.16211 25.6218H11.4001" stroke="#F4930E" stroke-width="1.7"
                                          stroke-linecap="round" stroke-linejoin="round"/>
                                    <path
                                        d="M26.9999 14.3509V21.7739C26.9999 24.8549 26.2329 25.6219 23.152 25.6219H18.537C15.456 25.6219 14.689 24.8549 14.689 21.7739V14.3509C14.689 11.2699 15.456 10.5029 18.537 10.5029H23.152C26.2329 10.5029 26.9999 11.2699 26.9999 14.3509Z"
                                        stroke="#F4930E" stroke-width="1.7" stroke-linecap="round"
                                        stroke-linejoin="round"/>
                                    <path d="M20.8179 21.4359H20.8296" stroke="#F4930E" stroke-width="2"
                                          stroke-linecap="round" stroke-linejoin="round"/>
                                 </svg>
                              </span>
                            </div>
                            <div class="research__features-content">
                                <h4>Over 2.4k <br> Video Course (all coures)</h4>
                                <p>Learn from anywhere in the world on desktop mobile Phone with an Internet
                                    connection.</p>
                            </div>
                        </div>
                        <div class="research__features-item d-sm-flex align-items-start">
                            <div class="research__features-icon mr-25">
                              <span class="green-bg">
                                 <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M14.6185 23.8234H7.24516C3.5585 23.8234 2.3335 21.3734 2.3335 18.9118V9.08842C2.3335 5.40176 3.5585 4.17676 7.24516 4.17676H14.6185C18.3052 4.17676 19.5302 5.40176 19.5302 9.08842V18.9118C19.5302 22.5984 18.2935 23.8234 14.6185 23.8234Z"
                                        stroke="#20AD96" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"/>
                                    <path
                                        d="M22.7736 19.9502L19.5303 17.6752V10.3135L22.7736 8.03849C24.3603 6.93015 25.6669 7.60682 25.6669 9.55515V18.4452C25.6669 20.3935 24.3603 21.0702 22.7736 19.9502Z"
                                        stroke="#20AD96" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"/>
                                    <path
                                        d="M13.4165 12.8345C14.383 12.8345 15.1665 12.051 15.1665 11.0845C15.1665 10.118 14.383 9.33447 13.4165 9.33447C12.45 9.33447 11.6665 10.118 11.6665 11.0845C11.6665 12.051 12.45 12.8345 13.4165 12.8345Z"
                                        stroke="#20AD96" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"/>
                                 </svg>
                              </span>
                            </div>
                            <div class="research__features-content">
                                <h4>Occasional <br>Video updates (2022)</h4>
                                <p>Learn from anywhere in the world on desktop mobile Phone with an Internet
                                    connection.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- research area end -->

    <!-- event area start -->
    <section class="event__area pt-115">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="section__title-wrapper-2 text-center mb-60">
                        <span class="section__title-pre-2">Featured Courses</span>
                        <h3 class="section__title-2">Join our upcoming event</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-12">
                    <div
                        class="event__item white-bg mb-10 transition-3 p-relative d-lg-flex align-items-center justify-content-between">
                        <div class="event__left d-sm-flex align-items-center">
                            <div class="event__date">
                                <h4>02</h4>
                                <p>October, 2022</p>
                            </div>
                            <div class="event__content">
                                <div class="event__meta">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M8.49992 9.51253C9.72047 9.51253 10.7099 8.52308 10.7099 7.30253C10.7099 6.08198 9.72047 5.09253 8.49992 5.09253C7.27937 5.09253 6.28992 6.08198 6.28992 7.30253C6.28992 8.52308 7.27937 9.51253 8.49992 9.51253Z"
                                                        stroke="#5F6160" stroke-width="1.5"/>
                                                    <path
                                                        d="M2.56416 6.01334C3.95958 -0.120822 13.0475 -0.113738 14.4358 6.02043C15.2504 9.61876 13.0121 12.6646 11.05 14.5488C9.62625 15.9229 7.37375 15.9229 5.94291 14.5488C3.98791 12.6646 1.74958 9.61168 2.56416 6.01334Z"
                                                        stroke="#5F6160" stroke-width="1.5"/>
                                                </svg>
                                                New York, US</a>
                                        </li>
                                    </ul>
                                </div>
                                <h3 class="event__title">
                                    <a href="event-details.html">Global education fall meeting for everyone</a>
                                </h3>

                                <div class="event__person">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <img src="{{asset('assets/site/img/event/event-person-1.jpg')}}" alt="">
                                                <img src="{{asset('assets/site/img/event/event-person-2.jpg')}}" alt="">
                                                <span>David Karry</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="event__right d-sm-flex align-items-center">
                            <div class="event__time">
                              <span>
                                 <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13.75 7.50024C13.75 10.9502 10.95 13.7502 7.5 13.7502C4.05 13.7502 1.25 10.9502 1.25 7.50024C1.25 4.05024 4.05 1.25024 7.5 1.25024C10.95 1.25024 13.75 4.05024 13.75 7.50024Z"
                                        stroke="#258E46" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"/>
                                    <path
                                        d="M9.8188 9.48735L7.8813 8.3311C7.5438 8.1311 7.2688 7.64985 7.2688 7.2561V4.6936"
                                        stroke="#258E46" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"/>
                                 </svg>
                                 10:30am - 12:30pm
                              </span>
                            </div>
                            <div class="event__more ml-30">
                                <a href="event-details.html" class="tp-btn-5 tp-btn-7">View Events </a>
                            </div>
                        </div>
                    </div>
                    <div
                        class="event__item white-bg mb-10 transition-3 p-relative d-lg-flex align-items-center justify-content-between">
                        <div class="event__left d-sm-flex align-items-center">
                            <div class="event__date">
                                <h4>06</h4>
                                <p>August, 2022</p>
                            </div>
                            <div class="event__content">
                                <div class="event__meta">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M8.49992 9.51253C9.72047 9.51253 10.7099 8.52308 10.7099 7.30253C10.7099 6.08198 9.72047 5.09253 8.49992 5.09253C7.27937 5.09253 6.28992 6.08198 6.28992 7.30253C6.28992 8.52308 7.27937 9.51253 8.49992 9.51253Z"
                                                        stroke="#5F6160" stroke-width="1.5"/>
                                                    <path
                                                        d="M2.56416 6.01334C3.95958 -0.120822 13.0475 -0.113738 14.4358 6.02043C15.2504 9.61876 13.0121 12.6646 11.05 14.5488C9.62625 15.9229 7.37375 15.9229 5.94291 14.5488C3.98791 12.6646 1.74958 9.61168 2.56416 6.01334Z"
                                                        stroke="#5F6160" stroke-width="1.5"/>
                                                </svg>
                                                New York, US</a>
                                        </li>
                                    </ul>
                                </div>
                                <h3 class="event__title">
                                    <a href="event-details.html">University seminar series on global health.</a>
                                </h3>

                                <div class="event__person">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <img src="{{asset('assets/site/img/event/event-person-1.jpg')}}" alt="">
                                                <img src="{{asset('assets/site/img/event/event-person-2.jpg')}}" alt="">
                                                <span>David Karry</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="event__right d-sm-flex align-items-center">
                            <div class="event__time">
                              <span>
                                 <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13.75 7.50024C13.75 10.9502 10.95 13.7502 7.5 13.7502C4.05 13.7502 1.25 10.9502 1.25 7.50024C1.25 4.05024 4.05 1.25024 7.5 1.25024C10.95 1.25024 13.75 4.05024 13.75 7.50024Z"
                                        stroke="#258E46" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"/>
                                    <path
                                        d="M9.8188 9.48735L7.8813 8.3311C7.5438 8.1311 7.2688 7.64985 7.2688 7.2561V4.6936"
                                        stroke="#258E46" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"/>
                                 </svg>
                                 11:00am - 12:00pm
                              </span>
                            </div>
                            <div class="event__more ml-30">
                                <a href="event-details.html" class="tp-btn-5 tp-btn-7">View Events </a>
                            </div>
                        </div>
                    </div>
                    <div
                        class="event__item white-bg mb-10 transition-3 p-relative d-lg-flex align-items-center justify-content-between">
                        <div class="event__left d-sm-flex align-items-center">
                            <div class="event__date">
                                <h4>18</h4>
                                <p>March, 2022</p>
                            </div>
                            <div class="event__content">
                                <div class="event__meta">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M8.49992 9.51253C9.72047 9.51253 10.7099 8.52308 10.7099 7.30253C10.7099 6.08198 9.72047 5.09253 8.49992 5.09253C7.27937 5.09253 6.28992 6.08198 6.28992 7.30253C6.28992 8.52308 7.27937 9.51253 8.49992 9.51253Z"
                                                        stroke="#5F6160" stroke-width="1.5"/>
                                                    <path
                                                        d="M2.56416 6.01334C3.95958 -0.120822 13.0475 -0.113738 14.4358 6.02043C15.2504 9.61876 13.0121 12.6646 11.05 14.5488C9.62625 15.9229 7.37375 15.9229 5.94291 14.5488C3.98791 12.6646 1.74958 9.61168 2.56416 6.01334Z"
                                                        stroke="#5F6160" stroke-width="1.5"/>
                                                </svg>
                                                New York, US</a>
                                        </li>
                                    </ul>
                                </div>
                                <h3 class="event__title">
                                    <a href="event-details.html">Virtual spring part-time jobs fair for student.</a>
                                </h3>

                                <div class="event__person">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <img src="{{asset('assets/site/img/event/event-person-1.jpg')}}" alt="">
                                                <img src="{{asset('assets/site/img/event/event-person-2.jpg')}}" alt="">
                                                <span>David Karry</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="event__right d-sm-flex align-items-center">
                            <div class="event__time">
                              <span>
                                 <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13.75 7.50024C13.75 10.9502 10.95 13.7502 7.5 13.7502C4.05 13.7502 1.25 10.9502 1.25 7.50024C1.25 4.05024 4.05 1.25024 7.5 1.25024C10.95 1.25024 13.75 4.05024 13.75 7.50024Z"
                                        stroke="#258E46" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"/>
                                    <path
                                        d="M9.8188 9.48735L7.8813 8.3311C7.5438 8.1311 7.2688 7.64985 7.2688 7.2561V4.6936"
                                        stroke="#258E46" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"/>
                                 </svg>
                                 09:45am - 11:30pm
                              </span>
                            </div>
                            <div class="event__more ml-30">
                                <a href="event-details.html" class="tp-btn-5 tp-btn-7">View Events </a>
                            </div>
                        </div>
                    </div>
                    <div
                        class="event__item white-bg mb-10 transition-3 p-relative d-lg-flex align-items-center justify-content-between">
                        <div class="event__left d-sm-flex align-items-center">
                            <div class="event__date">
                                <h4>27</h4>
                                <p>October, 2022</p>
                            </div>
                            <div class="event__content">
                                <div class="event__meta">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M8.49992 9.51253C9.72047 9.51253 10.7099 8.52308 10.7099 7.30253C10.7099 6.08198 9.72047 5.09253 8.49992 5.09253C7.27937 5.09253 6.28992 6.08198 6.28992 7.30253C6.28992 8.52308 7.27937 9.51253 8.49992 9.51253Z"
                                                        stroke="#5F6160" stroke-width="1.5"/>
                                                    <path
                                                        d="M2.56416 6.01334C3.95958 -0.120822 13.0475 -0.113738 14.4358 6.02043C15.2504 9.61876 13.0121 12.6646 11.05 14.5488C9.62625 15.9229 7.37375 15.9229 5.94291 14.5488C3.98791 12.6646 1.74958 9.61168 2.56416 6.01334Z"
                                                        stroke="#5F6160" stroke-width="1.5"/>
                                                </svg>
                                                New York, US</a>
                                        </li>
                                    </ul>
                                </div>
                                <h3 class="event__title">
                                    <a href="event-details.html">Scottish creatives to receive funded business.</a>
                                </h3>

                                <div class="event__person">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <img src="{{asset('assets/site/img/event/event-person-1.jpg')}}" alt="">
                                                <img src="{{asset('assets/site/img/event/event-person-2.jpg')}}" alt="">
                                                <span>David Karry</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="event__right d-sm-flex align-items-center">
                            <div class="event__time">
                              <span>
                                 <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13.75 7.50024C13.75 10.9502 10.95 13.7502 7.5 13.7502C4.05 13.7502 1.25 10.9502 1.25 7.50024C1.25 4.05024 4.05 1.25024 7.5 1.25024C10.95 1.25024 13.75 4.05024 13.75 7.50024Z"
                                        stroke="#258E46" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"/>
                                    <path
                                        d="M9.8188 9.48735L7.8813 8.3311C7.5438 8.1311 7.2688 7.64985 7.2688 7.2561V4.6936"
                                        stroke="#258E46" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"/>
                                 </svg>
                                 04:00pm - 06:30pm
                              </span>
                            </div>
                            <div class="event__more ml-30">
                                <a href="event-details.html" class="tp-btn-5 tp-btn-7">View Events </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- event area end -->

    <!-- team area start -->
    <section class="team__area pt-115">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-xxl-6 col-xl-6 col-lg-6">
                    <div class="section__title-wrapper-2 mb-40">
                        <span class="section__title-pre-2">Top Instructors</span>
                        <h3 class="section__title-2">Become A Instruction Instructor.</h3>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6">
                    <div class="team__wrapper mb-45 pl-70">
                        <p>Placerat veritatis ullamco rutrum quia illo, aenean eaque necessitatibus aptent vehicula
                            porta? Sollicitudin id, laboris commodi! </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6">
                    <div class="team__item text-center mb-40">
                        <div class="team__thumb">
                            <div class="team__shape">
                                <img src="{{asset('assets/site/img/team/team-shape-1.png')}}" alt="">
                            </div>
                            <img src="{{asset('assets/site/img/team/team-1.png')}}" alt="">
                            <div class="team__social transition-3">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
                            </div>
                        </div>
                        <div class="team__content">
                            <h3 class="team__title">
                                <a href="team-details.html">Melissa Jones</a>
                            </h3>
                            <span class="team__designation">Professor</span>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6">
                    <div class="team__item text-center mb-40">
                        <div class="team__thumb">
                            <div class="team__shape">
                                <img src="{{asset('assets/site/img/team/team-shape-2.png')}}" alt="">
                            </div>
                            <img src="{{asset('assets/site/img/team/team-2.png')}}" alt="">
                            <div class="team__social transition-3">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
                            </div>
                        </div>
                        <div class="team__content">
                            <h3 class="team__title">
                                <a href="team-details.html">Morgan Key</a>
                            </h3>
                            <span class="team__designation">Teacher MBA</span>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6">
                    <div class="team__item text-center mb-40">
                        <div class="team__thumb">
                            <div class="team__shape">
                                <img src="{{asset('assets/site/img/team/team-shape-3.png')}}" alt="">
                            </div>
                            <img src="{{asset('assets/site/img/team/team-3.png')}}" alt="">
                            <div class="team__social transition-3">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
                            </div>
                        </div>
                        <div class="team__content">
                            <h3 class="team__title">
                                <a href="team-details.html">Andra Flatcher </a>
                            </h3>
                            <span class="team__designation">Lead Teacher</span>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6">
                    <div class="team__item text-center mb-40">
                        <div class="team__thumb">
                            <div class="team__shape">
                                <img src="{{asset('assets/site/img/team/team-shape-4.png')}}" alt="">
                            </div>
                            <img src="{{asset('assets/site/img/team/team-4.png')}}" alt="">
                            <div class="team__social transition-3">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
                            </div>
                        </div>
                        <div class="team__content">
                            <h3 class="team__title">
                                <a href="team-details.html">Oliver Porter</a>
                            </h3>
                            <span class="team__designation">Photogrepher</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team area end -->

    <!-- testimonial area start -->
    <section class="testimonial__area pt-80 pb-120 fix">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="section__title-wrapper-2 mb-40 text-center">
                        <span class="section__title-pre-2">Testimonials</span>
                        <h3 class="section__title-2">What our Customers Say.</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-12">
                    <div class="testimonial__slider">
                        <div class="testimonial__active owl-carousel">
                            <div class="testimonial__item transition-3 text-center white-bg">
                                <div class="testimonial__avater">
                                    <img src="{{asset('assets/site/img/testimonial/testimonial-1.jpg')}}" alt="">
                                </div>
                                <div class="testimonial__text">
                                    <h4>Great quality!</h4>
                                    <p>Lorem ipsum dolor sit amet, consectet adipiscing elit. Phasellus feugiat lacus
                                        vitae neque ornare.</p>
                                </div>
                                <div class="testimonial__avater-info mb-5">
                                    <h3>Dianne Ameter</h3>
                                    <span>UX Designer</span>
                                </div>
                                <div class="testimonial__rating">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fa-solid fa-star"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa-solid fa-star"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa-solid fa-star"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa-solid fa-star"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa-solid fa-star"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="testimonial__item transition-3 text-center white-bg">
                                <div class="testimonial__avater">
                                    <img src="{{asset('assets/site/img/testimonial/testimonial-2.jpg')}}" alt="">
                                </div>
                                <div class="testimonial__text">
                                    <h4>Code Quality!</h4>
                                    <p>Lorem ipsum dolor sit amet, consectet adipiscing elit. Phasellus feugiat lacus
                                        vitae neque ornare.</p>
                                </div>
                                <div class="testimonial__avater-info mb-5">
                                    <h3>Douglas Lyphe</h3>
                                    <span>Devolopment</span>
                                </div>
                                <div class="testimonial__rating">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fa-solid fa-star"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa-solid fa-star"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa-solid fa-star"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa-solid fa-star"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa-solid fa-star"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="testimonial__item transition-3 text-center white-bg">
                                <div class="testimonial__avater">
                                    <img src="{{asset('assets/site/img/testimonial/testimonial-3.jpg')}}" alt="">
                                </div>
                                <div class="testimonial__text">
                                    <h4>Customer Support</h4>
                                    <p>Lorem ipsum dolor sit amet, consectet adipiscing elit. Phasellus feugiat lacus
                                        vitae neque ornare.</p>
                                </div>
                                <div class="testimonial__avater-info mb-5">
                                    <h3>Russell Sprout</h3>
                                    <span>IT Specialist</span>
                                </div>
                                <div class="testimonial__rating">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fa-solid fa-star"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa-solid fa-star"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa-solid fa-star"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa-solid fa-star"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa-solid fa-star"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="testimonial__item transition-3 text-center white-bg">
                                <div class="testimonial__avater">
                                    <img src="{{asset('assets/site/img/testimonial/testimonial-4.jpg')}}" alt="">
                                </div>
                                <div class="testimonial__text">
                                    <h4>Good Product</h4>
                                    <p>Lorem ipsum dolor sit amet, consectet adipiscing elit. Phasellus feugiat lacus
                                        vitae neque ornare.</p>
                                </div>
                                <div class="testimonial__avater-info mb-5">
                                    <h3>Shahnewaz Sakil</h3>
                                    <span>Developer</span>
                                </div>
                                <div class="testimonial__rating">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fa-solid fa-star"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa-solid fa-star"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa-solid fa-star"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa-solid fa-star"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa-solid fa-star"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial area end -->

    <!-- brand area start -->
    <section class="brand__area pt-40 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-xxl-4 col-xl-4 col-lg-4">
                    <div class="brand__wrapper">
                        <div class="section__title-wrapper-2">
                            <span class="section__title-pre-2">Testimonials</span>
                            <h3 class="section__title-2 section__title-2-30">Who will you learn with?</h3>
                        </div>
                        <p>You can list your partners or instructors's brands here to show off your site's
                            reputation</p>
                        <div class="brand__btn">
                            <a href="about.html" class="tp-btn-5 tp-btn-6">View all partners</a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-8 col-xl-8 col-lg-8">
                    <div class="brand__item-wrapper pl-100">
                        <div class="row align-items-center">
                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6">
                                <div class="brand__item text-center m-img mb-40">
                                    <img src="{{asset('assets/site/img/brand/brand-1.png')}}" alt="">
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6">
                                <div class="brand__item text-center m-img mb-40">
                                    <img src="{{asset('assets/site/img/brand/brand-2.png')}}" alt="">
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6">
                                <div class="brand__item text-center m-img mb-40">
                                    <img src="{{asset('assets/site/img/brand/brand-3.png')}}" alt="">
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6">
                                <div class="brand__item text-center m-img mb-40">
                                    <img src="{{asset('assets/site/img/brand/brand-4.png')}}" alt="">
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6">
                                <div class="brand__item text-center m-img mb-40">
                                    <img src="{{asset('assets/site/img/brand/brand-5.png')}}" alt="">
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6">
                                <div class="brand__item text-center m-img mb-40">
                                    <img src="{{asset('assets/site/img/brand/brand-6.png')}}" alt="">
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6">
                                <div class="brand__item text-center m-img mb-40">
                                    <img src="{{asset('assets/site/img/brand/brand-7.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- brand area end -->

@endsection
