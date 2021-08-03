@extends('admin.layouts.app')

@section('content')
  <div class="subheader py-2 py-lg-6  subheader-transparent" id="kt_subheader">
        <div class="container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Mobile Toggle-->
                <button class="burger-icon burger-icon-left mr-4 d-inline-block d-lg-none"
                        id="kt_subheader_mobile_toggle">
                    <span></span>
                </button>
                <!--end::Mobile Toggle-->

                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h5 class=" text-dark font-weight-bold my-1 mr-5">
                        Show Course</h5>
                    <!--end::Page Title-->

                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item">
                            <a href="{{ url('/') }}" class="text-muted">
                                Home </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('courses.index') }}" class="text-muted">
                               Courses </a>
                        </li>
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page Heading-->
            </div>
            <!--end::Info-->

        </div>
    </div>

    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Todo-->
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-custom">
                        <div class="card-header">
                            <h3 class="card-title">
                                Show Course : # {{ $course->id }}
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 mb-5">
                                    <div class="row mb-2">
                                        <strong class="ml-3"><span>Name : </span></strong>
                                        <span>{{ $course->name ?? 'N/A' }} </span>
                                    </div>
                                    <hr>
                                </div>
                                <div class="col-md-6 mb-5">
                                    <div class="row mb-2">
                                        <strong class='ml-3'><span>Rating : </span></strong>
                                        <span>{{ $course->rating ?? 'N/A'}}</span>
                                    </div>
                                    <hr>
                                </div>
                                <div class="col-md-6 mb-5">
                                    <div class="row mb-2">
                                        <strong class='ml-3'><span>Views : </span></strong>
                                        <span>{{ $course->views ?? 'N/A' }}</span>
                                    </div>
                                    <hr>
                                </div>
                                <div class="col-md-6 mb-5">
                                    <div class="row mb-2">
                                        <strong class='ml-3'><span>Level : </span></strong>
                                        <span>{{ $course->level ?? 'N/A' }}</span>
                                    </div>
                                    <hr>
                                </div>
                                <div class="col-md-6 mb-5">
                                    <div class="row mb-2">
                                        <strong class='ml-3'><span>Hours : </span></strong>
                                        <span>{{ $course->hours ?? 'N/A' }}</span>
                                    </div>
                                    <hr>
                                </div>
                                <div class="col-md-6 mb-5">
                                    <div class="row mb-2">
                                        <strong class='ml-3'><span>Active : </span></strong>
                                        <span>{{ $course->active ?? 'N/A' }}</span>
                                    </div>
                                    <hr>
                                </div>
                                <div class="col-md-6 mb-5">
                                    <div class="row mb-2">
                                        <strong class='ml-3'><span>Created At : </span></strong>
                                        <span>{{ $course->created_at }}</span>
                                    </div>
                                    <hr>
                                </div>
                                <div class="col-md-6 mb-5">
                                    <div class="row mb-2">
                                        <strong class='ml-3'><span>Description : </span></strong>
                                        <span>{{ $course->description }}</span>
                                    </div>
                                    <hr>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
