<?php

namespace App\Http\Requests;

use App\DepositFood;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyDepositFoodRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('deposit_food_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:deposit_foods,id',
        ];
    }
}
