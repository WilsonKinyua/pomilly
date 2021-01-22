<?php

namespace App\Http\Requests;

use App\DepositFood;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateDepositFoodRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('deposit_food_edit');
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
