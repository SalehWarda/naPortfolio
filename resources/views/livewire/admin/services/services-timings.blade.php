<div>


    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-block d-md-flex justify-content-between">
                        <div class="d-block">
                            <h5 class="card-title pb-0 border-0"> إدارة مواعيد المنشورات</h5>
                        </div>

                        <div class="d-block d-md-flex justify-content-between">
                            <div class="d-block">
                                <a class="btn btn-secondary waves-effect waves-light btn-rounded"

                                   data-bs-toggle="modal" data-bs-target="#add"
                                >إضافة موعد نشر جديد <i class="fa fa-plus"></i>
                                </a>

                            </div>

                        </div>
                    </div>


                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>المنشور</th>
                                <th>موعد النشر</th>
                                <th>العمليات</th>
                            </tr>
                            </thead>
                            <tbody>

{{--                            @forelse($coupons as $coupon)--}}
{{--                                <tr>--}}
{{--                                    <th scope="row">{{$loop->iteration}}</th>--}}
{{--                                    <td><strong>{{$coupon->code}}</strong><br>--}}
{{--                                        <small>{{$coupon->created_at->format('Y-m-d h:i a') }}</small>--}}
{{--                                    </td>--}}
{{--                                    <td>{{$coupon->value }} {{ $coupon->type == 'fixed'? 'SAR' : '%' }}</td>--}}
{{--                                    <td>  {!! \Illuminate\Support\Str::limit($coupon->description ?? '',30,'...')  !!}  </td>--}}
{{--                                    <td>{{$coupon->used_times. '/' . $coupon->use_times  }}</td>--}}
{{--                                    <td>--}}
{{--                                        <small>{{$coupon->start_date != '' ? $coupon->start_date->format('Y-m-d'). ' - ' . $coupon->expire_date->format('Y-m-d') : '-' }}</small>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        @if($coupon->status == 1)--}}
{{--                                            <span class="badge rounded-pill bg-success">{{$coupon->status() }}</span>--}}
{{--                                        @else--}}
{{--                                            <span class="badge rounded-pill bg-danger">{{$coupon->status() }}</span>--}}

{{--                                        @endif--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <div class="btn-list btn-list-icon">--}}


{{--                                            <button type="button"--}}
{{--                                                    class="btn btn-info waves-effect waves-light btn-rounded"--}}
{{--                                                    data-bs-toggle="modal" data-bs-target="#edit"--}}
{{--                                                    title="{{trans('coupons.Edit')}}">--}}
{{--                                                <i class="ri-edit-2-fill align-middle me-2"></i>{{trans('coupons.Edit')}}--}}
{{--                                            </button>--}}
{{--                                            <button type="button"--}}
{{--                                                    class="btn btn-danger waves-effect waves-light btn-rounded"--}}
{{--                                                    data-bs-toggle="modal"--}}
{{--                                                    data-bs-target="#delete" title="{{trans('coupons.Delete')}}">--}}
{{--                                                <i class="ri-delete-bin-2-line align-middle me-2"></i>{{trans('coupons.Delete')}}--}}
{{--                                            </button>--}}

