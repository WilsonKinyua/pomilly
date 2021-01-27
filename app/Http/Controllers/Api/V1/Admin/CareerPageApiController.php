<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\CareerPage;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreCareerPageRequest;
use App\Http\Requests\UpdateCareerPageRequest;
use App\Http\Resources\Admin\CareerPageResource;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CareerPageApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('career_page_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CareerPageResource(CareerPage::all());
    }

    public function store(StoreCareerPageRequest $request)
    {
        $careerPage = CareerPage::create($request->all());

        return (new CareerPageResource($careerPage))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(CareerPage $careerPage)
    {
        abort_if(Gate::denies('career_page_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CareerPageResource($careerPage);
    }

    public function update(UpdateCareerPageRequest $request, CareerPage $careerPage)
    {
        $careerPage->update($request->all());

        return (new CareerPageResource($careerPage))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(CareerPage $careerPage)
    {
        abort_if(Gate::denies('career_page_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $careerPage->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
