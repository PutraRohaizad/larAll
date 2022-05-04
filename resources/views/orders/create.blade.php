@extends('layouts.app-content')
@section('breadcrumb') Create New Orders @endsection
@section('content')

<div class="card card-custom">
    <div class="card-header">
        <h3 class="card-title">Orders Information</h3>
    </div>
    <div class="card-body">
        <form class="form" action="{{ route('orders.store') }}" method="POST">
            @csrf
            <div class="form-group form-group-last">
                <div class="alert alert-custom alert-default" role="alert">
                    <div class="alert-icon"><i class="flaticon-warning text-primary"></i></div>
                    <div class="alert-text">
                        All new orders will be <code>ACTIVE</code>.
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                    value="{{ old('name') }}" />
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea name="description" id="description" cols="30" rows="5" class="form-control">{{ old('description') }}</textarea>
            </div>
            <div class="form-group">
                <label>Quantity</label>
                <input type="number" class="form-control @error('quantity') is-invalid @enderror" name="quantity"
                    value="{{ old('quantity') }}" />
            </div>
            <div class="form-group">
                <label>Customer</label>
                <select name="customer_id" id="customer_id" class="custom-select">
                    <option value="">Please select</option>
                    @foreach ($customers as $customer)
                        <option value="{{ $customer->id }}"@if($customer->id == old('customer_id')) selected @endif>{{ $customer->name }}</option>
                    @endforeach
                </select>
            </div>
    </div>
    <div class="mx-5 my-3">
        <button type="submit" class="btn btn-success mr-2">Submit</button>
        <button type="reset" class="btn btn-secondary">Cancel</button>
    </div>
    </form>
    <!--end::Form-->
</div>
@endsection