{{--                                        </div>--}}
{{--                                    </td>--}}
{{--                                </tr>--}}



                                <!--  Edit Coupon Modal -->
{{--                                <div class="modal fade" tabindex="-1" role="dialog" id="edit{{$coupon->id}}"--}}
{{--                                     aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">--}}
{{--                                    <div class="modal-dialog modal-lg">--}}
{{--                                        <div class="modal-content">--}}
{{--                                            <div class="modal-header">--}}
{{--                                                <h5 class="modal-title" id="myExtraLargeModalLabel">{{trans('coupons.Coupon_Update')}}</h5>--}}
{{--                                                <button type="button" class="btn-close" data-bs-dismiss="modal"--}}
{{--                                                        aria-label="Close"></button>--}}
{{--                                            </div>--}}
{{--                                            <div class="modal-body">--}}

{{--                                                <form action="{{route('admin.coupons.update')}}" method="post">--}}
{{--                                                    @csrf--}}
{{--                                                    @method('PUT')--}}

{{--                                                    <input type="hidden" name="coupon_id"--}}
{{--                                                           value="{{$coupon->id}}">--}}
{{--                                                    <div class="row">--}}
{{--                                                        <div class="col-md-3">--}}
{{--                                                            <label for="code" class=" col-form-label">{{trans('coupons.Code')}}--}}
{{--                                                                :</label>--}}
{{--                                                            <input type="text" name="code" id="codeUpdate"--}}
{{--                                                                   class="form-control"--}}
{{--                                                                   value="{{old('code',$coupon->code)}}">--}}

{{--                                                            @error('code')--}}
{{--                                                            <span class="text-danger">{{ $message }}</span>--}}
{{--                                                            @enderror--}}
{{--                                                        </div>--}}

{{--                                                        <div class="col-md-3">--}}

{{--                                                            <label for="type" class=" col-form-label">{{trans('coupons.Type')}}--}}
{{--                                                                : </label>--}}

{{--                                                            <select class="form-control" name="type">--}}
{{--                                                                <option selected disabled> {{trans('coupons.Choose')}}...</option>--}}


{{--                                                                <option--}}
{{--                                                                    value="fixed" {{old('type',$coupon->type) == 'fixed' ?'selected' : null}}>--}}
{{--                                                                    {{trans('coupons.Fixed')}}--}}
{{--                                                                </option>--}}
{{--                                                                <option--}}
{{--                                                                    value="percentage" {{old('type',$coupon->type) == 'percentage' ?'selected' : null}}>--}}
{{--                                                                    {{trans('coupons.Percentage')}}--}}
{{--                                                                </option>--}}


{{--                                                            </select>--}}
{{--                                                            @error('type')--}}
{{--                                                            <span class="text-danger">{{ $message }}</span>--}}
{{--                                                            @enderror--}}

{{--                                                        </div>--}}

{{--                                                        <div class="col-md-3">--}}
{{--                                                            <label for="value" class=" col-form-label">{{trans('coupons.Value')}}--}}
{{--                                                                :</label>--}}
{{--                                                            <input type="number" name="value"--}}
{{--                                                                   class="form-control"--}}
{{--                                                                   value="{{old('value',$coupon->value)}}">--}}

{{--                                                            @error('value')--}}
{{--                                                            <span class="text-danger">{{ $message }}</span>--}}
{{--                                                            @enderror--}}
{{--                                                        </div>--}}

{{--                                                        <div class="col-3">--}}
{{--                                                            <div class=" col-form-label">--}}
{{--                                                                <label for="use_times">{{trans('coupons.Used_time')}} :</label>--}}
{{--                                                                <input type="number" name="use_times"--}}
{{--                                                                       value="{{ old('use_times',$coupon->use_times) }}"--}}
{{--                                                                       class="form-control">--}}
{{--                                                                @error('use_times')<span--}}
{{--                                                                    class="text-danger">{{ $message }}</span>@enderror--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}

{{--                                                    </div>--}}
{{--                                                    <br>--}}
{{--                                                    <div class="row">--}}
{{--                                                        <div class="col-md-4">--}}
{{--                                                            <div class="form-group">--}}
{{--                                                                <label> {{trans('coupons.Start_date')}} :</label>--}}

{{--                                                                <input type="text" name="start_date"--}}
{{--                                                                       id="start_dateUpdate"--}}
{{--                                                                       class="form-control"--}}
{{--                                                                       value="{{old('start_date',$coupon->start_date->format('Y-m-d'))}}">--}}

{{--                                                                @error('start_date')--}}
{{--                                                                <span class="text-danger">{{ $message }}</span>--}}
{{--                                                                @enderror--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}

{{--                                                        <div class="col-md-4">--}}
{{--                                                            <div class="form-group">--}}
{{--                                                                <label> {{trans('coupons.Expired_date')}} :</label>--}}

{{--                                                                <input type="text" name="expire_date"--}}
{{--                                                                       id="expire_dateUpdate"--}}
{{--                                                                       class="form-control"--}}
{{--                                                                       value="{{old('expire_date',$coupon->expire_date->format('Y-m-d'))}}">--}}

{{--                                                                @error('expire_date')--}}
{{--                                                                <span class="text-danger">{{ $message }}</span>--}}
{{--                                                                @enderror--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}


{{--                                                        <div class="col-md-4">--}}
{{--                                                            <div class="form-group">--}}
{{--                                                                <label for="status">{{trans('coupons.Status')}} :</label>--}}
{{--                                                                <br>--}}
{{--                                                                <select class="form-control"--}}
{{--                                                                        name="status">--}}

{{--                                                                    <option selected disabled> {{trans('coupons.Choose')}}...</option>--}}
{{--                                                                    <option--}}
{{--                                                                        value="1" {{old('status',$coupon->status) == '1' ? 'selected' : null}}>--}}
{{--                                                                        {{trans('coupons.Active')}}--}}
{{--                                                                    </option>--}}
{{--                                                                    <option--}}
{{--                                                                        value="0" {{old('status',$coupon->status) == '0' ? 'selected' : null}}>--}}
{{--                                                                        {{trans('coupons.InActive')}}--}}
{{--                                                                    </option>--}}

{{--                                                                </select>--}}
{{--                                                                @error('status')--}}
{{--                                                                <span class="text-danger">{{ $message }}</span>--}}
{{--                                                                @enderror--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}


{{--                                                    </div>--}}
{{--                                                    <br>--}}
{{--                                                    <div class="row">--}}

{{--                                                        <div class="col-md-12">--}}
{{--                                                            <div class="form-group">--}}
{{--                                                                <label> {{trans('coupons.Description')}} :</label>--}}

{{--                                                                <textarea name="description" rows="3"--}}
{{--                                                                          id="description"--}}
{{--                                                                          class="form-control">--}}

{{--                                                                     {{old('description',$coupon->description)}}--}}
{{--                                                          </textarea>--}}

{{--                                                                @error('description')--}}
{{--                                                                <span class="text-danger">{{ $message }}</span>--}}
{{--                                                                @enderror--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}


{{--                                                    </div>--}}
{{--                                                    <div class="modal-footer">--}}
{{--                                                        <button class="btn ripple btn-secondary m-lg-2"--}}
{{--                                                                type="submit"--}}
{{--                                                        >{{trans('coupons.Saving_changes')}}<i--}}
{{--                                                                class="fe fe-plus"></i></button>--}}
{{--                                                        <button class="btn ripple btn-danger"--}}
{{--                                                                data-bs-dismiss="modal" type="button">--}}
{{--                                                            {{trans('coupons.Close')}}--}}
{{--                                                        </button>--}}
{{--                                                    </div>--}}
{{--                                                </form>--}}

{{--                                            </div>--}}


{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}


                                <!-- Delete Mail Modal -->
{{--                                <div  class="modal fade" tabindex="-1" role="dialog"--}}
{{--                                      id="delete{{$coupon->id}}" aria-labelledby="myModalLabel" aria-hidden="true">--}}
{{--                                    <div class="modal-dialog">--}}
{{--                                        <div class="modal-content">--}}
{{--                                            <div class="modal-header">--}}
{{--                                                <h3 class="modal-title" id="myModalLabel">{{trans('coupons.Coupon_Delete')}} </h3>--}}
{{--                                                <button type="button" class="btn-close" data-bs-dismiss="modal"--}}
{{--                                                        aria-label="Close"></button>--}}
{{--                                            </div>--}}
{{--                                            <div class="modal-body">--}}
{{--                                                <form action="{{route('admin.coupons.destroy')}}" method="post">--}}
{{--                                                    @csrf--}}
{{--                                                    @method('DELETE')--}}
{{--                                                    <input type="hidden" name="coupon_id" value="{{$coupon->id}}">--}}

{{--                                                    <h4>{{trans('coupons.Delete_Message')}} </h4>--}}

{{--                                                    <h5><span class="text-danger">{{$coupon->code}}</span></h5>--}}
{{--                                                    <div class="modal-footer">--}}
{{--                                                        <button type="button" class="btn btn-light waves-effect"--}}
{{--                                                                data-bs-dismiss="modal">{{trans('coupons.Close')}}--}}
{{--                                                        </button>--}}
{{--                                                        <button type="submit"--}}
{{--                                                                class="btn btn-danger waves-effect waves-light">{{trans('coupons.Delete')}}--}}
{{--                                                        </button>--}}
{{--                                                    </div>--}}
{{--                                                </form>--}}
{{--                                            </div>--}}


{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            @empty

                                <tr>
{{--                                    <td colspan="8" class="text-center">{{trans('coupons.No_coupons_found')}}</td>--}}
                                </tr>
                            @endforelse


                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan="8">
                                    <div class="float-right pagination-rounded">


{{--                                        {{$coupons->links()}}--}}

                                    </div>

                                </td>
                            </tr>

                            </tfoot>
                        </table>
                    </div>

                    <!--  Add Coupon Modal -->
{{--                    <div class="modal fade" tabindex="-1" role="dialog" id="add"--}}
{{--                         aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">--}}
{{--                        <div class="modal-dialog modal-lg">--}}
{{--                            <div class="modal-content">--}}
{{--                                <div class="modal-header">--}}
{{--                                    <h5 class="modal-title" id="myExtraLargeModalLabel">{{trans('coupons.Add_New_Coupon')}}</h5>--}}
{{--                                    <button type="button" class="btn-close" data-bs-dismiss="modal"--}}
{{--                                            aria-label="Close"></button>--}}
{{--                                </div>--}}
{{--                                <div class="modal-body">--}}

{{--                                    <form action="{{route('admin.coupons.store')}}" method="post">--}}
{{--                                        @csrf--}}
{{--                                        @method('POST')--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-md-3">--}}
{{--                                                <label for="code" class=" col-form-label">{{trans('coupons.Code')}} :</label>--}}
{{--                                                <input type="text" name="code" id="codeCreate" class="form-control"--}}
{{--                                                       value="{{old('code')}}">--}}

{{--                                                @error('code')--}}
{{--                                                <span class="text-danger">{{ $message }}</span>--}}
{{--                                                @enderror--}}
{{--                                            </div>--}}

{{--                                            <div class="col-md-3">--}}

{{--                                                <label for="type" class=" col-form-label">{{trans('coupons.Type')}} : </label>--}}

{{--                                                <select class="form-control" name="type">--}}
{{--                                                    <option selected disabled> {{trans('coupons.Choose')}}...</option>--}}


{{--                                                    <option--}}
{{--                                                        value="fixed" {{old('type') == 'fixed' ?'selected' : null}}>--}}
{{--                                                        {{trans('coupons.Fixed')}}--}}
{{--                                                    </option>--}}
{{--                                                    <option--}}
{{--                                                        value="percentage" {{old('type') == 'percentage' ?'selected' : null}}>--}}
{{--                                                        {{trans('coupons.Percentage')}}--}}
{{--                                                    </option>--}}


{{--                                                </select>--}}
{{--                                                @error('type')--}}
{{--                                                <span class="text-danger">{{ $message }}</span>--}}
{{--                                                @enderror--}}

{{--                                            </div>--}}

{{--                                            <div class="col-md-3">--}}
{{--                                                <label for="value" class=" col-form-label">{{trans('coupons.Value')}} :</label>--}}
{{--                                                <input type="number" name="value" class="form-control"--}}
{{--                                                       value="{{old('value')}}">--}}

{{--                                                @error('value')--}}
{{--                                                <span class="text-danger">{{ $message }}</span>--}}
{{--                                                @enderror--}}
{{--                                            </div>--}}

{{--                                            <div class="col-3">--}}
{{--                                                <div class=" col-form-label">--}}
{{--                                                    <label for="use_times">{{trans('coupons.Used_time')}} :</label>--}}
{{--                                                    <input type="number" name="use_times"--}}
{{--                                                           value="{{ old('use_times') }}" class="form-control">--}}
{{--                                                    @error('use_times')<span--}}
{{--                                                        class="text-danger">{{ $message }}</span>@enderror--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                        </div>--}}
{{--                                        <br>--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-md-4">--}}
{{--                                                <div class="form-group">--}}
{{--                                                    <label> {{trans('coupons.Start_date')}} :</label>--}}

{{--                                                    <input type="text" name="start_date" id="start_date"--}}
{{--                                                           class="form-control"--}}
{{--                                                           value="{{old('start_date')}}">--}}

{{--                                                    @error('start_date')--}}
{{--                                                    <span class="text-danger">{{ $message }}</span>--}}
{{--                                                    @enderror--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="col-md-4">--}}
{{--                                                <div class="form-group">--}}
{{--                                                    <label> {{trans('coupons.Expired_date')}} :</label>--}}

{{--                                                    <input type="text" name="expire_date" id="expire_date"--}}
{{--                                                           class="form-control"--}}
{{--                                                           value="{{old('expire_date')}}">--}}

{{--                                                    @error('expire_date')--}}
{{--                                                    <span class="text-danger">{{ $message }}</span>--}}
{{--                                                    @enderror--}}
{{--                                                </div>--}}
{{--                                            </div>--}}


{{--                                            <div class="col-md-4">--}}
{{--                                                <div class="form-group">--}}
{{--                                                    <label for="status">{{trans('coupons.Status')}} :</label>--}}
{{--                                                    <br>--}}
{{--                                                    <select class="form-control"--}}
{{--                                                            name="status">--}}

{{--                                                        <option selected disabled> {{trans('coupons.Choose')}}...</option>--}}
{{--                                                        <option--}}
{{--                                                            value="1" {{old('status') == '1' ? 'selected' : null}}>--}}
{{--                                                            {{trans('coupons.Active')}}--}}
{{--                                                        </option>--}}
{{--                                                        <option--}}
{{--                                                            value="0" {{old('status') == '0' ? 'selected' : null}}>--}}
{{--                                                            {{trans('coupons.InActive')}}--}}
{{--                                                        </option>--}}

{{--                                                    </select>--}}
{{--                                                    @error('status')--}}
{{--                                                    <span class="text-danger">{{ $message }}</span>--}}
{{--                                                    @enderror--}}
{{--                                                </div>--}}
{{--                                            </div>--}}


{{--                                        </div>--}}
{{--                                        <br>--}}
{{--                                        <div class="row">--}}

{{--                                            <div class="col-md-12">--}}
{{--                                                <div class="form-group">--}}
{{--                                                    <label> {{trans('coupons.Description')}} :</label>--}}

{{--                                                    <textarea name="description" rows="3" id="description"--}}
{{--                                                              class="form-control">--}}

{{--                                                                     {{old('description')}}--}}
{{--                                                          </textarea>--}}

{{--                                                    @error('description')--}}
{{--                                                    <span class="text-danger">{{ $message }}</span>--}}
{{--                                                    @enderror--}}
{{--                                                </div>--}}
{{--                                            </div>--}}


{{--                                        </div>--}}
{{--                                        <div class="modal-footer">--}}
{{--                                            <button class="btn ripple btn-secondary m-lg-2" type="submit"--}}
{{--                                            > {{trans('coupons.Save')}}<i--}}
{{--                                                    class="fe fe-plus"></i></button>--}}
{{--                                            <button class="btn ripple btn-danger" data-bs-dismiss="modal"--}}
{{--                                                    type="button">--}}
{{--                                                {{trans('coupons.Close')}}--}}
{{--                                            </button>--}}
{{--                                        </div>--}}
{{--                                    </form>--}}

{{--                                </div>--}}


{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                </div>
            </div>
        </div>
    </div>

</div>
