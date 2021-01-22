<?php

namespace App\Http\Requests;

use App\MissionAndVision;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateMissionAndVisionRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('mission_and_vision_edit');
    }

    public function rules()
    {
        return [
            'mission' => [
                'required',
            ],
            'vision'  => [
                'required',
            ],
        ];
    }
}
