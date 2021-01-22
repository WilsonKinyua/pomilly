<?php

namespace App\Http\Requests;

use App\WhatsNew;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreWhatsNewRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('whats_new_create');
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
