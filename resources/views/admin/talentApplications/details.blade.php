@extends('admin.layout.master')
@section('title', __('lang.Talent_Application_Details'))

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/select2.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>{{ __('lang.Talent_Application_Details') }}</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">@lang('lang.Dashboard')</li>
<li class="breadcrumb-item">{{ __('lang.Talent_Applications') }}</li>
<li class="breadcrumb-item active">{{ __('lang.Details') }}</li>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h5 class="mb-0">{{ __('lang.Application') }} #{{ $application->id }}</h5>
                                <small class="text-muted">{{ __('lang.Submitted_on') }} {{ $application->created_at->format('M d, Y \a\t h:i A') }}</small>
                            </div>
                            <div>
                                <a href="{{ route('admin.talent-applications.index') }}" class="btn btn-secondary me-2">
                                    <i class="fa fa-arrow-left"></i> {{ __('lang.Back_to_List') }}
                                </a>
                                @if($application->cv_path)
                                    <a href="{{ asset($application->cv_path) }}" class="btn btn-primary" target="_blank">
                                        <i class="fa fa-download"></i> {{ __('lang.Download_CV') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card border shadow-none">
                                <div class="card-header ">
                                    <h6 class="mb-0"><i class="fa fa-user me-2"></i>{{ __('lang.Personal_Information') }}</h6>
                                </div>
                                <div class="card-body">
                                    <table class="table">
                                        <tr>
                                            <th width="200">{{ __('lang.Name') }}</th>
                                            <td>{{ $application->full_name }}</td>
                                        </tr>
                                        <tr>
                                            <th>{{ __('lang.Email') }}</th>
                                            <td>
                                                <a href="mailto:{{ $application->email }}">{{ $application->email }}</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>{{ __('lang.phone') }}</th>
                                            <td>
                                                <a href="tel:{{ $application->phone }}">{{ $application->phone }}</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>{{ __('lang.City') }}</th>
                                            <td>{{ $application->city->name ?? __('lang.N_A') }}</td>
                                        </tr>
                                        <tr>
                                            <th>{{ __('lang.Risen') }}</th>
                                            <td>{{ $application->risen->name ?? __('lang.N_A') }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card border shadow-none">
                                <div class="card-header ">
                                    <h6 class="mb-0"><i class="fa fa-briefcase me-2"></i>{{ __('lang.Professional_Information') }}</h6>
                                </div>
                                <div class="card-body">
                                    <table class="table">
                                        <tr>
                                            <th width="200">{{ __('lang.Current_Role') }}</th>
                                            <td>{{ $application->current_role }}</td>
                                        </tr>
                                        <tr>
                                            <th>{{ __('lang.Years_of_Experience') }}</th>
                                            <td>{{ $application->years_of_experience }} {{ __('lang.Years') }}</td>
                                        </tr>
                                        <tr>
                                            <th>{{ __('lang.English_Proficiency') }}</th>
                                            <td>
                                                <span class="badge bg-{{ $application->english_proficiency == 'Advanced' || $application->english_proficiency == 'Native' ? 'success' : 'info' }}">
                                                    {{ $application->english_proficiency }}
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>{{ __('lang.Start_Date') }}</th>
                                            <td>{{ \Carbon\Carbon::parse($application->start_date)->format('M d, Y') }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="card border shadow-none">
                                <div class="card-header ">
                                    <h6 class="mb-0"><i class="fa fa-link me-2"></i>{{ __('lang.Online_Profiles') }}</h6>
                                </div>
                                <div class="card-body">
                                    <table class="table">
                                        <tr>
                                            <th width="200">{{ __('lang.LinkedIn_Profile') }}</th>
                                            <td>
                                                @if($application->linkedin_profile)
                                                    <a href="{{ $application->linkedin_profile }}" target="_blank" class="btn btn-outline-primary btn-sm">
                                                        <i class="fa fa-linkedin"></i> {{ __('lang.View_Profile') }}
                                                    </a>
                                                @else
                                                    <span class="text-muted">{{ __('lang.Not_provided') }}</span>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>{{ __('lang.Portfolio_URL') }}</th>
                                            <td>
                                                @if($application->portfolio_url)
                                                    <a href="{{ $application->portfolio_url }}" target="_blank" class="btn btn-outline-info btn-sm">
                                                        <i class="fa fa-globe"></i> {{ __('lang.View_Portfolio') }}
                                                    </a>
                                                @else
                                                    <span class="text-muted">{{ __('lang.Not_provided') }}</span>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>{{ __('lang.availability') }}</th>
                                            <td>{{ $application->availability }}</td>
                                        </tr>
                                        <tr>
                                            <th>{{ __('lang.Referral_Source') }}</th>
                                            <td>{{ $application->referral_source }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card border shadow-none">
                                <div class="card-header ">
                                    <h6 class="mb-0"><i class="fa fa-code me-2"></i>{{ __('lang.Technical_Skills') }}</h6>
                                </div>
                                <div class="card-body">
                                    <div class="p-3  rounded">
                                        {!! nl2br(e($application->technical_skills)) !!}
                                    </div>
                                </div>
                            </div>
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