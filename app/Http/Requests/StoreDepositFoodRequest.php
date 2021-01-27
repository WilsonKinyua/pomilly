<?php

namespace App\Http\Requests;

use App\DepositFood;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreDepositFoodRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('deposit_food_create');
    }

    public function rules()
    {
        return [
            'title'       => [
                'string',
                'required',
            ],
            'description' => [
                'required',
            ],
        ];
    }
}
