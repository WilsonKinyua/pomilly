<?php

namespace App\Http\Controllers\Admin;

use App\Donate;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyDonateRequest;
use App\Http\Requests\StoreDonateRequest;
use App\Http\Requests\UpdateDonateRequest;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class DonateController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('donate_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $donates = Donate::all();

        return view('admin.donates.index', compact('donates'));
    }

    public function create()
    {
        abort_if(Gate::denies('donate_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.donates.create');
    }

    public function store(StoreDonateRequest $request)
    {
        $donate = Donate::create($request->all());

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $donate->id]);
        }

        return redirect()->route('admin.donates.index');
    }

    public function edit(Donate $donate)
    {
        abort_if(Gate::denies('donate_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.donates.edit', compact('donate'));
    }

    public function update(UpdateDonateRequest $request, Donate $donate)
    {
        $donate->update($request->all());

        return redirect()->route('admin.donates.index');
    }

    public function show(Donate $donate)
    {
        abort_if(Gate::denies('donate_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.donates.show', compact('donate'));
    }

    public function destroy(Donate $donate)
    {
        abort_if(Gate::denies('donate_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $donate->delete();

        return back();
    }

    public function massDestroy(MassDestroyDonateRequest $request)
    {
        Donate::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('donate_create') && Gate::denies('donate_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Donate();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
