<?php

namespace App\Http\Controllers\Api;

use App\Models\TalentRequest;
use App\Traits\ResponsesTrait;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTalentRequestRequest;

class TalentRequestController extends Controller
{
    use ResponsesTrait;
    public function store(StoreTalentRequestRequest $request): JsonResponse
    {
        $talentRequest = TalentRequest::create($request->validated());

        return $this->success($talentRequest, trans('lang.created'));
    }
}