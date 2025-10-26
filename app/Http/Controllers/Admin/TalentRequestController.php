<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TalentRequest;
use Illuminate\Http\Request;
use App\Models\City;

class TalentRequestController extends Controller
{
    public function index(Request $request)
    {
        $query = TalentRequest::query();

        // Filter by experience level
        if ($request->has('experience_level') && $request->experience_level != '') {
            $query->where('experience_level', $request->experience_level);
        }

        // Search by company, contact or job title
        if ($request->has('search') && $request->search != '') {
            $searchTerm = $request->search;
            $query->where(function($q) use ($searchTerm) {
                $q->where('company_name', 'like', '%' . $searchTerm . '%')
                  ->orWhere('contact_person_name', 'like', '%' . $searchTerm . '%')
                  ->orWhere('contact_email', 'like', '%' . $searchTerm . '%')
                  ->orWhere('job_title', 'like', '%' . $searchTerm . '%');
            });
        }

        $requests = $query->latest()->paginate(10);

        return view('admin.talentRequests.index', compact('requests'));
    }

    public function show($id)
    {
        $requestItem = TalentRequest::findOrFail($id);
        return view('admin.talentRequests.details', compact('requestItem'));
    }
}
