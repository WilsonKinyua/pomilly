<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyWhatsNewRequest;
use App\Http\Requests\StoreWhatsNewRequest;
use App\Http\Requests\UpdateWhatsNewRequest;
use App\WhatsNew;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class WhatsNewController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('whats_new_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $whatsNews = WhatsNew::all();

        return view('admin.whatsNews.index', compact('whatsNews'));
    }

    public function create()
    {
        abort_if(Gate::denies('whats_new_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.whatsNews.create');
    }

    public function store(StoreWhatsNewRequest $request)
    {
        $whatsNew = WhatsNew::create($request->all());

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $whatsNew->id]);
        }

        return redirect()->route('admin.whats-news.index');
    }

    public function edit(WhatsNew $whatsNew)
    {
        abort_if(Gate::denies('whats_new_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.whatsNews.edit', compact('whatsNew'));
    }

    public function update(UpdateWhatsNewRequest $request, WhatsNew $whatsNew)
    {
        $whatsNew->update($request->all());

        return redirect()->route('admin.whats-news.index');
    }

    public function show(WhatsNew $whatsNew)
    {
        abort_if(Gate::denies('whats_new_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.whatsNews.show', compact('whatsNew'));
    }

    public function destroy(WhatsNew $whatsNew)
    {
        abort_if(Gate::denies('whats_new_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $whatsNew->delete();

        return back();
    }

    public function massDestroy(MassDestroyWhatsNewRequest $request)
    {
        WhatsNew::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('whats_new_create') && Gate::denies('whats_new_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new WhatsNew();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
