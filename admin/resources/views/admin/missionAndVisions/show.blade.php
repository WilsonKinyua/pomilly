@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.missionAndVision.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.mission-and-visions.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.missionAndVision.fields.id') }}
                        </th>
                        <td>
                            {{ $missionAndVision->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.missionAndVision.fields.mission') }}
                        </th>
                        <td>
                            {!! $missionAndVision->mission !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.missionAndVision.fields.vision') }}
                        </th>
                        <td>
                            {!! $missionAndVision->vision !!}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.mission-and-visions.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection