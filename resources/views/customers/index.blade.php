@extends('layouts.app-content')
@section('breadcrumb') Customers @endsection
@section('content')

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
                        <th class="pr-0" style="min-width: 150px">action</th>
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
                            <a class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">{{ $customer->name }}</a>
                            <span class="text-muted font-weight-bold text-muted d-block">{{ $customer->dob }}</span>
                        </td>
                        <td>
                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">{{ $customer->age }}</span>
                        </td>
                        <td>
                            <span
                                class="label label-lg {{ $customer->is_active == 1 ? 'label-light-success' : 'label-light-secondary text-dark' }} label-inline font-weight-bold py-2">{{ $customer->is_active == 1 ? 'Active' : 'Not Active' }}</span>
                        </td>
                        <td>
                            <span class="label label-lg label-light-primary label-inline font-weight-bold py-2">ProductA</span>
                        </td>
                        <td class="pr-0">
                        
                            <form id="customer-delete" action="{{ route('customers.destroy', $customer->id) }}" method="POST" >
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('customers.edit', $customer) }}" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
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
            List of active customers.
        </div>
    </div>


</div>

@endsection