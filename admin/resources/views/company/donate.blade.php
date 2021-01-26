@extends('layouts.home-page')

@section('title')
        Donate | Pomilly East African Limited
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
                            <h2>Donate</h2>
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
                        <!-- <h4>Donate</h4> -->
                        <p align="justify">
                        </p>
                        <a class="btn" data-target="#modal-3" data-toggle="modal" href="#">1. Donate</a>
                        <div class="modal fade" id="modal-3" tabindex="-1" role="modal"
                            aria-labelledby="modal-label-3" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <!-- <h4  id="modal-label-3" class="modal-title">Food drive</h4> -->
                                        <button aria-hidden="true" data-dismiss="modal" class="close"
                                            type="button">×</button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row mb20">
                                            <div class="col-md-12">
                                                <h4>Donate $</h4>
                                                <p>
                                                    Every $2 provides a meal to a beneficiary in need.
                                                </p>
                                                <p>
                                                    We need to keep our operations going to the beneficiaries in need! 2 in 10 Kenyans face food insecurity,
                                                     and are unable to afford their basic three meals at any point in their lives. Support us and end food insecurity by donating here.                                                    </p>
                                                <p>
                                                    Already have a fundraising idea? In need of more information on how you can contribute or partner with us? Contact <span style="color: blue;">info@pomilly.com</span>
                                                </p>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button data-dismiss="modal" class="btn btn-b" type="button">Close</button>
                                        <!-- <button class="btn btn-b" type="button">Save Changes</button> -->
                                    </div>
                                </div>
                            </div>
                        </div>



                        <a class="btn" data-target="#modal-2"  data-toggle="modal" href="#">2. Joy In Every Bundle  </a>
                        <div class="modal fade" id="modal-2" tabindex="-1" role="modal"
                            aria-labelledby="modal-label-3" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 id="modal-label-3" class="modal-title">2. Joy In Every Bundle  </h4>
                                        <button aria-hidden="true" data-dismiss="modal" class="close"
                                            type="button">×</button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row mb20">
                                            <div class="col-md-12">
                                                <p>
                                                    Want to donate to those in need but do not know how to go about it? Support PEAL Kenya's Bundle of
                                                    joy Campaign where we bring Joy In Every Bundle! Hassle-free and easy, we stretch every dollar donated
                                                    to cover the cost of the food items, packaging and logistics costs! As the food items are purchased by
                                                     The PEAL-Kenya we work with various food suppliers to ensure that every bundle offered, is value for money.
                                                      Engage your team by raising funds to pledge, pack and do a door to door distribution to our beneficiaries at
                                                      one of our beneficiary centre’s location.
                                                </p>
                                                <p>
                                                    <span style="font-weight: 600;">
                                                    STEP- BY -STEP GUIDE <br>

                                                    Identify a date and timeslot <br>

                                                    Send an email <span style="color: blue;">info@pomilly.com</span> to the Foodbankers. <br>

                                                    Get linked up with the beneficiary center <br>

                                                    Participate in the activity! <br>

                                                    Finalise the payment

                                                    </span>
                                                </p>



                                            </div>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button data-dismiss="modal" class="btn btn-b" type="button">Close</button>
                                        <!-- <button class="btn btn-b" type="button">Save Changes</button> -->
                                    </div>
                                </div>
                            </div>
                        </div>


                        <a  class="btn" data-target="#modal-1" data-toggle="modal" href="#">3. Feed the city</a>
                        <div class="modal fade" id="modal-1" tabindex="-1" role="modal"
                            aria-labelledby="modal-label-3" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 id="modal-label-3" class="modal-title">3. Feed the city </h4>
                                        <button aria-hidden="true" data-dismiss="modal" class="close"
                                            type="button">×</button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row mb20">
                                            <div class="col-md-12">
                                                <p>
                                                    We are building an application called Pomilly App,with food with Pomilly Kenya as its  charity choice.It is an online social enterprise that helps diners choose our partners restaurants, everytime you dine in our partners restaurants,you feed millions of people.
                                                </p>
                                                <p>
                                                    It's a community engagement event to increase food  security in Kenya by giving those in need a hearty meal in the process.Gather your team to sponsor a beneficiary  group through interactive activities at our partners restaurants.
                                                </p>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button data-dismiss="modal" class="btn btn-b" type="button">Close</button>
                                        <!-- <button class="btn btn-b" type="button">Save Changes</button> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </div>
    <!-- About Details End -->

</main>

@endsection
