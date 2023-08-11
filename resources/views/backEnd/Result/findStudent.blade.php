@extends('backEnd.master')
@section('title')
    FindStudent
@endsection

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('public/backEnd/') }}/css/croppie.css">
@endsection
@section('mainContent')
    <section class="sms-breadcrumb mb-40 up_breadcrumb white-box">
        <div class="container-fluid">
            <div class="row justify-content-between">
                <h1>@lang('student.student_admission')</h1>
                <div class="bc-pages">
                    <a href="{{ route('dashboard') }}">@lang('common.dashboard')</a>
                    <a href="#">@lang('student.student_information')</a>
                    <a href="#">@lang('student.student_admission')</a>
                </div>
            </div>
        </div>
    </section>
    <section class="admin-visitor-area up_st_admin_visitor">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-lg-6 col-sm-6">
                    <div class="main-title xs_mt_0 mt_0_sm">
                        <h3 class="mb-0">search for Result</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-6" style="margin-top: 50px;margin-left: 10px;">
                    <div class="main-title xs_mt_0 mt_0_sm">
                        <form action="{{ route('show.result') }}" method="post">
                            @csrf
                            <input class="primary-input form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                id="email" type="email" name="email">
                            <label>Enter Eamil
                                <span>*</span></label>
                            <input type="submit" value="search" class="btn btn-primary" style="margin-top: 15px" />
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-sm-12">

                    @if (Session::has('errorMessage'))
                        <div class="alert alert-danger" style="margin-top: 20px">{{ Session::get('errorMessage') }}</div>
                    @endif
                </div>

            </div>
    </section>
@endsection
