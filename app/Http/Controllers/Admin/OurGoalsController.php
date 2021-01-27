<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyOurGoalRequest;
use App\Http\Requests\StoreOurGoalRequest;
use App\Http\Requests\UpdateOurGoalRequest;
use App\OurGoal;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class OurGoalsController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('our_goal_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $ourGoals = OurGoal::all();

        return view('admin.ourGoals.index', compact('ourGoals'));
    }

    public function create()
    {
        abort_if(Gate::denies('our_goal_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.ourGoals.create');
    }

    public function store(StoreOurGoalRequest $request)
    {
        $ourGoal = OurGoal::create($request->all());

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $ourGoal->id]);
        }

        return redirect()->route('admin.our-goals.index');
    }

    public function edit(OurGoal $ourGoal)
    {
        abort_if(Gate::denies('our_goal_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.ourGoals.edit', compact('ourGoal'));
    }

    public function update(UpdateOurGoalRequest $request, OurGoal $ourGoal)
    {
        $ourGoal->update($request->all());

        return redirect()->route('admin.our-goals.index');
    }

    public function show(OurGoal $ourGoal)
    {
        abort_if(Gate::denies('our_goal_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.ourGoals.show', compact('ourGoal'));
    }

    public function destroy(OurGoal $ourGoal)
    {
        abort_if(Gate::denies('our_goal_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $ourGoal->delete();

        return back();
    }

    public function massDestroy(MassDestroyOurGoalRequest $request)
    {
        OurGoal::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('our_goal_create') && Gate::denies('our_goal_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new OurGoal();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
