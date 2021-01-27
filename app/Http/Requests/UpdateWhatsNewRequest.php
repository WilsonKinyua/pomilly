<?php

namespace App\Http\Requests;

use App\WhatsNew;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateWhatsNewRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('whats_new_edit');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'required',
            ],
        ];
    }
}
