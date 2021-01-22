<?php

namespace App\Http\Requests;

use App\OurHistory;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreOurHistoryRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('our_history_create');
    }

    public function rules()
    {
        return [
            'our_history' => [
                'required',
            ],
        ];
    }
}
