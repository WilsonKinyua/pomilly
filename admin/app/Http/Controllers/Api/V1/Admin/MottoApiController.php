<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreMottoRequest;
use App\Http\Requests\UpdateMottoRequest;
use App\Http\Resources\Admin\MottoResource;
use App\Motto;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MottoApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('motto_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new MottoResource(Motto::all());
    }

    public function store(StoreMottoRequest $request)
    {
        $motto = Motto::create($request->all());

        return (new MottoResource($motto))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Motto $motto)
    {
        abort_if(Gate::denies('motto_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new MottoResource($motto);
    }

    public function update(UpdateMottoRequest $request, Motto $motto)
    {
        $motto->update($request->all());

        return (new MottoResource($motto))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Motto $motto)
    {
        abort_if(Gate::denies('motto_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $motto->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
