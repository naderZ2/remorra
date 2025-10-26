@extends('admin.layout.master')
@section('title', __('lang.Talent_Requests'))

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/select2.css')}}">
@endsection

@section('breadcrumb-title')
<h3>{{ __('lang.Talent_Requests') }}</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">@lang('lang.Dashboard')</li>
<li class="breadcrumb-item active">{{ __('lang.Talent_Requests') }}</li>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <form action="{{ route('admin.talent-requests.index') }}" method="GET" class="row">
                        <div class="col-md-3 mb-2">
                            <input type="text" name="search" class="form-control" placeholder="{{ __('lang.search_by_company_contact_or_job') }}" value="{{ request('search') }}">
                        </div>
                        <div class="col-md-3 mb-2">
                            <select name="experience_level" class="form-control">
                                <option value="">{{ __('lang.All') }}</option>
                                <option value="Junior" {{ request('experience_level') == 'Junior' ? 'selected' : '' }}>Junior</option>
                                <option value="Mid" {{ request('experience_level') == 'Mid' ? 'selected' : '' }}>Mid</option>
                                <option value="Senior" {{ request('experience_level') == 'Senior' ? 'selected' : '' }}>Senior</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary">{{ __('lang.Filter') }}</button>
                            <a href="{{ route('admin.talent-requests.index') }}" class="btn btn-secondary">{{ __('lang.Reset') }}</a>
                        </div>
                    </form>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="display" id="requests-table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>{{ __('lang.Company') }}</th>
                                    <th>{{ __('lang.Contact_Person') }}</th>
                                    <th>{{ __('lang.Contact_Email') }}</th>
                                    <th>{{ __('lang.Job_Title') }}</th>
                                    <th>{{ __('lang.Number_of_Positions') }}</th>
                                    <th>{{ __('lang.Experience_Level') }}</th>
                                    <th>{{ __('lang.created_at') }}</th>
                                    <th>{{ __('lang.Actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($requests as $r)
                                    <tr>
                                        <td>{{ $r->id }}</td>
                                        <td>{{ $r->company_name }}</td>
                                        <td>{{ $r->contact_person_name }}</td>
                                        <td>{{ $r->contact_email }}</td>
                                        <td>{{ $r->job_title }}</td>
                                        <td>{{ $r->number_of_positions }}</td>
                                        <td>{{ $r->experience_level }}</td>
                                        <td>{{ $r->created_at->format('Y-m-d H:i') }}</td>
                                        <td>
                                            <a href="{{ route('admin.talent-requests.show', $r->id) }}" class="btn btn-info btn-sm">{{ __('lang.View') }}</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr><td colspan="9" class="text-center">{{ __('lang.No_records_found') }}</td></tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-3">
                        {{ $requests->appends(request()->query())->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatables/datatable.custom.js')}}"></script>
<script>
    $(document).ready(function(){
        $('#requests-table').DataTable({
            "order": [[0, 'desc']],
            "pageLength": 10
        });
    });
</script>
@endsection
