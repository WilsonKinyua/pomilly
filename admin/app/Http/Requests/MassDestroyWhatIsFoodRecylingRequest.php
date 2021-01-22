<?php

namespace App\Http\Requests;

use App\WhatIsFoodRecyling;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyWhatIsFoodRecylingRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('what_is_food_recyling_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:what_is_food_recylings,id',
        ];
    }
}
