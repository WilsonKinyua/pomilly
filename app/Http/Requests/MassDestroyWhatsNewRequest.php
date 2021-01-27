<?php

namespace App\Http\Requests;

use App\WhatsNew;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyWhatsNewRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('whats_new_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:whats_news,id',
        ];
    }
}
