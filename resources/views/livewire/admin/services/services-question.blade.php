<div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-block d-md-flex justify-content-between">
                        <div class="d-block">
                            <h5 class="card-title pb-0 border-0"> أسئلة الخدمات</h5>
                        </div>

                        <div class="d-block d-md-flex justify-content-between">
                            <div class="d-block">
                                <a class="btn btn-secondary waves-effect waves-light btn-rounded"
                                   wire:click="resetData"
                                   data-bs-toggle="modal" data-bs-target="#add_question"
                                >إضافة سؤال <i class="fa fa-plus"></i>
                                </a>

                            </div>

                        </div>

                    </div>


                    {{--                    @include('pages.admin.services.filter.filter')--}}

                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>السؤال</th>
                                <th>نوع السؤال</th>
                                <th>الخدمة</th>
                                <th>العمليات</th>
                            </tr>
                            </thead>
                            <tbody>

                            @forelse($questions as $question)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{!! $question->question !!}</td>
                                    <td>{!! $question->sort !!}</td>
                                    <td>{{$question->service->name}}</td>
                                    <td>
                                        <div class="btn-list btn-list-icon">
                                            <button type="button"
                                                    class="btn btn-info waves-effect waves-light btn-rounded"
                                                    wire:click="editQuestion({{$question->id}})"
                                                    data-bs-toggle="modal" data-bs-target="#edit_question"
                                                    title="تعديل">
                                                <i class="ri-edit-2-line align-middle me-2"></i>تعديل
                                            </button>

                                            <button type="button"
                                                    class="btn btn-danger waves-effect waves-light btn-rounded"
                                                    wire:click="show_delete_question({{$question->id}})"
                                                    data-bs-toggle="modal" data-bs-target="#delete_question"
                                                    title="حذف">
                                                <i class="ri-delete-bin-2-line align-middle me-2"></i>حذف
                                            </button>

                                        </div>
                                    </td>
                                </tr>


                                <!-- Edit Service Modal -->
                                <div wire:ignore.self class="modal fade" tabindex="-1" role="dialog" id="edit_question"
                                     aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="myExtraLargeModalLabel">تعديل على
                                                    السؤال:</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">

                                                <input type="hidden" wire:model="question_id">
                                                <div class="row">

                                                    <div class="col-md-12">
                                                        <div wire:ignore class="mb-3">
                                                            <label class="form-label">إختر خدمة:</label>
                                                            <select class="form-control" wire:model="service_id"
                                                                    name="service_id">
                                                                <option>إختر...</option>
                                                                @foreach($services as $service)
                                                                    <option
                                                                        value="{{$service->id}}"{{old('service_id') == $service->id ?'selected' : null}}>{{$service->name}}</option>

                                                                @endforeach


                                                            </select>


                                                        </div>

                                                    </div>
                                                    @error('service_id')<span
                                                        class="text-danger">{{ $message }}</span>@enderror


                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="question_ar" class="col-sm-2 col-form-label">السؤال
                                                            بالعربية:</label>
                                                        <input class="form-control" type="text" name="question_ar"
                                                               wire:model="question_ar"
                                                               id="question_ar">
                                                        @error('question_ar')
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="question_en" class="col-sm-2 col-form-label">السؤال
                                                            بالإنجليزية:</label>
                                                        <input class="form-control" type="text" name="question_en"
                                                               wire:model="question_en"
                                                               id="question_en">
                                                        @error('question_en')
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>


                                                </div>
                                                <br>


                                                <div class="row">

                                                    <div class="col-md-12">
                                                        <div wire:ignore class="mb-3">
                                                            <label class="form-label">نوع السؤال:</label>
                                                            <select class="form-control" wire:model="sort" name="sort">
                                                                <option>إختر...</option>

                                                                <option
                                                                    value="input" {{old('sort',request()->input('sort')) == 'input' ? 'selected' : ''}}>
                                                                    مقالي
                                                                </option>
                                                                <option
                                                                    value="file" {{old('sort',request()->input('sort')) == 'file' ? 'selected' : ''}}>
                                                                    ملف
                                                                </option>


                                                            </select>


                                                        </div>

                                                    </div>
                                                    @error('sort')<span
                                                        class="text-danger">{{ $message }}</span>@enderror


                                                </div>
                                                <br>


                                            </div>
                                            <br>
                                            <div class="modal-footer">
                                                <button class="btn ripple btn-secondary m-lg-2" type="submit"
                                                        wire:click="updateQuestion"> حفظ التغييرات<i
                                                        class="fe fe-plus"></i></button>
                                                <button class="btn ripple btn-danger" data-bs-dismiss="modal"
                                                        type="button">إغلاق
                                                </button>
                                            </div>


                                        </div>
                                    </div>
                                </div>


                                <!-- Delete ServiceQuestion Modal -->
                                <div wire:ignore.self class="modal fade" tabindex="-1" role="dialog"
                                     id="delete_question" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title" id="myModalLabel">حذف سؤال </h3>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <input type="hidden" wire:model="question_id">

                                                <h4>هل انت متأكد من عملية الحذف ؟ </h4>

                                                <h5><span class="text-danger">{{$question_name}}</span></h5>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light waves-effect"
                                                        data-bs-dismiss="modal">Close
                                                </button>
                                                <button type="submit" wire:click="delete_question"
                                                        class="btn btn-danger waves-effect waves-light">حذف
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty

                                <tr>
                                    <td colspan="7" class="text-center">لم يتم العثور على أسئلة</td>
                                </tr>
                            @endforelse


                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan="7">
                                    <div class="float-right pagination-rounded">


                                        {{$questions->links()}}

                                    </div>

                                </td>
                            </tr>

                            </tfoot>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <!--  Add ServiceQuestion Modal -->
    <div wire:ignore.self class="modal fade" tabindex="-1" role="dialog" id="add_question"
         aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myExtraLargeModalLabel">إضافة سؤال جديد</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="row">

                        <div class="col-md-12">
                            <div wire:ignore class="mb-3">
                                <label class="form-label">إختر خدمة:</label>
                                <select class="form-control" wire:model="service_id" name="service_id">
                                    <option>إختر...</option>
                                    @foreach($services as $service)
                                        <option
                                            value="{{$service->id}}"{{old('service_id') == $service->id ?'selected' : null}}>{{$service->name}}</option>

                                    @endforeach


                                </select>


                            </div>

                        </div>
                        @error('service_id')<span
                            class="text-danger">{{ $message }}</span>@enderror


                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="question_ar" class="col-sm-2 col-form-label">السؤال بالعربية:</label>
                            <input class="form-control" type="text" name="question_ar" wire:model="question_ar"
                                   id="question_ar">
                            @error('question_ar')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="question_en" class="col-sm-2 col-form-label">السؤال بالإنجليزية:</label>
                            <input class="form-control" type="text" name="question_en" wire:model="question_en"
                                   id="question_en">
                            @error('question_en')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>


                    </div>
                    <br>

                    <div class="row">

                        <div class="col-md-12">
                            <div wire:ignore class="mb-3">
                                <label class="form-label">نوع السؤال:</label>
                                <select class="form-control" wire:model="sort" name="sort">
                                    <option>إختر...</option>

                                    <option
                                        value="input" {{old('sort',request()->input('sort')) == 'input' ? 'selected' : ''}}>
                                        مقالي
                                    </option>
                                    <option
                                        value="file" {{old('sort',request()->input('sort')) == 'file' ? 'selected' : ''}}>
                                        ملف
                                    </option>


                                </select>


                            </div>

                        </div>
                        @error('sort')<span
                            class="text-danger">{{ $message }}</span>@enderror


                    </div>
                    <br>

                </div>
                <br>
                <div class="modal-footer">
                    <button class="btn ripple btn-secondary m-lg-2" type="submit" wire:click="addQuestion"> حفظ<i
                            class="fe fe-plus"></i></button>
                    <button class="btn ripple btn-danger" data-bs-dismiss="modal" type="button">إغلاق</button>
                </div>


            </div>
        </div>
    </div>

</div>
@push('scripts')

    <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>


    <script>

        $('.select-2').select2({
            dropdownParent: $('#add_question')

        });
    </script>


    <script>
        window.onload = function () {

            $('#select-2').select2({
                dropdownParent: $('#add_question')

            });

        }
    </script>

    <script>
        window.addEventListener('closeModalAddQuestion', event => {
            $("#add_question").click();
        });
    </script>

    <script>
        window.addEventListener('closeModalUpdateQuestion', event => {
            $("#edit_question").click();
        });
    </script>

    <script>
        window.addEventListener('closeModalDeleteQuestion', event => {
            $("#delete_question").click();
        });
    </script>

@endpush
