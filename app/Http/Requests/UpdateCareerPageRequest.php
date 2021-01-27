<?php

namespace App\Http\Requests;

use App\CareerPage;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateCareerPageRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('career_page_edit');
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
