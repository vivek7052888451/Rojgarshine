@extends('frontend.app')
  <link rel="stylesheet" href="{{ asset('frontend/css/certificate.css')}}" />

@section('content')

 <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 banner">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xs-12">
                            <div class="certificate_section">
                                <div class="certificate_heading">
                                    <h3 style="color:white; font-weight:bold;">Your <span
                                            style="color:yellow;">Certificate Tracking</span> has been
                                        simplified with us!</h3>
                                </div>
                                <div class="certificate_paragraph">
                                    <p class="text-light pt-2">"Training Certificate results in positive results"</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xs-12">
                            <div class="img_container">
                                <img src="{{ asset('frontend/images/laptop-screen.png')}}" class="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner end
        ========================================== -->

    <!-- =================================
        apply section start -->
    <section>
        <div class="container-fluid mb-4">
            <div class="row">
                <div class="col-sm-12 main">
                    <ul class="nav nav-tabs gt">
                        <li class="nav-item">
                            <a href="#get" class="nav-link active closemaintab" data-toggle="tab">Apply Certificate</a>
                        </li>
                        <li class="nav-item">
                            <a href="#track" class="nav-link current opennexttab" data-toggle="tab">Track
                                Certificate</a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </section>

    <!-- apply section end
        ==================== -->


    <!-- ===============================
        picture section start -->
    <section>
        <div class="container mb-3 kr">
            <div class="row">
                <div class="col-md-12 PI ">
                    <div class="row">
                        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xs-12"></div>
                        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xs-12">
                            <div class="">
                                <div class="picture_container k">
                                    <img src="{{ asset('frontend/images/mobile-track.png')}}" class="picture">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xs-12"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- picture section end
        ============================= -->

    <!-- ========================
        input section start -->
    <section>
        <div class="container mb-5" style="overflow:hidden;">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="row">
                        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xs-12"></div>
                        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xs-12">
                            <div class="">
                                <div>
                                    <h4 class="input_heading mt-4">Enter Your Phone Number</h4>
                                    <h5 class="input_heading1 mt-2">We will send you the form Verification</h5>
                                </div>
                                <div class="submit_form mt-5">
                                    <form>
                                        Mobile<input type="number" placeholder="Enter Phone no" class="name "
                                            style="padding-left:12px; line-height:30px;">
                                </div>
                                <div>
                                    <button type="button" class="submit_btn mt-5">Submit</button>
                                </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xs-12"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection