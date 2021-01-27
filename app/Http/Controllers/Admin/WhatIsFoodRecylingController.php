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
        $data = ([
            "description"       =>$request->description,
        ]);

        if($file = $request->file("photo")) {

            $name = time() . $file->getClientOriginalName();
            $name = $file->move("images/what-is-food-recylings", $name);
            $data['file'] = $name;
        }

        $whatIsFoodRecyling = WhatIsFoodRecyling::create($data);

        return redirect()->route('admin.what-is-food-recylings.index');
    }

    public function edit(WhatIsFoodRecyling $whatIsFoodRecyling)
    {
        abort_if(Gate::denies('what_is_food_recyling_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.whatIsFoodRecylings.edit', compact('whatIsFoodRecyling'));
    }

    public function update(UpdateWhatIsFoodRecylingRequest $request, WhatIsFoodRecyling $whatIsFoodRecyling)
    {
        $data = ([
            "description"       =>$request->description,
        ]);

        if($file = $request->file("photo")) {

            $name = time() . $file->getClientOriginalName();
            $name = $file->move("images/what-is-food-recylings", $name);
            $data['file'] = $name;
        }

        $whatIsFoodRecyling->update($data);

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
