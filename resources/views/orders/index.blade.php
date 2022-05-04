@extends('layouts.app-content')
@section('breadcrumb') Orders @endsection
@section('content')

<div class="card card-custom card-stretch gutter-b">
    <!--begin::Header-->
    <div class="card-header border-0 py-5">
        <h2 class="card-title align-items-start flex-column">
            <span class="card-label font-weight-bolder text-dark">Order List</span>
        </h2>
        <div class="card-toolbar">
            <a href="{{ route('orders.create') }}" class="btn btn-success font-weight-bolder font-size-sm">
                <span class="svg-icon svg-icon-md svg-icon-white">
                    <i class="fa fa-plus"></i>
                </span>Add New Order</a>
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
                        <th style="min-width: 150px">Name</th>
                        <th style="min-width: 150px">Description</th>
                        <th style="min-width: 150px">Quantity</th>
                        <th style="min-width: 150px">Status</th>
                        <th class="pr-0" style="min-width: 150px">action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($orders as $order)
                    <tr>
                        <td class="pl-0">
                            {{ $loop->iteration }}
                        </td>
                        <td class="pl-0">
                            <a class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">{{ $order->name }}</a>
                        </td>
                        <td>
                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">{{ $order->description }}</span>
                        </td>
                        <td>
                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">{{ $order->quantity }}</span>
                        </td>
                        <td>
                            <span
                                class="label label-lg {{ $order->status == 'NEW' ? 'label-light-success' : 'label-light-secondary text-dark' }} label-inline font-weight-bold py-2">{{ $order->status == 'NEW' ? 'NEW' : 'COMPLETED' }}</span>
                        </td>
                        <td class="pr-0">
                            <form id="customer-delete" action="{{ route('orders.destroy', $order->id) }}" method="POST" >
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('orders.edit', $order) }}" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <button class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
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
            List of active orders.
        </div>
    </div>


</div>

@endsection