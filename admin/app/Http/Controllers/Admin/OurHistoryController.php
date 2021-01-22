<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyOurHistoryRequest;
use App\Http\Requests\StoreOurHistoryRequest;
use App\Http\Requests\UpdateOurHistoryRequest;
use App\OurHistory;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class OurHistoryController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('our_history_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $ourHistories = OurHistory::all();

        return view('admin.ourHistories.index', compact('ourHistories'));
    }

    public function create()
    {
        abort_if(Gate::denies('our_history_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.ourHistories.create');
    }

    public function store(StoreOurHistoryRequest $request)
    {
        $ourHistory = OurHistory::create($request->all());

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $ourHistory->id]);
        }

        return redirect()->route('admin.our-histories.index');
    }

    public function edit(OurHistory $ourHistory)
    {
        abort_if(Gate::denies('our_history_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.ourHistories.edit', compact('ourHistory'));
    }

    public function update(UpdateOurHistoryRequest $request, OurHistory $ourHistory)
    {
        $ourHistory->update($request->all());

        return redirect()->route('admin.our-histories.index');
    }

    public function show(OurHistory $ourHistory)
    {
        abort_if(Gate::denies('our_history_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.ourHistories.show', compact('ourHistory'));
    }

    public function destroy(OurHistory $ourHistory)
    {
        abort_if(Gate::denies('our_history_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $ourHistory->delete();

        return back();
    }

    public function massDestroy(MassDestroyOurHistoryRequest $request)
    {
        OurHistory::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('our_history_create') && Gate::denies('our_history_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new OurHistory();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
