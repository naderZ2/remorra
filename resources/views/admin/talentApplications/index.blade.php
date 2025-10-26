@extends('admin.layout.master')
@section('title', __('lang.Talent_Applications'))

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/select2.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/owlcarousel.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>{{ __('lang.Talent_Applications') }}</h3>
@endsection


{{-- @endsection --}}

@section('breadcrumb-items')
<li class="breadcrumb-item">@lang('lang.Dashboard')</li>
<li class="breadcrumb-item active">{{ __('lang.Talent_Applications') }}</li>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <form action="{{ route('admin.talent-applications.index') }}" method="GET" class="row">
                        <div class="col-md-3 mb-2">
                            <select name="city_id" class="form-control select2">
                                <option value="">{{ __('lang.All') }} {{ __('lang.Regions') }}</option>
                                @foreach($cities as $city)
                                    <option value="{{ $city->id }}" {{ request('city_id') == $city->id ? 'selected' : '' }}>
                                        {{ $city->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-2 mb-2">
                            <select name="experience" class="form-control">
                                <option value="">Experience Level</option>
                                <option value="1" {{ request('experience') == '1' ? 'selected' : '' }}>1+ Years</option>
                                <option value="3" {{ request('experience') == '3' ? 'selected' : '' }}>3+ Years</option>
                                <option value="5" {{ request('experience') == '5' ? 'selected' : '' }}>5+ Years</option>
                                <option value="10" {{ request('experience') == '10' ? 'selected' : '' }}>10+ Years</option>
                            </select>
                        </div>
                        <div class="col-md-2 mb-2">
                            <select name="english_level" class="form-control">
                                <option value="">English Level</option>
                                <option value="Basic" {{ request('english_level') == 'Basic' ? 'selected' : '' }}>Basic</option>
                                <option value="Intermediate" {{ request('english_level') == 'Intermediate' ? 'selected' : '' }}>Intermediate</option>
                                <option value="Advanced" {{ request('english_level') == 'Advanced' ? 'selected' : '' }}>Advanced</option>
                                <option value="Native" {{ request('english_level') == 'Native' ? 'selected' : '' }}>Native</option>
                            </select>
                        </div>
                        <div class="col-md-3 mb-2">
                            <input type="text" name="search" class="form-control" placeholder="{{ __('lang.search_by_name_or_email') }}" value="{{ request('search') }}">
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary">{{ __('lang.Filter') }}</button>
                            <a href="{{ route('admin.talent-applications.index') }}" class="btn btn-secondary">{{ __('lang.Reset') }}</a>
                        </div>
                    </form>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="display" id="advance-1">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>{{ __('lang.Name') }}</th>
                                    <th>{{ __('lang.Email') }}</th>
                                    <th>{{ __('lang.phone') }}</th>
                                    <th>{{ __('lang.Experience') }}</th>
                                    <th>{{ __('lang.Current_Role') }}</th>
                                    <th>{{ __('lang.English_Level') }}</th>
                                    <th>{{ __('lang.created_at') }}</th>
                                    <th>{{ __('lang.Actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($applications as $application)
                                    <tr>
                                        <td>{{ $application->id }}</td>
                                        <td>{{ $application->full_name }}</td>
                                        <td>{{ $application->email }}</td>
                                        <td>{{ $application->phone }}</td>
                                        <td>{{ $application->years_of_experience }} {{ __('lang.Years') }}</td>
                                        <td>{{ $application->current_role }}</td>
                                        <td>{{ $application->english_proficiency }}</td>
                                        <td>{{ $application->created_at->format('Y-m-d H:i') }}</td>
                                        <td>
                                            <a href="{{ route('admin.talent-applications.show', $application->id) }}" 
                                               class="btn btn-info btn-sm">
                                                <i class="fa fa-eye"></i> {{ __('lang.View') }}
                                            </a>
                                            @if($application->cv_path)
                                                <a href="{{ asset($application->cv_path) }}" 
                                                   class="btn btn-success btn-sm" 
                                                   target="_blank">
                                                    <i class="fa fa-download"></i> {{ __('lang.CV') }}
                                                </a>
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="9" class="text-center">No applications found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-3">
                        {{ $applications->appends(request()->query())->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


@section('script')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatables/datatable.custom.js')}}"></script>
<script src="{{asset('assets/js/form-validation-custom.js')}}"></script>
<script src="{{asset('assets/js/select2/select2.full.min.js')}}"></script>
<script src="{{asset('assets/js/select2/select2-custom.js')}}"></script>
<script src="{{asset('assets/js/owlcarousel/owl.carousel.js')}}"></script>
<script src="{{asset('assets/js/owlcarousel/owl-custom.js')}}"></script>
<script>
	 	$('#carouselExampleControls').carousel({
  		interval: 3000
	})


	$(document).ready(function() {
    // Initialize Select2
    $('.select2').select2();
    
    // Initialize DataTable
    var table = $('#basic-1').DataTable({
        "order": [[ 0, "desc" ]],
        "pageLength": 10,
        "language": {
            "paginate": {
                "previous": "<",
                "next": ">"
            }
        }
    });
});
</script>

@endsection

