<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyWhatWeDoRequest;
use App\Http\Requests\StoreWhatWeDoRequest;
use App\Http\Requests\UpdateWhatWeDoRequest;
use App\WhatWeDo;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class WhatWeDoController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('what_we_do_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $whatWeDos = WhatWeDo::all();

        return view('admin.whatWeDos.index', compact('whatWeDos'));
    }

    public function create()
    {
        abort_if(Gate::denies('what_we_do_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.whatWeDos.create');
    }

    public function store(StoreWhatWeDoRequest $request)
    {
        $whatWeDo = WhatWeDo::create($request->all());

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $whatWeDo->id]);
        }

        return redirect()->route('admin.what-we-dos.index');
    }

    public function edit(WhatWeDo $whatWeDo)
    {
        abort_if(Gate::denies('what_we_do_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.whatWeDos.edit', compact('whatWeDo'));
    }

    public function update(UpdateWhatWeDoRequest $request, WhatWeDo $whatWeDo)
    {
        $whatWeDo->update($request->all());

        return redirect()->route('admin.what-we-dos.index');
    }

    public function show(WhatWeDo $whatWeDo)
    {
        abort_if(Gate::denies('what_we_do_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.whatWeDos.show', compact('whatWeDo'));
    }

    public function destroy(WhatWeDo $whatWeDo)
    {
        abort_if(Gate::denies('what_we_do_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $whatWeDo->delete();

        return back();
    }

    public function massDestroy(MassDestroyWhatWeDoRequest $request)
    {
        WhatWeDo::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('what_we_do_create') && Gate::denies('what_we_do_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new WhatWeDo();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
