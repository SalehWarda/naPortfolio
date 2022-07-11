@extends('layouts.admin')

@section('title')
    {{trans('videos.Videos')}}
@endsection

@section('content')







    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">{{trans('videos.Videos')}}</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item active">{{trans('videos.Videos')}}</li>
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{trans('videos.Home')}}</a></li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>



            <livewire:admin.courses.videos-component :course="$course"/>
        </div>
    </div>








@endsection
