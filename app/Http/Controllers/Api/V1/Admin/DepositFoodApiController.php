<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\DepositFood;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreDepositFoodRequest;
use App\Http\Requests\UpdateDepositFoodRequest;
use App\Http\Resources\Admin\DepositFoodResource;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DepositFoodApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('deposit_food_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new DepositFoodResource(DepositFood::all());
    }

    public function store(StoreDepositFoodRequest $request)
    {
        $depositFood = DepositFood::create($request->all());

        return (new DepositFoodResource($depositFood))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(DepositFood $depositFood)
    {
        abort_if(Gate::denies('deposit_food_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new DepositFoodResource($depositFood);
    }

    public function update(UpdateDepositFoodRequest $request, DepositFood $depositFood)
    {
        $depositFood->update($request->all());

        return (new DepositFoodResource($depositFood))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(DepositFood $depositFood)
    {
        abort_if(Gate::denies('deposit_food_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $depositFood->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
