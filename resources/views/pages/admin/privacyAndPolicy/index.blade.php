@extends('layouts.admin')

@section('title')
    {{trans('privacy_policy.Privacy_and_Usage_Policy')}}
@endsection

@section('content')

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">{{trans('privacy_policy.Privacy_and_Usage_Policy')}}</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item active">{{trans('privacy_policy.Privacy_and_Usage_Policy')}}</li>
                                <li class="breadcrumb-item"><a
                                        href="{{route('admin.dashboard')}}">{{trans('privacy_policy.Home')}}</a></li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            {{--                            <div class="d-block d-md-flex justify-content-between">--}}
                            {{--                                <div class="d-block">--}}
                            {{--                                    <a href=""--}}
                            {{--                                       class="btn btn-outline-success waves-effect waves-light btn-rounded"--}}
                            {{--                                    >رجوع <i class="fa fa-arrow-circle-right"></i>--}}
                            {{--                                    </a>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            <br>


                            <form action="{{route('admin.privacy.update')}}" method="post" enctype="multipart/form-data">

                                @csrf
                                @method('PATCH')
                                <input type="hidden" value="{{$privacy->id}}" name="privacy_id">






                                <div class="row">

                                    <div class="col-6">
                                        <label for="privacy_policy_ar"> {{trans('privacy_policy.Privacy_and_Usage_Policy_Arabic')}}:</label>

                                        <textarea id="privacy_policy_ar" hidden name="privacy_policy_ar" class="body-content-ar"
                                        >
                                                              {!! $privacy->getTranslation('privacy_policy', 'ar') !!}
                                                           </textarea>
                                        @error('privacy_policy_ar')<span
                                            class="text-danger">{{ $message }}</span>@enderror
                                    </div>

                                    <div class="col-6">
                                        <label for="privacy_policy_en"> {{trans('privacy_policy.Privacy_and_Usage_Policy_English')}}:</label>

                                        <textarea id="privacy_policy_en" hidden name="privacy_policy_en" class="body-content-en"
                                        >
                                                              {!! $privacy->getTranslation('privacy_policy', 'en') !!}
                                                           </textarea>
                                        @error('privacy_policy_en')<span
                                            class="text-danger">{{ $message }}</span>@enderror
                                    </div>



                                </div>
                                <br>





                                <button class="btn ripple btn-secondary m-lg-2" type="submit">
                                    {{trans('privacy_policy.Saving_changes')}}<i
                                        class="fe fe-plus"></i></button>
                            </form>

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
@push('scripts')

    <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>





    <script>
        if (document.querySelector('#privacy_policy_ar')) {
            ClassicEditor.create(document.querySelector('#privacy_policy_ar'), {})
                .then(editor => {
                    editor.model.document.on('change:data', () => {
                        document.querySelector('#privacy_policy_ar').value = editor.getData();

                    });


                })
                .catch(error => {
                    console.log(error.stack);
                });
        }
       if (document.querySelector('#privacy_policy_en')) {
            ClassicEditor.create(document.querySelector('#privacy_policy_en'), {})
                .then(editor => {
                    editor.model.document.on('change:data', () => {
                        document.querySelector('#privacy_policy_en').value = editor.getData();

                    });


                })
                .catch(error => {
                    console.log(error.stack);
                });
        }




    </script>

@endpush
