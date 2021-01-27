<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreMissionAndVisionRequest;
use App\Http\Requests\UpdateMissionAndVisionRequest;
use App\Http\Resources\Admin\MissionAndVisionResource;
use App\MissionAndVision;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MissionAndVisionApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('mission_and_vision_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new MissionAndVisionResource(MissionAndVision::all());
    }

    public function store(StoreMissionAndVisionRequest $request)
    {
        $missionAndVision = MissionAndVision::create($request->all());

        return (new MissionAndVisionResource($missionAndVision))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(MissionAndVision $missionAndVision)
    {
        abort_if(Gate::denies('mission_and_vision_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new MissionAndVisionResource($missionAndVision);
    }

    public function update(UpdateMissionAndVisionRequest $request, MissionAndVision $missionAndVision)
    {
        $missionAndVision->update($request->all());

        return (new MissionAndVisionResource($missionAndVision))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(MissionAndVision $missionAndVision)
    {
        abort_if(Gate::denies('mission_and_vision_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $missionAndVision->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
