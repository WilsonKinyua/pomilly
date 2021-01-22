<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreOurGoalRequest;
use App\Http\Requests\UpdateOurGoalRequest;
use App\Http\Resources\Admin\OurGoalResource;
use App\OurGoal;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class OurGoalsApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('our_goal_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new OurGoalResource(OurGoal::all());
    }

    public function store(StoreOurGoalRequest $request)
    {
        $ourGoal = OurGoal::create($request->all());

        return (new OurGoalResource($ourGoal))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(OurGoal $ourGoal)
    {
        abort_if(Gate::denies('our_goal_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new OurGoalResource($ourGoal);
    }

    public function update(UpdateOurGoalRequest $request, OurGoal $ourGoal)
    {
        $ourGoal->update($request->all());

        return (new OurGoalResource($ourGoal))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(OurGoal $ourGoal)
    {
        abort_if(Gate::denies('our_goal_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $ourGoal->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
