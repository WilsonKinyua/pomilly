<?php

namespace App\Http\Requests;

use App\WhatIsFoodRecyling;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreWhatIsFoodRecylingRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('what_is_food_recyling_create');
    }

    public function rules()
    {
        return [
            'photos_videos.*' => [
                'required',
            ],
        ];
    }
}
