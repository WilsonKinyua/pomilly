<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyMottoRequest;
use App\Http\Requests\StoreMottoRequest;
use App\Http\Requests\UpdateMottoRequest;
use App\Motto;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class MottoController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('motto_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $mottoes = Motto::all();

        return view('admin.mottoes.index', compact('mottoes'));
    }

    public function create()
    {
        abort_if(Gate::denies('motto_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.mottoes.create');
    }

    public function store(StoreMottoRequest $request)
    {
        $motto = Motto::create($request->all());

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $motto->id]);
        }

        return redirect()->route('admin.mottoes.index');
    }

    public function edit(Motto $motto)
    {
        abort_if(Gate::denies('motto_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.mottoes.edit', compact('motto'));
    }

    public function update(UpdateMottoRequest $request, Motto $motto)
    {
        $motto->update($request->all());

        return redirect()->route('admin.mottoes.index');
    }

    public function show(Motto $motto)
    {
        abort_if(Gate::denies('motto_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.mottoes.show', compact('motto'));
    }

    public function destroy(Motto $motto)
    {
        abort_if(Gate::denies('motto_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $motto->delete();

        return back();
    }

    public function massDestroy(MassDestroyMottoRequest $request)
    {
        Motto::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('motto_create') && Gate::denies('motto_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Motto();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
