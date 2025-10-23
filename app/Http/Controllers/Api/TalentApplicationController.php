<?php

namespace App\Http\Controllers\Api;

use App\Traits\ResponsesTrait;
use App\Traits\FileUploadTrait;
use App\Models\TalentApplication;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTalentApplicationRequest;

class TalentApplicationController extends Controller
{
    use ResponsesTrait,FileUploadTrait;
    public function store(StoreTalentApplicationRequest $request): JsonResponse
    {
        $validated = $request->validated();
        
        if ($request->hasFile('cv_path')) {
            $validated['cv_path'] = $this->uploadFile($request->file('cv_path'), 'cv_files', 'public');
        }

        $application = TalentApplication::create($validated);

        return $this->success($application, trans('lang.created'));
    }
}