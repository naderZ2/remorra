<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TalentRequest extends Model
{
    use HasFactory;

    protected $table = 'talent_requests';

    protected $fillable = [
        'company_name',
        'company_website',
        'contact_person_name',
        'contact_email',
        'contact_phone',
        'job_title',
        'number_of_positions',
        'experience_level',
        'employment_type',
        'contract_duration',
        'expected_start_date',
        'timezone_preference',
        'preferred_working_hours',
        'required_skills',
        'nice_to_have_skills',
        'tools_used',
        'language_requirements',
        'certifications_required',
        'budget_range',
        'job_description',
        'company_policies',
        'heard_about',
        'additional_notes',
        'agree_terms',
    ];
}
