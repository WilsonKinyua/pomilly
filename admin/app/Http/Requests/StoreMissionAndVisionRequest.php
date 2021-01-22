<?php

namespace App\Http\Requests;

use App\MissionAndVision;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreMissionAndVisionRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('mission_and_vision_create');
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
