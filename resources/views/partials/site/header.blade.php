<header>
    <div id="header-sticky" class="header__area header__transparent">
        <div class="header__bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xxl-8 col-xl-9 col-lg-10 col-md-6 col-6">
                        <div class="header__bottom-left d-flex align-items-center">
                            <div>
                                <a href="{{route('site.index')}}">
                                    <img src="{{asset('assets/site/img/logo/lo.png')}}" width="99" alt="logo">
                                </a>
                            </div>
                            <div class="main-menu main-menu-2 main-menu-border ml-30 pl-30">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li>
                                            <a href="{{route('site.index')}}">{{trans('site.Home')}}</a>

                                        </li>
                                        <li>
                                            <a href="{{route('site.about')}}">{{trans('site.About')}}</a>
                                        </li>
                                        <li>
                                            <a href="{{route('site.services')}}">{{trans('site.Services')}}</a>

                                        </li>
                                        <li>
                                            <a href="{{route('site.courses')}}">{{trans('site.Courses')}}</a>

                                        </li>

{{--                                        <li>--}}
{{--                                            <a href="course-v1.html">{{trans('site.Financial_calculator')}}</a>--}}

{{--                                        </li>--}}
                                        <li>
                                            <a href="{{route('site.blog')}}">{{trans('site.Blog')}}</a>
                                        </li>
                                        <li>
                                            <a href="{{route('site.contact')}}">{{trans('site.Contact')}}</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-3 col-lg-2 col-md-6 col-6">
                        <div class="header__bottom-right d-flex justify-content-end align-items-center pl-30">

                            <div class=" d-none d-sm-inline-block mb-20 ">
                                <livewire:site.carts/>
                            </div>

                            @guest
                                <div class="header__action d-none d-xl-block  mr-10 ">
                                    <ul>
                                        <li>
                                            <a href="{{route('site.login')}}">
                                                {{trans('site/login.Login')}}
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                            @else

                                <div class="dropdown d-none d-sm-inline-block mb-20" style="left: 20px">

                                    <livewire:site.header.notification-component/>

                                </div>

                                  <div class="dropdown d-none d-sm-inline-block " style="left: 30px">

                                      <a   class=" btn header-item waves-effect rounded-circle"
                                           data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                          <i class="fas fa-user"></i>
                                      </a>
                                      <div class="dropdown-menu dropdown-menu-end">

                                          <a class="dropdown-item border-0" href="{{route('customer.courses')}}">
                                              {{trans('site.My_Courses')}}</a>


                                          <a class="dropdown-item border-0" href="{{route('customer.profile')}}">
                                              {{trans('site.My_profile')}}</a>

                                          <a href="javascript:void(0);" class="dropdown-item border-0"
                                             onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{trans('site.Logout')}}</a>
                                          <form action="{{ route('logout') }}" method="post" id="logout-form"
                                                class="d-none">
                                              @csrf
                                          </form>
                                      </div>

                                </div>



{{--                                <div class="header__action d-none d-xl-block mr-10 dropdown" style="left: 20px">--}}

{{--                                    <a href="" style="background: #000000; width: 3.2rem; height: 2.2rem;"--}}
{{--                                       class="btn header-item  rounded-circle"--}}
{{--                                       data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"--}}
{{--                                       title="{{ auth()->user()->first_name.' '.auth()->user()->last_name }}">--}}
{{--                                        <span style="background: #1c1d1f;--}}
{{--                                                     display: inline-flex;--}}
{{--                                                     align-items: center;--}}
{{--                                                     justify-content: center;--}}
{{--                                                      border-radius: 50%;--}}
{{--                                                      object-fit: cover;--}}
{{--                                                       color: #fff;"> {{ auth()->user()->full_name }}</span>--}}
{{--                                    </a>--}}
{{--                                    <div class="dropdown-menu dropdown-menu-end">--}}

{{--                                        <a class="dropdown-item border-0" href="{{route('customer.profile')}}">My--}}
{{--                                            profile</a>--}}
{{--                                        <a href="javascript:void(0);" class="dropdown-item border-0"--}}
{{--                                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>--}}
{{--                                        <form action="{{ route('logout') }}" method="post" id="logout-form"--}}
{{--                                              class="d-none">--}}
{{--                                            @csrf--}}
{{--                                        </form>--}}
{{--                                    </div>--}}

{{--                                </div>--}}

                            @endguest




                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-8 col-6">
                                <div class="header__bottom-right d-flex justify-content-end align-items-center pl-30">
                                    <div class="dropdown d-none d-sm-inline-block ">
                                        <button type="button" class="btn header-item waves-effect"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            @if (App::getLocale() == 'ar')

                                                <img src="{{ URL::asset('assets/admin/images/flags/sa.svg') }}" width="25" height="20" alt="">
                                            @else

                                                <img src="{{ URL::asset('assets/admin/images/flags/us_flag.jpg') }}" width="25" height="20" alt="">
                                            @endif                </button>
                                        <div class="dropdown-menu dropdown-menu-end">

                                            <!-- item-->
                                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                                <a rel="alternate" class="btn btn-country btn-lg btn-block {{$properties['native'] == App::getLocale() ? 'active' : ''}} " hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}" class="dropdown-item notify-item">
                                                    <img src="{{ URL::asset($properties['image'])}}" class="me-1" width="25" height="20" alt="{{ $properties['name'] }}"> {{   $properties['name'] }}
                                                </a>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="header__hamburger ml-50 d-lg-none">
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#offcanvasmodal" class="hamurger-btn">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </button>
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
</header>
