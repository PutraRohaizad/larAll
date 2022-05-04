@extends('layouts.app-content')
@section('breadcrumb') Dashboard @endsection
@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="card card-custom card-stretch gutter-b">
            <!--begin::Header-->
            <div class="card-header border-0">
                <h3 class="card-title font-weight-bolder text-dark">Orders</h3>
            </div>
            <!--begin::Body-->
            <div class="card-body pt-0">
                @forelse ($orders as $order)
                <!--begin::Item-->
                <div class="mb-6">
                    <!--begin::Content-->
                    <div class="d-flex align-items-center flex-grow-1">
                        <!--begin::Section-->
                        <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
                            <!--begin::Info-->
                            <div class="d-flex flex-column align-items-cente py-2 w-75">
                                <!--begin::Title-->
                                <a href="#"
                                    class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">{{ $order->name }}</a>
                                <!--begin::Data-->
                                <span class="text-muted font-weight-bold">{{ optional($order->customer)->name }}</span>
                            </div>
                            <!--begin::Label-->
                            <span
                                class="label label-lg label-light-primary label-inline font-weight-bold py-4">{{ $order->status }}</span>
                        </div>
                    </div>
                </div>
                @empty
                    <div class="alert-warning p-3 text-center">No new order</div>
                @endforelse

            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card card-custom card-stretch gutter-b">
            <!--begin::Header-->
            <div class="card-header border-0 py-5">
                <h2 class="card-title align-items-start flex-column">
                    <span class="card-label font-weight-bolder text-dark">Customer List</span>
                </h2>
                <div class="card-toolbar">
                    <a href="{{ route('customers.create') }}" class="btn btn-success font-weight-bolder font-size-sm">
                        <span class="svg-icon svg-icon-md svg-icon-white">
                            <i class="fa fa-plus"></i>
                        </span>Add New Member</a>
                </div>
            </div>
            <!--begin::Body-->
            <div class="card-body py-0">
                <!--begin::Table-->
                <div class="table-responsive">
                    <table class="table table-head-custom table-vertical-center" id="kt_advance_table_widget_1">
                        <thead>
                            <tr class="text-left">
                                <th class="pr-0" style="width: 50px">#</th>
                                <th class="pr-0" style="width: 50px">Name</th>
                                <th style="min-width: 200px"></th>
                                <th style="min-width: 150px">Age</th>
                                <th style="min-width: 150px">Active</th>
                                <th style="min-width: 150px">Order</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($customers as $customer)
                            <tr>
                                <td class="pl-0">
                                    {{ $loop->iteration }}
                                </td>
                                <td class="pr-0">
                                    <div class="symbol symbol-50 symbol-light mt-1">
                                        <span class="symbol-label">
                                            <img src="{{ asset('assets/media/svg/avatars/001-boy.svg')}}"
                                                class="h-75 align-self-end" alt="">
                                        </span>
                                    </div>
                                </td>
                                <td class="pl-0">
                                    <a class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">{{
                                        $customer->name }}</a>
                                    <span class="text-muted font-weight-bold text-muted d-block">{{ $customer->dob
                                        }}</span>
                                </td>
                                <td>
                                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">{{ $customer->age
                                        }}</span>
                                </td>
                                <td>
                                    <span
                                        class="label label-lg {{ $customer->is_active == 1 ? 'label-light-success' : 'label-light-secondary text-dark' }} label-inline font-weight-bold py-2">{{
                                        $customer->is_active == 1 ? 'Active' : 'Not Active' }}</span>
                                </td>
                                <td>
                                    <span
                                        class="label label-lg label-light-primary label-inline font-weight-bold py-2">ProductA</span>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="99">
                                    <div class="alert-warning p-3 text-center">No Record</div>
                                </td>
                            </tr>
                            @endforelse


                        </tbody>
                    </table>
                </div>
                <div class="alert alert-secondary p-3">
                    <i class="flaticon2-right-arrow"></i>
                    List of active customers.
                </div>
            </div>


        </div>
    </div>
</div>
@endsection