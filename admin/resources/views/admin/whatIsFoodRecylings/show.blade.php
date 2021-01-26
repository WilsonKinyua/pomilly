@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.whatIsFoodRecyling.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.what-is-food-recylings.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.whatIsFoodRecyling.fields.id') }}
                        </th>
                        <td>
                            {{ $whatIsFoodRecyling->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.whatIsFoodRecyling.fields.description') }}
                        </th>
                        <td>
                            {!! $whatIsFoodRecyling->description !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.whatIsFoodRecyling.fields.photos_videos') }}
                        </th>
                        <td>
                            <img style="width:70px; height:60px" src="{{ asset($whatIsFoodRecyling->file ? $whatIsFoodRecyling->file: 'http://placehold.it/400x400') }}" alt="">

                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.what-is-food-recylings.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection
