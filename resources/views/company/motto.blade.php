@extends('layouts.home-page')

@section('title')
    Motto | Pomilly East African Limited
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
                            <h2 style="text-transform: uppercase;">Motto</h2>
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
                      @foreach ($mottoes as $m)

                        <h1 style="text-transform: uppercase; ">
                            {!! $m->core_values !!}
                        </h1>
                        @endforeach
                    </div>


                </div>
            </div>
        </div>
    </div>
    <!-- About Details End -->

</main>
@endsection
