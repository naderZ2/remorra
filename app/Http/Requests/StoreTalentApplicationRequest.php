<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTalentApplicationRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'city_id' => 'required|integer|exists:cities,id',
            'risen_id' => 'nullable|integer|exists:cities,id',
            'linkedin_profile' => 'required|url|max:255',
            'current_role' => 'required|string|max:255',
            'years_of_experience' => 'required|numeric|min:0',
            'technical_skills' => 'required|string',
            'english_proficiency' => 'required|string|max:50',
            'cv_path' => 'required|file|mimes:pdf,doc,docx|max:10240',
            'portfolio_url' => 'nullable|url|max:255',
            'availability' => 'required|string|max:100',
            'start_date' => 'required|date',
            'referral_source' => 'required|string|max:255',
        ];
    }
}