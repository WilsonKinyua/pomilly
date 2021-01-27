<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreWhatsNewRequest;
use App\Http\Requests\UpdateWhatsNewRequest;
use App\Http\Resources\Admin\WhatsNewResource;
use App\WhatsNew;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class WhatsNewApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('whats_new_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new WhatsNewResource(WhatsNew::all());
    }

    public function store(StoreWhatsNewRequest $request)
    {
        $whatsNew = WhatsNew::create($request->all());

        return (new WhatsNewResource($whatsNew))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(WhatsNew $whatsNew)
    {
        abort_if(Gate::denies('whats_new_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new WhatsNewResource($whatsNew);
    }

    public function update(UpdateWhatsNewRequest $request, WhatsNew $whatsNew)
    {
        $whatsNew->update($request->all());

        return (new WhatsNewResource($whatsNew))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(WhatsNew $whatsNew)
    {
        abort_if(Gate::denies('whats_new_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $whatsNew->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
