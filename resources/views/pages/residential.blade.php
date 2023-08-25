@extends('pages.layout.app')
@section('content')

    <main id="main" class="main-img">
        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs" style="background-image: url(https://crowdsq.com/asset/images/breadcrumbs/breadcrumbs.jpg);">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center text-capitalize">
                    <h2>About</h2>
                    <ol>
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li>About</li>
                    </ol>
                </div>
            </div>
        </section>
        <!-- End Breadcrumbs -->


        <meta name="title" content="About Us">
        <meta name="description" content="CrowdSquare is an innovative crowdfunding platform that is revolutionizing the way investors access real estate.">


        <section class="about-section s-pt-120 s-pb-120">
            <div class="container">
                <div class="row gy-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="about-thumb">
                            <img src="https://53.fs1.hubspotusercontent-na1.net/hub/53/hubfs/Sales_Blog/real-estate-business-compressor.jpg?width=595&height=400&name=real-estate-business-compressor.jpg" alt="image">
                        </div>
                    </div>
                    <div class="col-lg-6 ps-lg-5">
                        <h2 class="section-title">Residential real estate</h2>
                        <div class="about-item mt-4">
                            <div class="content">
                                <p class="mt-3 mb-5">
                                    The term residential real estate refers to property used by individuals or families for living. This is the most popular type of real estate and it includes apartments and houses. However, the price per sqm of such properties is relatively high and the rental yield is lower compared to commercial real estate.

                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection
