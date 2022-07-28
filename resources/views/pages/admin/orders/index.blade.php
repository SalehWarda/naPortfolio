@extends('layouts.admin')

@section('title')
    {{trans('orders.Orders')}}
@endsection

@section('content')







    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">{{trans('orders.Orders')}}</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item active">{{trans('orders.Orders')}}</li>
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{trans('orders.Home')}}</a></li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-block d-md-flex justify-content-between">
                                <div class="d-block">
                                    <h5 class="card-title pb-0 border-0">{{trans('orders.Orders')}}</h5>
                                </div>


                            </div>


                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{trans('orders.Ref_id')}}</th>
                                        <th>{{trans('orders.User')}}</th>
                                        <th>{{trans('orders.Payment_way')}}</th>
                                        <th>{{trans('orders.Amount')}}</th>
                                        <th>{{trans('orders.Order_Status')}}</th>
                                        <th>{{trans('orders.Created_date')}}</th>
                                        <th>{{trans('orders.Actions')}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($orders as $order)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $order->ref_id }}</td>
                                            <td>{{ $order->user->full_namee }}</td>
                                            <td>{{$order->payment_method->name}}</td>
                                            <td>{{ $order->currency() . $order->total }}</td>
                                            <td>{!! $order->statusWithLabel() !!}</td>
                                            <td>{{ $order->created_at->format('Y-m-d h:i a') }}</td>
                                            <td>
                                                <div class="btn-list btn-list-icon">
                                                    <a href="{{route('admin.orders.show',$order->id)}}"
                                                            class="btn btn-info waves-effect waves-light btn-rounded"

                                                            title="{{trans('orders.Show')}}">
                                                        <i class="fa fa-eye align-middle me-2"></i>{{trans('orders.Show')}}
                                                    </a>

                                                    <button type="button"
                                                            class="btn btn-danger waves-effect waves-light btn-rounded"
                                                            data-bs-toggle="modal" data-bs-target="#delete_post"
                                                            title="{{trans('orders.Delete')}}">
                                                        <i class="ri-delete-bin-2-line align-middle me-2"></i>{{trans('orders.Delete')}}
                                                    </button>

                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="8" class="text-center">No orders found...</td>
                                        </tr>
                                    @endforelse
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <td colspan="8">
                                            <div class="float-right">
                                                {!! $orders->appends(request()->all())->links() !!}
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
        </div>
    </div>








@endsection
