@extends('layouts.main-theme')

@section('styles')



@endsection

@section('content')

    <!--? Hero Start -->
    <div class="slider-area">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 text-center">
                            <h2>CAREER PAGE</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
    <!-- About Details Start -->
    <div class="about-details section-padding30">
        <div class="site-wrap">
            <section class="site-section">
                <div class="container">

                    <div class="row mb-5 justify-content-center">
                        <div class="col-md-7 text-center">
                        </div>
                    </div>
                    <div class="mb-5">
                        <div class="row align-items-start job-item border-bottom pb-3 mb-3 pt-3">
                            <div class="col-md-2">
                                <a href="job-single.php"><img src="{{ asset('assets/img/careers/featured-listing-1.jpg') }}" alt="Image" class="img-fluid"></a>
                            </div>
                            <div class="col-md-4">
                                <span class="badge badge-primary px-2 py-1 mb-3">Full Time</span>
                                <h2><a href="job-single.php">ICT </a> </h2>
                                <p class="meta">Publisher: <strong>Pomilly East </strong> African <strong>Limited</strong></p>
                            </div>
                            <div class="col-md-3 text-left">
                                <h3>Nairobi</h3>
                                <span class="meta">Kenya</span>
                            </div>
                            <div class="col-md-3 text-md-right">
                                <strong class="text-black">Ksh60k &mdash; Ksh100k</strong>
                            </div>
                        </div>

                        <div class="row align-items-start job-item border-bottom pb-3 mb-3 pt-3">
                            <div class="col-md-2">
                                <a href="job-single.php"><img src="{{ asset('assets/img/careers/featured-listing-2.jpg') }}" alt="Image" class="img-fluid"></a>
                            </div>
                            <div class="col-md-4">
                                <span class="badge badge-warning px-2 py-1 mb-3">Full-time</span>
                                <h2><a href="job-single.php">Office Assistant</a> </h2>
                                <p class="meta">Publisher: <strong>Pomilly East </strong> African <strong>Limited</strong></p>
                            </div>
                            <div class="col-md-3 text-left">
                                <h3>Mombasa</h3>
                                <span class="meta">Kenya</span>
                            </div>
                            <div class="col-md-3 text-md-right">
                                <strong class="text-black">Ksh60k &mdash; Ksh100k</strong>
                            </div>
                        </div>

                        <div class="row align-items-start job-item border-bottom pb-3 mb-3 pt-3">
                            <div class="col-md-2">
                                <a href="job-single.php"><img src="{{ asset('assets/img/careers/featured-listing-3.jpg') }}" alt="Image" class="img-fluid"></a>
                            </div>
                            <div class="col-md-4">
                                <span class="badge badge-success px-2 py-1 mb-3">Full-time</span>
                                <h2><a href="job-single.php">Procurment Officer</a> </h2>
                                <p class="meta">Publisher: <strong>Pomilly East </strong> African <strong>Limited</strong></p>
                            </div>
                            <div class="col-md-3 text-left">
                                <h3>Nakuru</h3>
                                <span class="meta">Kenya</span>
                            </div>
                            <div class="col-md-3 text-md-right">
                                <strong class="text-black">Ksh 60k &mdash; Ksh 100k</strong>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

        </div>
    </div>
    <!-- About Details End -->

@endsection
