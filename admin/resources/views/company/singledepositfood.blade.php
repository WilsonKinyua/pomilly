@extends('layouts.home-page')

@section('title')
        Deposit Food | Pomilly East African Limited
@endsection


@section('content')
<main>
    <!--? Hero Start -->
    <div class="slider-area">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 text-center">
                            <h2>{{ $singledepositfood->description }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
    <!-- About Details Start -->
    <div class="about-details section-padding30">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="about-details-cap mb-50">
                        <h4>Core Values</h4>
                            {{-- @foreach ($coreValues as $key => $cv)

                            <p align="justify">
                                {!! $cv->core_values !!}
                            </p>

                            @endforeach --}}

                    </div>


                </div>
            </div>
        </div>
    </div>
    <!-- About Details End -->

</main>

@endsection
