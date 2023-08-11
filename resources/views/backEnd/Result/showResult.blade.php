@extends('backEnd.master')
@section('title')
    Result
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
                <div class="col-lg-12 col-sm-12" style="margin-top: 50px;margin-left: 10px;">
                    <div class="main-title xs_mt_0 mt_0_sm">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">subject</th>
                                    <th scope="col">subject Code</th>
                                    <th scope="col">total marks</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($result as $num => $data)
                                    <tr>
                                        <th scope="row">{{ $num + 1 }}</th>
                                        <td>{{ $data->subject->subject_name }}</td>
                                        <td>{{ $data->subject->subject_code }}</td>
                                        <td>{{ $data->total_marks }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row">
                <form action="{{ route('export.pdf') }}" method="post">
                    @csrf
                    <input type="hidden" name="email" value="{{ $email }}" />
                    <button type="submit" class="btn btn-primary" style="margin-left: 20px">Export To Pdf</button>
                </form>
            </div>
    </section>
@endsection
