<?php

namespace App\Http\Requests;

use App\Motto;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreMottoRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('motto_create');
    }

    public function rules()
    {
        return [
            'core_values' => [
                'required',
            ],
        ];
    }
}
