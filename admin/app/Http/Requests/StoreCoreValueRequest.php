<?php

namespace App\Http\Requests;

use App\CoreValue;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCoreValueRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('core_value_create');
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
