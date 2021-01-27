<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreWhatIsFoodRecylingRequest;
use App\Http\Requests\UpdateWhatIsFoodRecylingRequest;
use App\Http\Resources\Admin\WhatIsFoodRecylingResource;
use App\WhatIsFoodRecyling;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class WhatIsFoodRecylingApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('what_is_food_recyling_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new WhatIsFoodRecylingResource(WhatIsFoodRecyling::all());
    }

    public function store(StoreWhatIsFoodRecylingRequest $request)
    {
        $whatIsFoodRecyling = WhatIsFoodRecyling::create($request->all());

        if ($request->input('photos_videos', false)) {
            $whatIsFoodRecyling->addMedia(storage_path('tmp/uploads/' . $request->input('photos_videos')))->toMediaCollection('photos_videos');
        }

        return (new WhatIsFoodRecylingResource($whatIsFoodRecyling))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(WhatIsFoodRecyling $whatIsFoodRecyling)
    {
        abort_if(Gate::denies('what_is_food_recyling_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new WhatIsFoodRecylingResource($whatIsFoodRecyling);
    }

    public function update(UpdateWhatIsFoodRecylingRequest $request, WhatIsFoodRecyling $whatIsFoodRecyling)
    {
        $whatIsFoodRecyling->update($request->all());

        if ($request->input('photos_videos', false)) {
            if (!$whatIsFoodRecyling->photos_videos || $request->input('photos_videos') !== $whatIsFoodRecyling->photos_videos->file_name) {
                if ($whatIsFoodRecyling->photos_videos) {
                    $whatIsFoodRecyling->photos_videos->delete();
                }

                $whatIsFoodRecyling->addMedia(storage_path('tmp/uploads/' . $request->input('photos_videos')))->toMediaCollection('photos_videos');
            }
        } elseif ($whatIsFoodRecyling->photos_videos) {
            $whatIsFoodRecyling->photos_videos->delete();
        }

        return (new WhatIsFoodRecylingResource($whatIsFoodRecyling))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(WhatIsFoodRecyling $whatIsFoodRecyling)
    {
        abort_if(Gate::denies('what_is_food_recyling_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $whatIsFoodRecyling->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
