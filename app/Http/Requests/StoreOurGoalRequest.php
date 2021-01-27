<?php

namespace App\Http\Requests;

use App\OurGoal;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreOurGoalRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('our_goal_create');
    }

    public function rules()
    {
        return [];
    }
}
