<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyMissionAndVisionRequest;
use App\Http\Requests\StoreMissionAndVisionRequest;
use App\Http\Requests\UpdateMissionAndVisionRequest;
use App\MissionAndVision;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class MissionAndVisionController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('mission_and_vision_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $missionAndVisions = MissionAndVision::all();

        return view('admin.missionAndVisions.index', compact('missionAndVisions'));
    }

    public function create()
    {
        abort_if(Gate::denies('mission_and_vision_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.missionAndVisions.create');
    }

    public function store(StoreMissionAndVisionRequest $request)
    {
        $missionAndVision = MissionAndVision::create($request->all());

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $missionAndVision->id]);
        }

        return redirect()->route('admin.mission-and-visions.index');
    }

    public function edit(MissionAndVision $missionAndVision)
    {
        abort_if(Gate::denies('mission_and_vision_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.missionAndVisions.edit', compact('missionAndVision'));
    }

    public function update(UpdateMissionAndVisionRequest $request, MissionAndVision $missionAndVision)
    {
        $missionAndVision->update($request->all());

        return redirect()->route('admin.mission-and-visions.index');
    }

    public function show(MissionAndVision $missionAndVision)
    {
        abort_if(Gate::denies('mission_and_vision_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.missionAndVisions.show', compact('missionAndVision'));
    }

    public function destroy(MissionAndVision $missionAndVision)
    {
        abort_if(Gate::denies('mission_and_vision_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $missionAndVision->delete();

        return back();
    }

    public function massDestroy(MassDestroyMissionAndVisionRequest $request)
    {
        MissionAndVision::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('mission_and_vision_create') && Gate::denies('mission_and_vision_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new MissionAndVision();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
