@extends('admin.layout.master')
@section('title', __('lang.Talent_Request_Details'))

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/select2.css')}}">
@endsection

@section('breadcrumb-title')
<h3>{{ __('lang.Talent_Request_Details') }}</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">@lang('lang.Dashboard')</li>
<li class="breadcrumb-item">{{ __('lang.Talent_Requests') }}</li>
<li class="breadcrumb-item active">{{ __('lang.Details') }}</li>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="mb-0">{{ __('lang.Request') }} #{{ $requestItem->id }}</h5>
                        <small class="text-muted">{{ $requestItem->created_at->format('M d, Y \a\t h:i A') }}</small>
                    </div>
                    <div>
                        <a href="{{ route('admin.talent-requests.index') }}" class="btn btn-secondary">{{ __('lang.Back_to_List') }}</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <table class="table table-bordered">
                                <tr><th>{{ __('lang.Company') }}</th><td>{{ $requestItem->company_name }}</td></tr>
                                <tr><th>{{ __('lang.Company_Website') }}</th><td>{{ $requestItem->company_website }}</td></tr>
                                <tr><th>{{ __('lang.Contact_Person') }}</th><td>{{ $requestItem->contact_person_name }}</td></tr>
                                <tr><th>{{ __('lang.Contact_Email') }}</th><td>{{ $requestItem->contact_email }}</td></tr>
                                <tr><th>{{ __('lang.Contact_Phone') }}</th><td>{{ $requestItem->contact_phone }}</td></tr>
                                <tr><th>{{ __('lang.Job_Title') }}</th><td>{{ $requestItem->job_title }}</td></tr>
                                <tr><th>{{ __('lang.Number_of_Positions') }}</th><td>{{ $requestItem->number_of_positions }}</td></tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <table class="table table-bordered">
                                <tr><th>{{ __('lang.Experience_Level') }}</th><td>{{ $requestItem->experience_level }}</td></tr>
                                <tr><th>{{ __('lang.Employment_Type') }}</th><td>{{ $requestItem->employment_type }}</td></tr>
                                <tr><th>{{ __('lang.Contract_Duration') }}</th><td>{{ $requestItem->contract_duration }}</td></tr>
                                <tr><th>{{ __('lang.Expected_Start_Date') }}</th><td>{{ $requestItem->expected_start_date }}</td></tr>
                                <tr><th>{{ __('lang.Budget_Range') }}</th><td>{{ $requestItem->budget_range }}</td></tr>
                            </table>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12">
                            <h5>{{ __('lang.Required_Skills') }}</h5>
                            <div class="p-3 ">{!! nl2br(e($requestItem->required_skills)) !!}</div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12">
                            <h5>{{ __('lang.Job_Description') }}</h5>
                            <div class="p-3 ">{!! nl2br(e($requestItem->job_description)) !!}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{asset('assets/js/select2/select2.full.min.js')}}"></script>
<script src="{{asset('assets/js/select2/select2-custom.js')}}"></script>
@endsection
