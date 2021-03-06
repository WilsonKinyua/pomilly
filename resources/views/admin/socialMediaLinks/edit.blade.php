@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.socialMediaLink.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.social-media-links.update", [$socialMediaLink->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="facebook">{{ trans('cruds.socialMediaLink.fields.facebook') }}</label>
                <input class="form-control {{ $errors->has('facebook') ? 'is-invalid' : '' }}" type="text" name="facebook" id="facebook" value="{{ old('facebook', $socialMediaLink->facebook) }}">
                @if($errors->has('facebook'))
                    <div class="invalid-feedback">
                        {{ $errors->first('facebook') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.socialMediaLink.fields.facebook_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="instagram">{{ trans('cruds.socialMediaLink.fields.instagram') }}</label>
                <input class="form-control {{ $errors->has('instagram') ? 'is-invalid' : '' }}" type="text" name="instagram" id="instagram" value="{{ old('instagram', $socialMediaLink->instagram) }}">
                @if($errors->has('instagram'))
                    <div class="invalid-feedback">
                        {{ $errors->first('instagram') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.socialMediaLink.fields.instagram_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="phone">{{ trans('cruds.socialMediaLink.fields.phone') }}</label>
                <input class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" type="text" name="phone" id="phone" value="{{ old('phone', $socialMediaLink->phone) }}">
                @if($errors->has('phone'))
                    <div class="invalid-feedback">
                        {{ $errors->first('phone') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.socialMediaLink.fields.phone_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="email">{{ trans('cruds.socialMediaLink.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" value="{{ old('email', $socialMediaLink->email) }}">
                @if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.socialMediaLink.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="youtube">{{ trans('cruds.socialMediaLink.fields.youtube') }}</label>
                <input class="form-control {{ $errors->has('youtube') ? 'is-invalid' : '' }}" type="text" name="youtube" id="youtube" value="{{ old('youtube', $socialMediaLink->youtube) }}">
                @if($errors->has('youtube'))
                    <div class="invalid-feedback">
                        {{ $errors->first('youtube') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.socialMediaLink.fields.youtube_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="linkedin">{{ trans('cruds.socialMediaLink.fields.linkedin') }}</label>
                <input class="form-control {{ $errors->has('linkedin') ? 'is-invalid' : '' }}" type="text" name="linkedin" id="linkedin" value="{{ old('linkedin', $socialMediaLink->linkedin) }}">
                @if($errors->has('linkedin'))
                    <div class="invalid-feedback">
                        {{ $errors->first('linkedin') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.socialMediaLink.fields.linkedin_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection