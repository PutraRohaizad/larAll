@extends('layouts.app-content')
@section('breadcrumb') Edit New Customer @endsection
@section('content')

<div class="card card-custom">
    <div class="card-header">
        <h3 class="card-title">Customer Information</h3>
    </div>
    <div class="card-body">
        <form class="form" action="{{ route('customers.update', $customer) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group form-group-last">
                <div class="alert alert-custom alert-default" role="alert">
                    <div class="alert-icon"><i class="flaticon-warning text-primary"></i></div>
                    <div class="alert-text">
                        All new customer will be <code>ACTIVE</code>.
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                    value="{{ old('name', $customer->name ) }}" />
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email', $customer->email) }}" />
            </div>
            <div class="form-group">
                <label>Age</label>
                <input type="number" class="form-control @error('age') is-invalid @enderror" name="age"
                    value="{{ old('age', $customer->age) }}" />
            </div>
            <div class="form-group">
                <label>DOB</label>
                <input type="date" class="form-control @error('dob') is-invalid @enderror" name="dob"
                    value="{{ old('dob', $customer->dob) }}" />
            </div>
            <div class="form-group">
                <label>PIC</label>
                <input type="file" class="form-control @error('pic') is-invalid @enderror" name="pic"
                    value="{{ old('pic', $customer->pic) }}" />
            </div>
            <div class="form-group">
                <label>Status</label>
                <select name="is_active" id="is_active" class="custom-select">
                    <option value="1" @if(old('is_active', $customer->is_active) == 1 ) selected @endif>Active</option>
                    <option value="0" @if(old('is_active', $customer->is_active) == 0 ) selected @endif>Not Active</option>
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