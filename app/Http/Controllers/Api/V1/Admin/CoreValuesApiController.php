<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\CoreValue;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreCoreValueRequest;
use App\Http\Requests\UpdateCoreValueRequest;
use App\Http\Resources\Admin\CoreValueResource;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CoreValuesApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('core_value_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CoreValueResource(CoreValue::all());
    }

    public function store(StoreCoreValueRequest $request)
    {
        $coreValue = CoreValue::create($request->all());

        return (new CoreValueResource($coreValue))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(CoreValue $coreValue)
    {
        abort_if(Gate::denies('core_value_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CoreValueResource($coreValue);
    }

    public function update(UpdateCoreValueRequest $request, CoreValue $coreValue)
    {
        $coreValue->update($request->all());

        return (new CoreValueResource($coreValue))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(CoreValue $coreValue)
    {
        abort_if(Gate::denies('core_value_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $coreValue->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
