<?php

namespace App\Http\Requests;

use App\WhatWeDo;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreWhatWeDoRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('what_we_do_create');
    }

    public function rules()
    {
        return [
            'description' => [
                'required',
            ],
        ];
    }
}
