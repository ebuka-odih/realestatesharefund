@extends('pages.layout.app')
@section('content')

<main id="main" class="main-img">
    <section class="breadcrumbs" style="background-image: url(https://crowdsq.com/asset/images/breadcrumbs/breadcrumbs.jpg);">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center text-capitalize">
                <h2>Investment Plan</h2>
                <ol>
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li>Investment Plan</li>
                </ol>
            </div>
        </div>
    </section>


    <section class="s-pt-80 s-pb-80">
        <div class="container">
            <div class="row gy-4" id="filter">

                @foreach($property as $item)
                    <div class="col-xl-4 col-md-6">
                        <div class="invest-card">
                            <div class="invest-card-thumb">
                                <a href="{{ route('pro.details', $item->id) }}" class="plan-link"></a>

                                @foreach ($item->images as $image)
                                    @if($loop->first)
                                        <img  src="{{ asset($image->image_path) }}" alt="Property Image">
                                    @endif
                                @endforeach

                                <div class="thumb-bottom">
                                    <h4 class="title"><a href="{{ route('pro.details', $item->id) }}">
                                            {{ $item->name }}</a></h4>
                                    <p class="location"><i class="bi bi-geo-alt"></i> {{ $item->building_location }}
                                    </p>
                                    <div class="property-ratings">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <span class="text-white">({{ $item->reviews }} Reviews)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="invest-card-content">
                                <div class="return-rate">
                                    <div>
                                        <p>Expected Rental Income</p>
                                        <h4 class="return-amount">
                                            {{ $item->return_rate }}
                                            %
                                        </h4>
                                    </div>
                                    {{--                                <a href="#0" class="calculate-btn" data-plan="{&quot;id&quot;:7,&quot;plan_name&quot;:&quot;One-bedroom apartment close to a mountain&quot;,&quot;views&quot;:&quot;175&quot;,&quot;amount_type&quot;:&quot;0&quot;,&quot;minimum_amount&quot;:&quot;5000.00000000&quot;,&quot;maximum_amount&quot;:&quot;86000.00000000&quot;,&quot;amount&quot;:null,&quot;return_interest&quot;:&quot;5.00000000&quot;,&quot;interest_status&quot;:&quot;percentage&quot;,&quot;return_for&quot;:&quot;1&quot;,&quot;how_many_time&quot;:&quot;3&quot;,&quot;every_time&quot;:&quot;7&quot;,&quot;capital_back&quot;:&quot;1&quot;,&quot;status&quot;:&quot;1&quot;,&quot;property&quot;:{&quot;amnities&quot;:{&quot;Price&quot;:&quot;86000&quot;,&quot;Square meters&quot;:&quot;55&quot;,&quot;Rooms&quot;:&quot;2&quot;,&quot;Floor&quot;:&quot;2&quot;,&quot;Year of building&quot;:&quot;2017&quot;},&quot;address&quot;:&quot;Vitosha&quot;,&quot;details&quot;:&quot;This apartment consists of two rooms and a bathroom. The area is very peaceful and quiet but at the same time it is linked to good public transport. There are many stores, restaurants, pharmacies, gyms and other service providers near by. It is possible to purchase a parking lot in the same building.&quot;,&quot;icons&quot;:[&quot;fas fa-tag&quot;,&quot;fas fa-ruler&quot;,&quot;as fa-booth-curtain&quot;,&quot;fas fa-sort-circle&quot;,&quot;fas fa-sort-calendar&quot;]},&quot;image&quot;:&quot;648324d2ed7e61686316242.jpg&quot;,&quot;gallery&quot;:[{&quot;id&quot;:1,&quot;src&quot;:&quot;https:\/\/crowdsq.com\/asset\/images\/gallery\/648324d2b798a1686316242.jpg&quot;,&quot;image&quot;:&quot;648324d2b798a1686316242.jpg&quot;},{&quot;id&quot;:2,&quot;src&quot;:&quot;https:\/\/crowdsq.com\/asset\/images\/gallery\/648324d2c95551686316242.jpg&quot;,&quot;image&quot;:&quot;648324d2c95551686316242.jpg&quot;},{&quot;id&quot;:3,&quot;src&quot;:&quot;https:\/\/crowdsq.com\/asset\/images\/gallery\/648324d2d28691686316242.jpg&quot;,&quot;image&quot;:&quot;648324d2d28691686316242.jpg&quot;},{&quot;id&quot;:4,&quot;src&quot;:&quot;https:\/\/crowdsq.com\/asset\/images\/gallery\/648324d2dc2be1686316242.jpg&quot;,&quot;image&quot;:&quot;648324d2dc2be1686316242.jpg&quot;},{&quot;id&quot;:5,&quot;src&quot;:&quot;https:\/\/crowdsq.com\/asset\/images\/gallery\/648324d2e57c81686316242.jpg&quot;,&quot;image&quot;:&quot;648324d2e57c81686316242.jpg&quot;}],&quot;is_featured&quot;:&quot;1&quot;,&quot;map&quot;:null,&quot;created_at&quot;:&quot;2023-06-09T13:10:43.000000Z&quot;,&quot;updated_at&quot;:&quot;2023-08-11T13:54:37.000000Z&quot;,&quot;reviews&quot;:[]}"><i class="fas fa-calculator"></i>Investment Calculator</a>--}}
                                </div>

                                <div class="other-options">
                                    <div class="single-option">
                                        <p>Target Duration</p>
                                        <h6>{{ $item->target_duration }} Month(s)</h6>
                                    </div>
                                    <div class="single-option">
                                        <p>Minimum Amount</p>
                                        <h6>

                                        <span>
                                      {{ $item->min_price }} USD</span>
                                        </h6>
                                    </div>
                                    <div class="single-option">
                                        <p>Return For</p>
                                        <h6>
                                            {{ $item->return_for }} Month(s)
                                        </h6>
                                    </div>
                                    <div class="single-option">
                                        <p>Capital Back</p>
                                        <h6>
                                            {{ $item->capital_back }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="invest-card-footer">
                                <div>
                                    <a href="{{ route('user.projects') }}"
                                       class="cmn-btn2 w-100 btn-sm">Invest Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>



        </div>
    </section>

    <!-- Claculate modal -->
    <div class="modal fade" id="calculateModal" tabindex="-1" aria-labelledby="calculateModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="title"><i class="bi bi-calculator"></i> Calculate Invest Amount</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="invest-cal-wrapper">

                        <input type="hidden" name="id" value="">
                        <div class="mb-4">
                            <label>Invest Amount</label>
                            <div class="icon-field ">
                                <input type="text" name="amount" class="form-control amount" placeholder="Enter Amount" id="amount">
                                <i class="bi bi-currency-dollar"></i>
                            </div>
                            <div class="invalid-feedback">

                            </div>

                            <small class="text-secondary min-max">
                                <i class="bi bi-info-circle"></i>
                                Min-Max Invest Amount
                                <span class="min"></span> -
                                <span class="max"></span>
                            </small>


                            <small class="text-secondary fixed-amount d-none">
                                <i class="bi bi-info-circle"></i>
                                Fixed Amount
                                <span class="min"></span>
                            </small>

                        </div>

                        <div class="cal-details-list" id="profit">
                            <ul class="cal-list">
                                <li>
                                    <span class="caption">Plan</span>
                                    <span class="value">-</span>
                                </li>
                                <li>
                                    <span class="caption">Amount</span>
                                    <span class="value">-</span>
                                </li>
                                <li>
                                    <span class="caption">Payout Period</span>
                                    <span class="value">-</span>
                                </li>
                                <li>
                                    <span class="caption">Profit</span>
                                    <span class="value">-</span>
                                </li>
                                <li>
                                    <span class="caption">Capital Back</span>
                                    <span class="value">-</span>
                                </li>
                                <li>
                                    <span class="caption">Total</span>
                                    <span class="value">-</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="modal fade" id="invest" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="https://crowdsq.com/investmentplan/invest" method="post">
                <input type="hidden" name="_token" value="r3peT7lVVBuQEaoWJtAWQYIyEcoWKkmLAdXNOYjV">                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Invest Now</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="form-group">
                                <label for="">Invest Amount</label>
                                <input type="text" name="amount" class="form-control">
                                <input type="hidden" name="plan_id" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn cmn-btn">Invest Now</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <div class="modal fade" id="bookmark-remove" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <form action="" method="post">
                <input type="hidden" name="_token" value="r3peT7lVVBuQEaoWJtAWQYIyEcoWKkmLAdXNOYjV">                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Bookmarked Remove</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p class="bookmark-text">Are You Sure To Remove Bookmark ?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger">Remove</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>





    <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";
        }
    </script>

@endsection
