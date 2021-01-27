<?php

namespace App\Http\Requests;

use App\OurHistory;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyOurHistoryRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('our_history_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:our_histories,id',
        ];
    }
}
