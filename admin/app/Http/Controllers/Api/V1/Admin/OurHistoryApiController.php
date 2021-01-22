<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreOurHistoryRequest;
use App\Http\Requests\UpdateOurHistoryRequest;
use App\Http\Resources\Admin\OurHistoryResource;
use App\OurHistory;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class OurHistoryApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('our_history_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new OurHistoryResource(OurHistory::all());
    }

    public function store(StoreOurHistoryRequest $request)
    {
        $ourHistory = OurHistory::create($request->all());

        return (new OurHistoryResource($ourHistory))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(OurHistory $ourHistory)
    {
        abort_if(Gate::denies('our_history_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new OurHistoryResource($ourHistory);
    }

    public function update(UpdateOurHistoryRequest $request, OurHistory $ourHistory)
    {
        $ourHistory->update($request->all());

        return (new OurHistoryResource($ourHistory))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(OurHistory $ourHistory)
    {
        abort_if(Gate::denies('our_history_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $ourHistory->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
