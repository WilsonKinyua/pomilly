@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.whatsNew.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.whats-news.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.whatsNew.fields.id') }}
                        </th>
                        <td>
                            {{ $whatsNew->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.whatsNew.fields.title') }}
                        </th>
                        <td>
                            {{ $whatsNew->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.whatsNew.fields.desciption') }}
                        </th>
                        <td>
                            {!! $whatsNew->desciption !!}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.whats-news.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection