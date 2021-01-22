<?php

namespace App\Http\Controllers\Admin;

use App\CoreValue;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyCoreValueRequest;
use App\Http\Requests\StoreCoreValueRequest;
use App\Http\Requests\UpdateCoreValueRequest;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class CoreValuesController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('core_value_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $coreValues = CoreValue::all();

        return view('admin.coreValues.index', compact('coreValues'));
    }

    public function create()
    {
        abort_if(Gate::denies('core_value_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.coreValues.create');
    }

    public function store(StoreCoreValueRequest $request)
    {
        $coreValue = CoreValue::create($request->all());

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $coreValue->id]);
        }

        return redirect()->route('admin.core-values.index');
    }

    public function edit(CoreValue $coreValue)
    {
        abort_if(Gate::denies('core_value_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.coreValues.edit', compact('coreValue'));
    }

    public function update(UpdateCoreValueRequest $request, CoreValue $coreValue)
    {
        $coreValue->update($request->all());

        return redirect()->route('admin.core-values.index');
    }

    public function show(CoreValue $coreValue)
    {
        abort_if(Gate::denies('core_value_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.coreValues.show', compact('coreValue'));
    }

    public function destroy(CoreValue $coreValue)
    {
        abort_if(Gate::denies('core_value_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $coreValue->delete();

        return back();
    }

    public function massDestroy(MassDestroyCoreValueRequest $request)
    {
        CoreValue::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('core_value_create') && Gate::denies('core_value_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new CoreValue();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
