<?php

namespace App\Http\Requests;

use App\Blog;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreBlogRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('blog_create');
    }

    public function rules()
    {
        return [
            'blog_title' => [
                'string',
                'required',
            ],
            'blog_image' => [
                'required',
            ],
        ];
    }
}
