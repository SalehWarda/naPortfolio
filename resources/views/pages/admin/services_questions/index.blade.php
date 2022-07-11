@extends('layouts.admin')

@section('title')
    أسئلة الخدمات
@endsection

@section('content')







            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">أسئلة الخدمات</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item active">أسئلة الخدمات</li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">الرئيسية</a></li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>

                    <livewire:admin.services.services-question/>
                </div>
            </div>








@endsection
