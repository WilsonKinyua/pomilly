<?php

namespace App\Http\Requests;

use App\Donate;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyDonateRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('donate_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:donates,id',
        ];
    }
}
