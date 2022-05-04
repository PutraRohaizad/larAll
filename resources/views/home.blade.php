@extends('layouts.app-content')
@section('breadcrumb') Dashboard @endsection
@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="card card-custom card-stretch gutter-b">
            <!--begin::Body-->
            <div class="card-body d-flex flex-column">
                <div class="flex-grow-1 pb-5">
                    <!--begin::Info-->
                    <div class="d-flex align-items-center pr-2 mb-6">
                        <span class="text-muted font-weight-bold font-size-lg flex-grow-1">7 Hours Ago</span>
                        <div class="symbol symbol-50">
                            <span class="symbol-label bg-light-light">
                                <img src="{{ asset('assets/media/svg/misc/006-plurk.svg')}}"
                                    class="h-50 align-self-center" alt="">
                            </span>
                        </div>
                    </div>
                    <!--end::Info-->
                    <!--begin::Link-->
                    <a href="#" class="text-dark font-weight-bolder text-hover-primary font-size-h4">PitStop - Multiple
                        Email
                        <br>Generator</a>
                    <!--end::Link-->
                    <!--begin::Desc-->
                    <p class="text-dark-50 font-weight-normal font-size-lg mt-6">Pitstop creates quick email campaigns.
                        <br>We help to strengthen your brand
                        <br>for your every purpose.
                    </p>
                    <!--end::Desc-->
                </div>
                <!--begin::Team-->
                <div class="d-flex align-items-center">
                    <!--begin::Pic-->
                    <a href="#" class="symbol symbol-45 symbol-light mr-3">
                        <div class="symbol-label">
                            <img src="{{ asset('assets/media/svg/avatars/001-boy.svg')}}"
                                class="h-75 align-self-end" alt="">
                        </div>
                    </a>
                    <!--end::Pic-->
                    <!--begin::Pic-->
                    <a href="#" class="symbol symbol-45 symbol-light mr-3">
                        <div class="symbol-label">
                            <img src="{{ asset('assets/media/svg/avatars/028-girl-16.svg')}}"
                                class="h-75 align-self-end" alt="">
                        </div>
                    </a>
                    <!--end::Pic-->
                    <!--begin::Pic-->
                    <a href="#" class="symbol symbol-45 symbol-light">
                        <div class="symbol-label">
                            <img src="{{ asset('assets/media/svg/avatars/024-boy-9.svg')}}"
                                class="h-75 align-self-end" alt="">
                        </div>
                    </a>
                    <!--end::Pic-->
                </div>
                <!--end::Team-->
            </div>
            <!--end::Body-->
        </div>
    </div>
    <div class="col-md-8">
        <div class="card card-custom card-stretch gutter-b">
            <!--begin::Header-->
            <div class="card-header border-0 py-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label font-weight-bolder text-dark">Agents Stats</span>
                    <span class="text-muted mt-3 font-weight-bold font-size-sm">More than 400+ new members</span>
                </h3>
            </div>
            <!--begin::Body-->
            <div class="card-body py-0">
                <!--begin::Table-->
                <div class="table-responsive">
                    <table class="table table-head-custom table-vertical-center" id="kt_advance_table_widget_1">
                        <thead>
                            <tr class="text-left">
                                <th class="pr-0" style="width: 50px">authors</th>
                                <th style="min-width: 200px"></th>
                                <th style="min-width: 150px">company</th>
                                <th style="min-width: 150px">progress</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 0; $i < 3; $i++)
                            <tr>
                                <td class="pr-0">
                                    <div class="symbol symbol-50 symbol-light mt-1">
                                        <span class="symbol-label">
                                            <img src="{{ asset('assets/media/svg/avatars/001-boy.svg')}}"
                                                class="h-75 align-self-end" alt="">
                                        </span>
                                    </div>
                                </td>
                                <td class="pl-0">
                                    <a href="#"
                                        class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Brad
                                        Simmons</a>
                                    <span class="text-muted font-weight-bold text-muted d-block">HTML, JS,
                                        ReactJS</span>
                                </td>
                                <td>
                                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">Intertico</span>
                                    <span class="text-muted font-weight-bold">Web, UI/UX Design</span>
                                </td>
                                <td>
                                    <div class="d-flex flex-column w-100 mr-2">
                                        <div class="d-flex align-items-center justify-content-between mb-2">
                                            <span class="text-muted mr-2 font-size-sm font-weight-bold">65%</span>
                                            <span class="text-muted font-size-sm font-weight-bold">Progress</span>
                                        </div>
                                        <div class="progress progress-xs w-100">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 65%;"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endfor
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection