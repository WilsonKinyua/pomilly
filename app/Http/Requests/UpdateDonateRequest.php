<?php

namespace App\Http\Requests;

use App\Donate;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateDonateRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('donate_edit');
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
