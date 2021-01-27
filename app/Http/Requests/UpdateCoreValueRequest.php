<?php

namespace App\Http\Requests;

use App\CoreValue;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateCoreValueRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('core_value_edit');
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
