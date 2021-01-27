<?php

namespace App\Http\Requests;

use App\Volunteer;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateVolunteerRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('volunteer_edit');
    }

    public function rules()
    {
        return [
            'title'       => [
                'string',
                'required',
            ],
            'description' => [
                'required',
            ],
        ];
    }
}
