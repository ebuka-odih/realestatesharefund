@extends('pages.layout.app')
@section('content')

<main id="main" class="main-img">
    <section class="breadcrumbs" style="background-image: url(https://crowdsq.com/asset/images/breadcrumbs/breadcrumbs.jpg);">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center text-capitalize">
                <h2>Investment Plan</h2>
                <ol>
                    <li><a href="https://crowdsq.com">Home</a></li>
                    <li>Investment Plan</li>
                </ol>
            </div>
        </div>
    </section>


    <section class="s-pt-80 s-pb-80">
        <div class="container">
            <form class="property-search-form" method="GET" action="https://crowdsq.com/search/property">
                <div class="row gy-3 mb-4">
                    <div class="col-lg-5 col-md-4">
                        <div class="input-icon-field">
                            <i class="fas fa-map-marker-alt"></i>
                            <input type="text" id="search" name="search" class="form-control" placeholder="Enter Location">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5">
                        <div class="min-max-field">
                            <select name="type" id="type" class="form-select">
                                <option value="0">Min-Max</option>
                                <option value="1">Fixed</option>
                            </select>

                            <input type="number" name="amount" class="form-control min-amount-input fixed d-none" placeholder="Amount">
                            <input type="number" name="min" class="form-control min-amount-input" placeholder="Min Amount" id="min">
                            <input type="number" name="max" class="form-control max-amount-input" placeholder="Max Amount" id="max">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <button type="submit" class="cmn-btn w-100">Search <i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <div class="row gy-4" id="filter">
                <div class="col-xl-4 col-md-6">
                    <div class="invest-card">
                        <div class="invest-card-thumb">
                            <a href="https://crowdsq.com/investment/plan/details/4" class="plan-link"></a>
                            <img src="https://crowdsq.com/asset/images/property/637a5aecec53a1668963052.jpg" alt="image">
                            <button type="button" data-href="https://crowdsq.com/bookmark/4" data-bookmark="" class="invest-bookmark-btn ">

                                <i class="far fa-heart first-bookmark"></i>
                                <i class="fas fa-heart second-bookmark"></i>
                            </button>
                            <div class="thumb-bottom">
                                <h4 class="title"><a href="https://crowdsq.com/investment/plan/details/4">
                                        2-bedroom In Sofia - 65 Sqm</a></h4>
                                <p class="location"><i class="bi bi-geo-alt"></i> Lyulin
                                </p>
                                <div class="property-ratings">



                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>


                                    <span class="text-white">(0 Reviews)</span>
                                </div>
                            </div>
                        </div>
                        <div class="invest-card-content">
                            <div class="return-rate">
                                <div>
                                    <p>Expected Rental Income</p>
                                    <h4 class="return-amount">
                                        4.00
                                        %
                                    </h4>
                                </div>
                                <a href="#0" class="calculate-btn" data-plan="{&quot;id&quot;:4,&quot;plan_name&quot;:&quot;2-bedroom in Sofia -  65 sqm&quot;,&quot;views&quot;:&quot;895&quot;,&quot;amount_type&quot;:&quot;0&quot;,&quot;minimum_amount&quot;:&quot;5000.00000000&quot;,&quot;maximum_amount&quot;:&quot;95000.00000000&quot;,&quot;amount&quot;:null,&quot;return_interest&quot;:&quot;4.00000000&quot;,&quot;interest_status&quot;:&quot;percentage&quot;,&quot;return_for&quot;:&quot;1&quot;,&quot;how_many_time&quot;:&quot;3&quot;,&quot;every_time&quot;:&quot;7&quot;,&quot;capital_back&quot;:&quot;1&quot;,&quot;status&quot;:&quot;1&quot;,&quot;property&quot;:{&quot;amnities&quot;:{&quot;Price&quot;:&quot;95000&quot;,&quot;Square meters&quot;:&quot;117&quot;,&quot;Rooms&quot;:&quot;2&quot;,&quot;Floor&quot;:&quot;7&quot;,&quot;Year of building&quot;:&quot;2021&quot;},&quot;address&quot;:&quot;Lyulin&quot;,&quot;details&quot;:&quot;This apartment has 2 levels. The kitchen, living room and bathroom on the first level. The bedroom, a second bath and a panoramic terrace with a view are on the second level (52 sqm). The property is completely furnished and ready for use. Located close to a subway station&quot;,&quot;icons&quot;:[&quot;fas fa-tag&quot;,&quot;fas fa-ruler&quot;,&quot;fas fa-booth-curtain&quot;,&quot;fas fa-sort-circle&quot;,&quot;fas fa-sort-calendar&quot;]},&quot;image&quot;:&quot;637a5aecec53a1668963052.jpg&quot;,&quot;gallery&quot;:[{&quot;id&quot;:1,&quot;src&quot;:&quot;https:\/\/www.crowdsq.com\/asset\/images\/gallery\/637a5aecbb9581668963052.jpg&quot;,&quot;image&quot;:&quot;637a5aecbb9581668963052.jpg&quot;},{&quot;id&quot;:2,&quot;src&quot;:&quot;https:\/\/www.crowdsq.com\/asset\/images\/gallery\/637a5aecc26391668963052.jpg&quot;,&quot;image&quot;:&quot;637a5aecc26391668963052.jpg&quot;},{&quot;id&quot;:3,&quot;src&quot;:&quot;https:\/\/www.crowdsq.com\/asset\/images\/gallery\/637a5aecc62481668963052.jpg&quot;,&quot;image&quot;:&quot;637a5aecc62481668963052.jpg&quot;},{&quot;id&quot;:4,&quot;src&quot;:&quot;https:\/\/www.crowdsq.com\/asset\/images\/gallery\/637a5aecc9ca31668963052.jpg&quot;,&quot;image&quot;:&quot;637a5aecc9ca31668963052.jpg&quot;},{&quot;id&quot;:5,&quot;src&quot;:&quot;https:\/\/www.crowdsq.com\/asset\/images\/gallery\/637a5aecd2d581668963052.jpg&quot;,&quot;image&quot;:&quot;637a5aecd2d581668963052.jpg&quot;},{&quot;id&quot;:6,&quot;src&quot;:&quot;https:\/\/www.crowdsq.com\/asset\/images\/gallery\/637a5aecdb7d61668963052.jpg&quot;,&quot;image&quot;:&quot;637a5aecdb7d61668963052.jpg&quot;},{&quot;id&quot;:7,&quot;src&quot;:&quot;https:\/\/www.crowdsq.com\/asset\/images\/gallery\/637a5aecdfa311668963052.jpg&quot;,&quot;image&quot;:&quot;637a5aecdfa311668963052.jpg&quot;},{&quot;id&quot;:8,&quot;src&quot;:&quot;https:\/\/www.crowdsq.com\/asset\/images\/gallery\/637a5aece3d691668963052.jpg&quot;,&quot;image&quot;:&quot;637a5aece3d691668963052.jpg&quot;}],&quot;is_featured&quot;:&quot;1&quot;,&quot;map&quot;:null,&quot;created_at&quot;:&quot;2022-11-20T16:50:52.000000Z&quot;,&quot;updated_at&quot;:&quot;2023-08-12T14:17:11.000000Z&quot;,&quot;reviews&quot;:[]}"><i class="fas fa-calculator"></i>Investment Calculator</a>
                            </div>

                            <div class="other-options">
                                <div class="single-option">
                                    <p>Target Duration</p>
                                    <h6>year</h6>
                                </div>
                                <div class="single-option">
                                    <p>Minimum Amount</p>
                                    <h6>
                                                                                            <span>
                                                    5,000.00 EUR</span>
                                    </h6>
                                </div>
                                <div class="single-option">
                                    <p>Return For</p>
                                    <h6>
                                        Lifetime
                                    </h6>
                                </div>
                                <div class="single-option">
                                    <p>Capital Back</p>
                                    <h6>
                                        Yes
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="invest-card-footer">
                            <div>
                                <a href="https://crowdsq.com/investment/plan/details/4" class="cmn-btn2 w-100 btn-sm">Invest Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="invest-card">
                        <div class="invest-card-thumb">
                            <a href="https://crowdsq.com/investment/plan/details/5" class="plan-link"></a>
                            <img src="https://crowdsq.com/asset/images/property/637a5d087b4751668963592.jpg" alt="image">
                            <button type="button" data-href="https://crowdsq.com/bookmark/5" data-bookmark="" class="invest-bookmark-btn ">

                                <i class="far fa-heart first-bookmark"></i>
                                <i class="fas fa-heart second-bookmark"></i>
                            </button>
                            <div class="thumb-bottom">
                                <h4 class="title"><a href="https://crowdsq.com/investment/plan/details/5">
                                        Big Shop In A Residential Area - 275 Sqm</a></h4>
                                <p class="location"><i class="bi bi-geo-alt"></i> Vitosha
                                </p>
                                <div class="property-ratings">



                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>


                                    <span class="text-white">(0 Reviews)</span>
                                </div>
                            </div>
                        </div>
                        <div class="invest-card-content">
                            <div class="return-rate">
                                <div>
                                    <p>Expected Rental Income</p>
                                    <h4 class="return-amount">
                                        5.00
                                        %
                                    </h4>
                                </div>
                                <a href="#0" class="calculate-btn" data-plan="{&quot;id&quot;:5,&quot;plan_name&quot;:&quot;Big shop in a residential area - 275 sqm&quot;,&quot;views&quot;:&quot;602&quot;,&quot;amount_type&quot;:&quot;0&quot;,&quot;minimum_amount&quot;:&quot;5000.00000000&quot;,&quot;maximum_amount&quot;:&quot;310000.00000000&quot;,&quot;amount&quot;:null,&quot;return_interest&quot;:&quot;5.00000000&quot;,&quot;interest_status&quot;:&quot;percentage&quot;,&quot;return_for&quot;:&quot;1&quot;,&quot;how_many_time&quot;:&quot;3&quot;,&quot;every_time&quot;:&quot;7&quot;,&quot;capital_back&quot;:&quot;1&quot;,&quot;status&quot;:&quot;1&quot;,&quot;property&quot;:{&quot;amnities&quot;:{&quot;Price&quot;:&quot;31000&quot;,&quot;Square meters&quot;:&quot;275&quot;,&quot;Year of building&quot;:&quot;2012&quot;},&quot;address&quot;:&quot;Vitosha&quot;,&quot;details&quot;:&quot;The shop has 2 levels, a big window facing the street, bathrooms, separate rooms and a storage room.&quot;,&quot;icons&quot;:[&quot;fas fa-tag&quot;,&quot;fas fa-ruler&quot;,&quot;fas fa-calendar&quot;]},&quot;image&quot;:&quot;637a5d087b4751668963592.jpg&quot;,&quot;gallery&quot;:[{&quot;id&quot;:1,&quot;src&quot;:&quot;https:\/\/www.crowdsq.com\/asset\/images\/gallery\/637a5d08628411668963592.jpg&quot;,&quot;image&quot;:&quot;637a5d08628411668963592.jpg&quot;},{&quot;id&quot;:2,&quot;src&quot;:&quot;https:\/\/www.crowdsq.com\/asset\/images\/gallery\/637a5d086d8dd1668963592.jpg&quot;,&quot;image&quot;:&quot;637a5d086d8dd1668963592.jpg&quot;},{&quot;id&quot;:3,&quot;src&quot;:&quot;https:\/\/www.crowdsq.com\/asset\/images\/gallery\/637a5d0871d941668963592.jpg&quot;,&quot;image&quot;:&quot;637a5d0871d941668963592.jpg&quot;}],&quot;is_featured&quot;:&quot;0&quot;,&quot;map&quot;:null,&quot;created_at&quot;:&quot;2022-11-20T16:59:52.000000Z&quot;,&quot;updated_at&quot;:&quot;2023-08-11T21:43:47.000000Z&quot;,&quot;reviews&quot;:[]}"><i class="fas fa-calculator"></i>Investment Calculator</a>
                            </div>

                            <div class="other-options">
                                <div class="single-option">
                                    <p>Target Duration</p>
                                    <h6>year</h6>
                                </div>
                                <div class="single-option">
                                    <p>Minimum Amount</p>
                                    <h6>
                                                                                            <span>
                                                    5,000.00 EUR</span>
                                    </h6>
                                </div>
                                <div class="single-option">
                                    <p>Return For</p>
                                    <h6>
                                        Lifetime
                                    </h6>
                                </div>
                                <div class="single-option">
                                    <p>Capital Back</p>
                                    <h6>
                                        Yes
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="invest-card-footer">
                            <div>
                                <a href="https://crowdsq.com/investment/plan/details/5" class="cmn-btn2 w-100 btn-sm">Invest Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="invest-card">
                        <div class="invest-card-thumb">
                            <a href="https://crowdsq.com/investment/plan/details/6" class="plan-link"></a>
                            <img src="https://crowdsq.com/asset/images/property/637a67284eaa61668966184.jpg" alt="image">
                            <button type="button" data-href="https://crowdsq.com/bookmark/6" data-bookmark="" class="invest-bookmark-btn ">

                                <i class="far fa-heart first-bookmark"></i>
                                <i class="fas fa-heart second-bookmark"></i>
                            </button>
                            <div class="thumb-bottom">
                                <h4 class="title"><a href="https://crowdsq.com/investment/plan/details/6">
                                        4-bedroom Close To A Mountain - 243 Sqm</a></h4>
                                <p class="location"><i class="bi bi-geo-alt"></i> Viotsha
                                </p>
                                <div class="property-ratings">



                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>


                                    <span class="text-white">(0 Reviews)</span>
                                </div>
                            </div>
                        </div>
                        <div class="invest-card-content">
                            <div class="return-rate">
                                <div>
                                    <p>Expected Rental Income</p>
                                    <h4 class="return-amount">
                                        4.00
                                        %
                                    </h4>
                                </div>
                                <a href="#0" class="calculate-btn" data-plan="{&quot;id&quot;:6,&quot;plan_name&quot;:&quot;4-bedroom close to a mountain - 243 sqm&quot;,&quot;views&quot;:&quot;705&quot;,&quot;amount_type&quot;:&quot;0&quot;,&quot;minimum_amount&quot;:&quot;5000.00000000&quot;,&quot;maximum_amount&quot;:&quot;278000.00000000&quot;,&quot;amount&quot;:null,&quot;return_interest&quot;:&quot;4.00000000&quot;,&quot;interest_status&quot;:&quot;percentage&quot;,&quot;return_for&quot;:&quot;1&quot;,&quot;how_many_time&quot;:&quot;3&quot;,&quot;every_time&quot;:&quot;7&quot;,&quot;capital_back&quot;:&quot;1&quot;,&quot;status&quot;:&quot;1&quot;,&quot;property&quot;:{&quot;amnities&quot;:{&quot;Price&quot;:&quot;278000&quot;,&quot;Square meters&quot;:&quot;205&quot;,&quot;Rooms&quot;:&quot;4&quot;,&quot;Floor&quot;:&quot;5&quot;,&quot;Year of building&quot;:&quot;2009&quot;},&quot;address&quot;:&quot;Viotsha&quot;,&quot;details&quot;:&quot;This apartment consists of entrance hall, living room with a kitchen, two bedrooms (one connected to a balcony), big bathroom, unique closed terrace with a stunning panoramic view. There is a barbecue, big TV, place for rest and heating lamps on the terrace. This is the only apartment on the whole floor, the appliances have high quality and the area is quiet.&quot;,&quot;icons&quot;:[&quot;fas fa-tag&quot;,&quot;fas fa-ruler&quot;,&quot;as fa-booth-curtain&quot;,&quot;fas fa-sort-circle&quot;,&quot;fas fa-sort-calendar&quot;]},&quot;image&quot;:&quot;637a67284eaa61668966184.jpg&quot;,&quot;gallery&quot;:[{&quot;id&quot;:1,&quot;src&quot;:&quot;https:\/\/www.crowdsq.com\/asset\/images\/gallery\/637a6727c67fe1668966183.jpg&quot;,&quot;image&quot;:&quot;637a6727c67fe1668966183.jpg&quot;},{&quot;id&quot;:2,&quot;src&quot;:&quot;https:\/\/www.crowdsq.com\/asset\/images\/gallery\/637a6727d0d2f1668966183.jpg&quot;,&quot;image&quot;:&quot;637a6727d0d2f1668966183.jpg&quot;},{&quot;id&quot;:3,&quot;src&quot;:&quot;https:\/\/www.crowdsq.com\/asset\/images\/gallery\/637a6727d4cbd1668966183.jpg&quot;,&quot;image&quot;:&quot;637a6727d4cbd1668966183.jpg&quot;},{&quot;id&quot;:4,&quot;src&quot;:&quot;https:\/\/www.crowdsq.com\/asset\/images\/gallery\/637a672806ee01668966184.jpg&quot;,&quot;image&quot;:&quot;637a672806ee01668966184.jpg&quot;},{&quot;id&quot;:5,&quot;src&quot;:&quot;https:\/\/www.crowdsq.com\/asset\/images\/gallery\/637a67280b18a1668966184.jpg&quot;,&quot;image&quot;:&quot;637a67280b18a1668966184.jpg&quot;},{&quot;id&quot;:6,&quot;src&quot;:&quot;https:\/\/www.crowdsq.com\/asset\/images\/gallery\/637a67280f4b21668966184.jpg&quot;,&quot;image&quot;:&quot;637a67280f4b21668966184.jpg&quot;},{&quot;id&quot;:7,&quot;src&quot;:&quot;https:\/\/www.crowdsq.com\/asset\/images\/gallery\/637a6728160311668966184.jpg&quot;,&quot;image&quot;:&quot;637a6728160311668966184.jpg&quot;},{&quot;id&quot;:8,&quot;src&quot;:&quot;https:\/\/www.crowdsq.com\/asset\/images\/gallery\/637a67281da061668966184.jpg&quot;,&quot;image&quot;:&quot;637a67281da061668966184.jpg&quot;},{&quot;id&quot;:9,&quot;src&quot;:&quot;https:\/\/www.crowdsq.com\/asset\/images\/gallery\/637a672824e291668966184.jpg&quot;,&quot;image&quot;:&quot;637a672824e291668966184.jpg&quot;},{&quot;id&quot;:10,&quot;src&quot;:&quot;https:\/\/www.crowdsq.com\/asset\/images\/gallery\/637a67282ba5b1668966184.jpg&quot;,&quot;image&quot;:&quot;637a67282ba5b1668966184.jpg&quot;},{&quot;id&quot;:11,&quot;src&quot;:&quot;https:\/\/www.crowdsq.com\/asset\/images\/gallery\/637a6728328821668966184.jpg&quot;,&quot;image&quot;:&quot;637a6728328821668966184.jpg&quot;},{&quot;id&quot;:12,&quot;src&quot;:&quot;https:\/\/www.crowdsq.com\/asset\/images\/gallery\/637a67283a0841668966184.jpg&quot;,&quot;image&quot;:&quot;637a67283a0841668966184.jpg&quot;},{&quot;id&quot;:13,&quot;src&quot;:&quot;https:\/\/www.crowdsq.com\/asset\/images\/gallery\/637a67283ecf21668966184.jpg&quot;,&quot;image&quot;:&quot;637a67283ecf21668966184.jpg&quot;},{&quot;id&quot;:14,&quot;src&quot;:&quot;https:\/\/www.crowdsq.com\/asset\/images\/gallery\/637a672842c141668966184.jpg&quot;,&quot;image&quot;:&quot;637a672842c141668966184.jpg&quot;},{&quot;id&quot;:15,&quot;src&quot;:&quot;https:\/\/www.crowdsq.com\/asset\/images\/gallery\/637a672846b071668966184.jpg&quot;,&quot;image&quot;:&quot;637a672846b071668966184.jpg&quot;},{&quot;id&quot;:16,&quot;src&quot;:&quot;https:\/\/www.crowdsq.com\/asset\/images\/gallery\/637a67284a8bf1668966184.jpg&quot;,&quot;image&quot;:&quot;637a67284a8bf1668966184.jpg&quot;}],&quot;is_featured&quot;:&quot;0&quot;,&quot;map&quot;:null,&quot;created_at&quot;:&quot;2022-11-20T17:43:04.000000Z&quot;,&quot;updated_at&quot;:&quot;2023-08-12T17:36:55.000000Z&quot;,&quot;reviews&quot;:[]}"><i class="fas fa-calculator"></i>Investment Calculator</a>
                            </div>

                            <div class="other-options">
                                <div class="single-option">
                                    <p>Target Duration</p>
                                    <h6>year</h6>
                                </div>
                                <div class="single-option">
                                    <p>Minimum Amount</p>
                                    <h6>
                                                                                            <span>
                                                    5,000.00 EUR</span>
                                    </h6>
                                </div>
                                <div class="single-option">
                                    <p>Return For</p>
                                    <h6>
                                        Lifetime
                                    </h6>
                                </div>
                                <div class="single-option">
                                    <p>Capital Back</p>
                                    <h6>
                                        Yes
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="invest-card-footer">
                            <div>
                                <a href="https://crowdsq.com/investment/plan/details/6" class="cmn-btn2 w-100 btn-sm">Invest Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="invest-card">
                        <div class="invest-card-thumb">
                            <a href="https://crowdsq.com/investment/plan/details/7" class="plan-link"></a>
                            <img src="https://crowdsq.com/asset/images/property/648324d2ed7e61686316242.jpg" alt="image">
                            <button type="button" data-href="https://crowdsq.com/bookmark/7" data-bookmark="" class="invest-bookmark-btn ">

                                <i class="far fa-heart first-bookmark"></i>
                                <i class="fas fa-heart second-bookmark"></i>
                            </button>
                            <div class="thumb-bottom">
                                <h4 class="title"><a href="https://crowdsq.com/investment/plan/details/7">
                                        One-bedroom Apartment Close To A Mountain</a></h4>
                                <p class="location"><i class="bi bi-geo-alt"></i> Vitosha
                                </p>
                                <div class="property-ratings">



                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>


                                    <span class="text-white">(0 Reviews)</span>
                                </div>
                            </div>
                        </div>
                        <div class="invest-card-content">
                            <div class="return-rate">
                                <div>
                                    <p>Expected Rental Income</p>
                                    <h4 class="return-amount">
                                        5.00
                                        %
                                    </h4>
                                </div>
                                <a href="#0" class="calculate-btn" data-plan="{&quot;id&quot;:7,&quot;plan_name&quot;:&quot;One-bedroom apartment close to a mountain&quot;,&quot;views&quot;:&quot;179&quot;,&quot;amount_type&quot;:&quot;0&quot;,&quot;minimum_amount&quot;:&quot;5000.00000000&quot;,&quot;maximum_amount&quot;:&quot;86000.00000000&quot;,&quot;amount&quot;:null,&quot;return_interest&quot;:&quot;5.00000000&quot;,&quot;interest_status&quot;:&quot;percentage&quot;,&quot;return_for&quot;:&quot;1&quot;,&quot;how_many_time&quot;:&quot;3&quot;,&quot;every_time&quot;:&quot;7&quot;,&quot;capital_back&quot;:&quot;1&quot;,&quot;status&quot;:&quot;1&quot;,&quot;property&quot;:{&quot;amnities&quot;:{&quot;Price&quot;:&quot;86000&quot;,&quot;Square meters&quot;:&quot;55&quot;,&quot;Rooms&quot;:&quot;2&quot;,&quot;Floor&quot;:&quot;2&quot;,&quot;Year of building&quot;:&quot;2017&quot;},&quot;address&quot;:&quot;Vitosha&quot;,&quot;details&quot;:&quot;This apartment consists of two rooms and a bathroom. The area is very peaceful and quiet but at the same time it is linked to good public transport. There are many stores, restaurants, pharmacies, gyms and other service providers near by. It is possible to purchase a parking lot in the same building.&quot;,&quot;icons&quot;:[&quot;fas fa-tag&quot;,&quot;fas fa-ruler&quot;,&quot;as fa-booth-curtain&quot;,&quot;fas fa-sort-circle&quot;,&quot;fas fa-sort-calendar&quot;]},&quot;image&quot;:&quot;648324d2ed7e61686316242.jpg&quot;,&quot;gallery&quot;:[{&quot;id&quot;:1,&quot;src&quot;:&quot;https:\/\/crowdsq.com\/asset\/images\/gallery\/648324d2b798a1686316242.jpg&quot;,&quot;image&quot;:&quot;648324d2b798a1686316242.jpg&quot;},{&quot;id&quot;:2,&quot;src&quot;:&quot;https:\/\/crowdsq.com\/asset\/images\/gallery\/648324d2c95551686316242.jpg&quot;,&quot;image&quot;:&quot;648324d2c95551686316242.jpg&quot;},{&quot;id&quot;:3,&quot;src&quot;:&quot;https:\/\/crowdsq.com\/asset\/images\/gallery\/648324d2d28691686316242.jpg&quot;,&quot;image&quot;:&quot;648324d2d28691686316242.jpg&quot;},{&quot;id&quot;:4,&quot;src&quot;:&quot;https:\/\/crowdsq.com\/asset\/images\/gallery\/648324d2dc2be1686316242.jpg&quot;,&quot;image&quot;:&quot;648324d2dc2be1686316242.jpg&quot;},{&quot;id&quot;:5,&quot;src&quot;:&quot;https:\/\/crowdsq.com\/asset\/images\/gallery\/648324d2e57c81686316242.jpg&quot;,&quot;image&quot;:&quot;648324d2e57c81686316242.jpg&quot;}],&quot;is_featured&quot;:&quot;1&quot;,&quot;map&quot;:null,&quot;created_at&quot;:&quot;2023-06-09T13:10:43.000000Z&quot;,&quot;updated_at&quot;:&quot;2023-08-12T20:05:16.000000Z&quot;,&quot;reviews&quot;:[]}"><i class="fas fa-calculator"></i>Investment Calculator</a>
                            </div>

                            <div class="other-options">
                                <div class="single-option">
                                    <p>Target Duration</p>
                                    <h6>year</h6>
                                </div>
                                <div class="single-option">
                                    <p>Minimum Amount</p>
                                    <h6>
                                                                                            <span>
                                                    5,000.00 EUR</span>
                                    </h6>
                                </div>
                                <div class="single-option">
                                    <p>Return For</p>
                                    <h6>
                                        Lifetime
                                    </h6>
                                </div>
                                <div class="single-option">
                                    <p>Capital Back</p>
                                    <h6>
                                        Yes
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="invest-card-footer">
                            <div>
                                <a href="https://crowdsq.com/investment/plan/details/7" class="cmn-btn2 w-100 btn-sm">Invest Now</a>
                            </div>
                        </div>
                    </div>
                </div>




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



    <div class="modal fade" id="bookmark" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <form action="" method="post">
                <input type="hidden" name="_token" value="r3peT7lVVBuQEaoWJtAWQYIyEcoWKkmLAdXNOYjV">                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Bookmarked Plan</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p class="bookmark-text">Are You Sure To Bookmark This Plan For Future Invest ?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Bookmark</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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

@endsection
