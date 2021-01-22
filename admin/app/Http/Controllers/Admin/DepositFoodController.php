<?php

namespace App\Http\Controllers\Admin;

use App\DepositFood;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyDepositFoodRequest;
use App\Http\Requests\StoreDepositFoodRequest;
use App\Http\Requests\UpdateDepositFoodRequest;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class DepositFoodController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('deposit_food_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $depositFoods = DepositFood::all();

        return view('admin.depositFoods.index', compact('depositFoods'));
    }

    public function create()
    {
        abort_if(Gate::denies('deposit_food_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.depositFoods.create');
    }

    public function store(StoreDepositFoodRequest $request)
    {
        $depositFood = DepositFood::create($request->all());

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $depositFood->id]);
        }

        return redirect()->route('admin.deposit-foods.index');
    }

    public function edit(DepositFood $depositFood)
    {
        abort_if(Gate::denies('deposit_food_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.depositFoods.edit', compact('depositFood'));
    }

    public function update(UpdateDepositFoodRequest $request, DepositFood $depositFood)
    {
        $depositFood->update($request->all());

        return redirect()->route('admin.deposit-foods.index');
    }

    public function show(DepositFood $depositFood)
    {
        abort_if(Gate::denies('deposit_food_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.depositFoods.show', compact('depositFood'));
    }

    public function destroy(DepositFood $depositFood)
    {
        abort_if(Gate::denies('deposit_food_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $depositFood->delete();

        return back();
    }

    public function massDestroy(MassDestroyDepositFoodRequest $request)
    {
        DepositFood::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('deposit_food_create') && Gate::denies('deposit_food_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new DepositFood();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
