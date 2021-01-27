<?php

namespace App\Http\Controllers\Admin;

use App\CareerPage;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyCareerPageRequest;
use App\Http\Requests\StoreCareerPageRequest;
use App\Http\Requests\UpdateCareerPageRequest;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class CareerPageController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('career_page_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $careerPages = CareerPage::all();

        return view('admin.careerPages.index', compact('careerPages'));
    }

    public function create()
    {
        abort_if(Gate::denies('career_page_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.careerPages.create');
    }

    public function store(StoreCareerPageRequest $request)
    {
        $careerPage = CareerPage::create($request->all());

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $careerPage->id]);
        }

        return redirect()->route('admin.career-pages.index');
    }

    public function edit(CareerPage $careerPage)
    {
        abort_if(Gate::denies('career_page_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.careerPages.edit', compact('careerPage'));
    }

    public function update(UpdateCareerPageRequest $request, CareerPage $careerPage)
    {
        $careerPage->update($request->all());

        return redirect()->route('admin.career-pages.index');
    }

    public function show(CareerPage $careerPage)
    {
        abort_if(Gate::denies('career_page_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.careerPages.show', compact('careerPage'));
    }

    public function destroy(CareerPage $careerPage)
    {
        abort_if(Gate::denies('career_page_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $careerPage->delete();

        return back();
    }

    public function massDestroy(MassDestroyCareerPageRequest $request)
    {
        CareerPage::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('career_page_create') && Gate::denies('career_page_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new CareerPage();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
