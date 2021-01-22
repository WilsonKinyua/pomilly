<?php

namespace App\Http\Requests;

use App\Contact;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateContactRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('contact_edit');
    }

    public function rules()
    {
        return [
            'street_name' => [
                'string',
                'required',
            ],
            'phone'       => [
                'string',
                'min:5',
                'max:15',
                'required',
            ],
            'email'       => [
                'required',
            ],
        ];
    }
}
