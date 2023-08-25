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
                            <img src="https://eystone.ng/wp-content/uploads/2023/02/istockphoto-1409298953-612x612-1.jpg" alt="image">
                        </div>
                    </div>
                    <div class="col-lg-6 ps-lg-5">
                        <h2 class="section-title">Commercial real estate</h2>
                        <div class="about-item mt-4">
                            <div class="content">
                                <p class="mt-3 mb-5">
                                    There are multiple types of commercial real estate, The most popular are: <br>
                                    1. Offices <br>
                                    2. Industrial <br>
                                    3. Retail <br>
                                    4. Hotels <br>
                                    Commercial real estate usually offers a higher annual return for several reasons.
                                    Prices of commercial properties are higher than residential properties because of their large size.
                                    The cost of industrial properties is usually in the millions range, which put them outside of the radar
                                    <br>
                                    for retail investors. This type of real estate is mostly used by businesses. However, companies prefer to invest their capital in business development rather than purchasing a property because they can obtain a
                                    higher return on their capital.

                                </p>
                                <p>We Can Help You To Create A Diversified Portfolio Of Institutional-quality Real Estate. We Offer State-of-the-art Technology And Top In-house Professionals.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection
