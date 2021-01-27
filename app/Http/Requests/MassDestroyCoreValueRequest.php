<?php

namespace App\Http\Requests;

use App\CoreValue;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyCoreValueRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('core_value_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:core_values,id',
        ];
    }
}
