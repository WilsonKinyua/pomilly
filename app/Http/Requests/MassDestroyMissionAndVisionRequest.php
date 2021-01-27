<?php

namespace App\Http\Requests;

use App\MissionAndVision;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyMissionAndVisionRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('mission_and_vision_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:mission_and_visions,id',
        ];
    }
}
