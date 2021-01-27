@extends('layouts.home-page')

@section('title')
        WHAT WE DO | Pomilly East African Limited
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
                            <h2>What We Do </h2>
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
                        @foreach ($whatwedo as $item)

                        <p align="justify">
                            {!! $item->description !!}
                        </p>

                        @endforeach



                    </div>


                </div>
            </div>
        </div>
    </div>
    <!-- About Details End -->

</main>


@endsection
