<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TalentApplication;
use Illuminate\Http\Request;
use App\Models\City;

class TalentApplicationController extends Controller
{
    public function index(Request $request)
    {
        $this->lang();
        $query = TalentApplication::with('city');

        // Filter by city
        if ($request->has('city_id') && $request->city_id != '') {
            $query->where('city_id', $request->city_id);
        }

        // Filter by experience
        if ($request->has('experience') && $request->experience != '') {
            $query->where('years_of_experience', '>=', $request->experience);
        }

        // Filter by english proficiency
        if ($request->has('english_level') && $request->english_level != '') {
            $query->where('english_proficiency', $request->english_level);
        }

        // Search by name, email, or phone
        if ($request->has('search') && $request->search != '') {
            $searchTerm = $request->search;
            $query->where(function($q) use ($searchTerm) {
                $q->where('full_name', 'like', '%' . $searchTerm . '%')
                  ->orWhere('email', 'like', '%' . $searchTerm . '%')
                  ->orWhere('phone', 'like', '%' . $searchTerm . '%');
            });
        }

        $applications = $query->latest()->paginate(10);
        $cities = City::select('id', $this->name)->orderBy('name')->get();

        return view('admin.talentApplications.index', compact('applications', 'cities'));
    }

    public function show($id)
    {
        $this->lang();
        $application = TalentApplication::with("city:id,$this->name", "risen:id,$this->name")->findOrFail($id);
        // dd($application);
        return view('admin.talentApplications.details', compact('application'));
    }
}