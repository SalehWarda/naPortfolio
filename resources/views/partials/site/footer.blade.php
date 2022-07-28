<footer>
    <div class="footer__area">
        <div class="footer__top grey-bg-4 pt-95 pb-45">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-7">
                        <div class="footer__widget footer__widget-2 footer-col-2-1 mb-50">
                            <div class="footer__logo">
                                <div>
                                    <a href="{{route('site.index')}}">
                                        <img src="{{asset('assets/site/img/logo/lo.png')}}" width="150" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="footer__widget-content">
                                <div class="footer__widget-info">
                                    <h5>{{$about->degree}}</h5>
                                    <br>
                                    <div class="footer__social">
                                        <h4>{{trans('site.Follow_Me')}}:</h4>

                                        <ul>
                                            @foreach($socials as $social)
                                                <li><a href="{{ $social->link}}"><i class="fa-brands fa-{{ $social->name}}"></i></a></li>

                                            @endforeach


                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-10">
                        <div class="footer__widget footer__widget-2 mb-50 footer-col-2-2">
                            <h3 class="footer__widget-title">{{trans('site.Explore')}}</h3>
                            <div class="footer__widget-content">
                                <ul>
                                    <li>
                                        <a href="{{route('site.index')}}">{{trans('site.Home')}}</a>
                                    </li>
                                    <li>
                                        <a href="{{route('site.about')}}">{{trans('site.About')}}</a>
                                    </li>

                                    <li>
                                        <a href="{{route('site.courses')}}">{{trans('site.Courses')}}</a>
                                    </li>
                                    <li>
                                        <a href="{{route('site.services')}}">{{trans('site.Services')}}</a>
                                    </li>
                                    <li>
                                        <a href="#">{{trans('site.Financial_calculator')}}</a>
                                    </li>
                                    <li>
                                        <a href="{{route('site.blog')}}">{{trans('site.Blog')}}</a>
                                    </li>
                                    <li>
                                        <a href="{{route('site.contact')}}">{{trans('site.Contact')}}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-7">
                        <div class="footer__widget footer__widget-2 footer-col-2-1 mb-50 ">
                            <div class="footer__logo">
                                <div>
                                    <a  href="https://holla.sa/ar" target="_blank">
                                        <img class="mr-25" src="{{asset('assets/images/hulla1.png')}}" width="150" alt="">
                                    </a>
                                    <p class="text-center  md:text-right mb-4 p-text">تم التطوير بواسطة مؤسسة
                                        <a href="https://holla.sa/ar" target="_blank">

                                            <strong style="color: #526b77">حلة  </strong>  <span id="c"> © </span>                          </a>
                                    </p>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__bottom grey-bg-4">
            <div class="container">
                <div class="footer__bottom-inner">
                    <div class="row">
                        <div class="col-xxl-12">
                            <div class="footer__copyright text-center">
                                <p class="text-center  md:text-right mb-4 p-text"> جميع الحقوق محفوظة للدكتور
                                    <a href="/" >

                                        <strong style="color: #526b77"> فؤاد الخشرمي  </strong>  <span id="c"> © </span>                          </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
