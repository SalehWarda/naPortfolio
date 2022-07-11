<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!-- User details -->
        <div class="user-profile text-center mt-3">
            <div class="">
                @if(auth()->user()->firstMedia)
                    <img class="avatar-md rounded-circle" src="{{asset('assets/images/admin/users/'.auth()->user()->firstMedia->file_name)}}"
                         alt="{{auth('admin')->user()->name}}">
                @else
                    <img class="avatar-md rounded-circle" src="{{asset('assets/images/admin/users/avatar.png')}}"
                         alt={{auth('admin')->user()->name}}">

                @endif
            </div>
            <div class="mt-3">
                <h4 class="font-size-16 mb-1">{{auth('admin')->user()->name}}</h4>
                <span class="text-muted"><i class="ri-record-circle-line align-middle font-size-14 text-success"></i> Online</span>
            </div>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">أقسام لوحة التحكم</li>

                <li>
                    <a href="{{route('admin.dashboard')}}" class="waves-effect">
                        <i class="ri-dashboard-line"></i>
                        <span>الرئيسية</span>
                    </a>
                </li>


                @can('services')
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-award-fill"></i>
                        <span>الخدمات</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('admin.services')}}">قائمة الخدمات</a></li>
                        <li><a href="{{route('admin.services.questions')}}">أسئلة الخدمات</a></li>
                    </ul>
                </li>
                @endcan

                @can('blog')
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="ri-layout-3-line"></i>
                            <span>المدونة</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li >


                            <li><a href="{{route('admin.posts')}}">قائمة البوستات</a></li>


                            </li>

                        </ul>
                    </li>
                @endcan
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-quill-pen-fill"></i>
                        <span>نبذة عني</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li >


                        <li><a href="{{route('admin.about')}}">نبذة عني</a></li>


                        </li>

                    </ul>
                </li>

                @can('coupons')
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="ri-coupon-2-fill"></i>
                            <span>كوبونات الخصم</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li >


                            <li><a href="{{route('admin.coupons')}}">كوبونات الخصم</a></li>


                            </li>

                        </ul>
                    </li>
                @endcan


              @can('socials')

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="ri-account-circle-line"></i>
                            <span>مواقع التواصل الإجتماعي</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{route('admin.socials')}}">قائمة مواقع التواصل الإجتماعي</a></li>

                        </ul>
                    </li>
              @endcan


                @can('courses')
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="ri-youtube-fill"></i>
                            <span>الدورات</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{route('admin.courses')}}">قائمة الدورات</a></li>

                        </ul>
                    </li>
                @endcan



                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="ri-team-line"></i>
                            <span>المستخدمين</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{route('admin.users')}}">المستخدمين</a></li>


                        </ul>
                    </li>





                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="ri-vip-crown-2-line"></i>
                            <span>صلاحيات المستخدمين</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{route('admin.roles.index')}}">صلاحيات المستخدمين</a></li>

                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="ri-time-fill"></i>
                            <span>إدارة المواعيد</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{route('admin.roles.index')}}">مواعيد الخدمات</a></li>

                        </ul>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{route('admin.services.service-timings')}}">مواعيد المنشورات</a></li>

                        </ul>
                    </li>



{{--                <li>--}}
{{--                    <a href="javascript: void(0);" class="waves-effect">--}}
{{--                        <i class="ri-list-ordered"></i>--}}
{{--                        <span>الطلبات</span>--}}
{{--                    </a>--}}
{{--                    <ul class="sub-menu" aria-expanded="false">--}}
{{--                        <li><a href="form-elements.html">Form Elements</a></li>--}}

{{--                    </ul>--}}
{{--                </li>--}}

{{--                <li>--}}
{{--                    <a href="javascript: void(0);" class="waves-effect">--}}
{{--                        <i class="ri-alarm-line"></i>--}}
{{--                        <span>إدارة المواعيد</span>--}}
{{--                    </a>--}}
{{--                    <ul class="sub-menu" aria-expanded="false">--}}
{{--                        <li><a href="form-elements.html">Form Elements</a></li>--}}

{{--                    </ul>--}}
{{--                </li>--}}

                @can('mail')
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="ri-mail-line"></i>
                            <span>البريد الوارد</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{route('admin.mail')}}">البريد الوارد</a></li>

                        </ul>
                    </li>
                @endcan


                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-settings-2-line"></i>
                        <span>الإعدادات</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('admin.account_settings')}}">إعدادات الملف الشخصي</a></li>

                    </ul>
                </li>


            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
