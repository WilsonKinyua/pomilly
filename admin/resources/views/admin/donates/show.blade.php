@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.donate.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.donates.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.donate.fields.id') }}
                        </th>
                        <td>
                            {{ $donate->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.donate.fields.title') }}
                        </th>
                        <td>
                            {{ $donate->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.donate.fields.descrption') }}
                        </th>
                        <td>
                            {!! $donate->descrption !!}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.donates.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection