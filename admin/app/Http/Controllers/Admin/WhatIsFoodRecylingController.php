<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyWhatIsFoodRecylingRequest;
use App\Http\Requests\StoreWhatIsFoodRecylingRequest;
use App\Http\Requests\UpdateWhatIsFoodRecylingRequest;
use App\WhatIsFoodRecyling;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class WhatIsFoodRecylingController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('what_is_food_recyling_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $whatIsFoodRecylings = WhatIsFoodRecyling::with(['media'])->get();

        return view('admin.whatIsFoodRecylings.index', compact('whatIsFoodRecylings'));
    }

    public function create()
    {
        abort_if(Gate::denies('what_is_food_recyling_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.whatIsFoodRecylings.create');
    }

    public function store(StoreWhatIsFoodRecylingRequest $request)
    {
        $whatIsFoodRecyling = WhatIsFoodRecyling::create($request->all());

        foreach ($request->input('photos_videos', []) as $file) {
            $whatIsFoodRecyling->addMedia(storage_path('tmp/uploads/' . $file))->toMediaCollection('photos_videos');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $whatIsFoodRecyling->id]);
        }

        return redirect()->route('admin.what-is-food-recylings.index');
    }

    public function edit(WhatIsFoodRecyling $whatIsFoodRecyling)
    {
        abort_if(Gate::denies('what_is_food_recyling_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.whatIsFoodRecylings.edit', compact('whatIsFoodRecyling'));
    }

    public function update(UpdateWhatIsFoodRecylingRequest $request, WhatIsFoodRecyling $whatIsFoodRecyling)
    {
        $whatIsFoodRecyling->update($request->all());

        if (count($whatIsFoodRecyling->photos_videos) > 0) {
            foreach ($whatIsFoodRecyling->photos_videos as $media) {
                if (!in_array($media->file_name, $request->input('photos_videos', []))) {
                    $media->delete();
                }
            }
        }

        $media = $whatIsFoodRecyling->photos_videos->pluck('file_name')->toArray();

        foreach ($request->input('photos_videos', []) as $file) {
            if (count($media) === 0 || !in_array($file, $media)) {
                $whatIsFoodRecyling->addMedia(storage_path('tmp/uploads/' . $file))->toMediaCollection('photos_videos');
            }
        }

        return redirect()->route('admin.what-is-food-recylings.index');
    }

    public function show(WhatIsFoodRecyling $whatIsFoodRecyling)
    {
        abort_if(Gate::denies('what_is_food_recyling_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.whatIsFoodRecylings.show', compact('whatIsFoodRecyling'));
    }

    public function destroy(WhatIsFoodRecyling $whatIsFoodRecyling)
    {
        abort_if(Gate::denies('what_is_food_recyling_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $whatIsFoodRecyling->delete();

        return back();
    }

    public function massDestroy(MassDestroyWhatIsFoodRecylingRequest $request)
    {
        WhatIsFoodRecyling::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('what_is_food_recyling_create') && Gate::denies('what_is_food_recyling_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new WhatIsFoodRecyling();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
