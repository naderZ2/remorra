<?php

namespace App\Http\Controllers\Api;

use App\Traits\ResponsesTrait;
use App\Models\ScheduleMeeting;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreScheduleMeetingRequest;


class ScheduleMeetingController extends Controller
{
    use ResponsesTrait;
    public function store(StoreScheduleMeetingRequest $request): JsonResponse
    {
        $meeting = ScheduleMeeting::create($request->validated());

        return $this->success($meeting, trans('lang.created'));
    }
}