<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Donate;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreDonateRequest;
use App\Http\Requests\UpdateDonateRequest;
use App\Http\Resources\Admin\DonateResource;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DonateApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('donate_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new DonateResource(Donate::all());
    }

    public function store(StoreDonateRequest $request)
    {
        $donate = Donate::create($request->all());

        return (new DonateResource($donate))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Donate $donate)
    {
        abort_if(Gate::denies('donate_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new DonateResource($donate);
    }

    public function update(UpdateDonateRequest $request, Donate $donate)
    {
        $donate->update($request->all());

        return (new DonateResource($donate))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Donate $donate)
    {
        abort_if(Gate::denies('donate_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $donate->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
