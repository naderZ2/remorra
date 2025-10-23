<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TalentApplication extends Model
{
    use HasFactory;

    protected $table = 'talent_applications';

    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'city_id',
        'risen_id',
        'linkedin_profile',
        'current_role',
        'years_of_experience',
        'technical_skills',
        'english_proficiency',
        'cv_path',
        'portfolio_url',
        'availability',
        'start_date',
        'referral_source',
    ];
}
