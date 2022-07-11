@extends('layouts.admin')

@section('title')
    {{trans('videos.Videos')}}
@endsection
@section('style')
    <link href="https://vjs.zencdn.net/7.19.2/video-js.css" rel="stylesheet"/>

@endsection

@section('content')







    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">الفيديوهات</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item active">{{trans('videos.Videos')}}</li>
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{trans('videos.Home')}}</a></li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>



            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="video-container">
                            <div class="video-container">
                                <video controls preload="auto" id="yt-video"
                                       class="video-js vjs-fill vjs-styles=defaults vjs-big-play-centered" data-setup="{}">
                                    <source src="{{ asset('videos/'. $video->uid . '/' . $video->processed_file)}}"
                                            type="application/x-mpegURL" />
                                    <p class="vjs-no-js">
                                        To view this video please enable JavaScript, and consider upgrading to a
                                        web browser that
                                        <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5
                                            video</a>
                                    </p>
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>








@endsection

@push('scripts')
            <script src="https://vjs.zencdn.net/7.19.2/video.min.js"></script>

@endpush
