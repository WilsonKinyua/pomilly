@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    Dashboard
                </div>

                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1 class="m-0 text-dark">
                        <?php
                            // Setting getting time sone
                            date_default_timezone_set('Africa/Nairobi');
                            // 24-hour format of an hour without leading zeros (0 through 23)
                            $Hour = date('G');
                            if ( $Hour >= 5 && $Hour <= 11 ) {
                                echo "Good Morning <span style='color: #36b9cc; text-transform: capitalize;' ><strong>" . Auth::user()->name . "</strong></span>";
                            } else if ( $Hour >= 12 && $Hour <= 18 ) {
                                echo "Good Afternoon <span style='color: #36b9cc; text-transform: capitalize;' ><strong>" . Auth::user()->name  . "</strong></span>";
                            } else if ( $Hour >= 19 || $Hour <= 4 ) {
                                echo "Good Evening <span style='color: #36b9cc; text-transform: capitalize;' ><strong>" . Auth::user()->name  . "</strong></span>";
                            }
                        ?>
                        .
                        Welcome back!
                        </h1>
                    <div class="row">
                        {{-- Widget - latest entries --}}
                        <div class="{{ $settings1['column_class'] }}" style="overflow-x: auto;">
                            <h3>List of User <small>(s)</small></h3>
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        @foreach($settings1['fields'] as $key => $value)
                                            <th>
                                                {{ trans(sprintf('cruds.%s.fields.%s', strtolower(last(explode('\\', $settings1['model']))), $key)) }}
                                            </th>
                                        @endforeach
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($settings1['data'] as $entry)
                                        <tr>
                                            @foreach($settings1['fields'] as $key => $value)
                                                <td>
                                                    @if($value === '')
                                                        {{ $entry->{$key} }}
                                                    @elseif(is_iterable($entry->{$key}))
                                                        @foreach($entry->{$key} as $subEentry)
                                                            <span class="label label-info">{{ $subEentry->{$value} }}</span>
                                                        @endforeach
                                                    @else
                                                        {{ data_get($entry, $key . '.' . $value) }}
                                                    @endif
                                                </td>
                                            @endforeach
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="{{ count($settings1['fields']) }}">{{ __('No entries found') }}</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                        {{-- Widget - latest entries --}}
                        <div class="{{ $settings2['column_class'] }}" style="overflow-x: auto;">
                            <h3>Latest Blogs</h3>
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        @foreach($settings2['fields'] as $key => $value)
                                            <th>
                                                {!! trans(sprintf('cruds.%s.fields.%s', strtolower(last(explode('\\', $settings2['model']))), $key)) !!}
                                            </th>
                                        @endforeach
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($settings2['data'] as $entry)
                                        <tr>
                                            @foreach($settings2['fields'] as $key => $value)
                                                <td>
                                                    @if($value === '')
                                                        {!! $entry->{$key}!!}
                                                    @elseif(is_iterable($entry->{$key}))
                                                        @foreach($entry->{$key} as $subEentry)
                                                            <span class="label label-info">{!! $subEentry->{$value} !!}</span>
                                                        @endforeach
                                                    @else
                                                        {!! data_get($entry, $key . '.' . $value) !!}
                                                    @endif
                                                </td>
                                            @endforeach
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="{!! count($settings2['fields']) !!}">{!! __('No entries found') !!}</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
@endsection
