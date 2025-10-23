<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTalentRequestRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'company_name' => 'required|string|max:255',
            'company_website' => 'required|url|max:255',
            'contact_person_name' => 'required|string|max:255',
            'contact_email' => 'required|email|max:255',
            'contact_phone' => 'required|string|max:20',
            'job_title' => 'required|string|max:255',
            'number_of_positions' => 'required|integer|min:1',
            'experience_level' => 'required|string|max:100',
            'employment_type' => 'required|string|max:100',
            'contract_duration' => 'required|string|max:100',
            'expected_start_date' => 'required|date',
            'timezone_preference' => 'required|string|max:100',
            'preferred_working_hours' => 'required|string|max:255',
            'required_skills' => 'required|string',
            'nice_to_have_skills' => 'nullable|string',
            'tools_used' => 'required|string',
            'language_requirements' => 'required|string',
            'certifications_required' => 'nullable|string',
            'budget_range' => 'required|string|max:255',
            'job_description' => 'required|string',
            'company_policies' => 'nullable|string',
            'heard_about' => 'required|string|max:255',
            'additional_notes' => 'nullable|string',
            'agree_terms' => 'required|boolean|accepted',
        ];
    }
}