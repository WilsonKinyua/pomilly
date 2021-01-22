<?php

namespace App\Http\Requests;

use App\WhatIsFoodRecyling;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateWhatIsFoodRecylingRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('what_is_food_recyling_edit');
    }

    public function rules()
    {
        return [
            'description' => [
                'required',
            ],
        ];
    }
}
