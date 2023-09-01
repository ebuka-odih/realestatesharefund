@extends('pages.layout.app')
@section('content')
    <style>
        .custom-btn {
            background: transparent;
            border: none;
            text-decoration: underline;
        }
    </style>


    <main id="main" class="main-img">
        <section class="property-details-section">
            <div class="property-details-banner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="property-details-top">
                                <div class="content">
                                    <h2 class="title">One-bedroom Apartment Close To A Mountain</h2>
                                    <ul class="property-details-top-info">

                                        <li><i class="fa fa-location-arrow"></i> {{ $property->building_location }}</li>
                                        <li><i class="fa fa-clock"></i> {{ date('d M, Y', strtotime($property->created_at)) }}</li>
{{--                                        <li><i class="bi bi-eye"></i> Views: 221</li>--}}
                                        <li>
                                            <div class="property-ratings">

                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <span class="text-white">({{ $property->reviews ? : '0' }} Reviews)</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="action">
                                    <h4 class="p-amount">
                                        @money($property->min_price) USD
                                        <span>(Min Amount)</span>

                                    </h4>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3 g-2">
                        <div class="col-lg-6">
                            <div class="property-details-thumb">
                             @foreach ($property->images as $image)
                                <a href="{{ asset($image->image_path) }}" class="gallery"></a>
                                <img src="{{ asset($image->image_path) }}" alt="image">
                             @endforeach
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row g-2">
                                @foreach ($property->images as $image)
                                <div class="col-md-6 col-md-6">
                                    <div class="property-details-thumb choto-img">
                                        <a href="{{ asset($image->image_path) }}" class="gallery"></a>
                                        <img src="{{ asset($image->image_path) }}" alt="image">
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pt-5 s-pb-80 section-bg">
                <div class="container">
                    <div class="row gy-4">
                        <div class="col-lg-8 pe-xl-5 order-lg-1 order-2">
                            <div class="property-details-wrapper">
                                <div class="content-box">
                                    <h4 class="title">Key Details</h4>

                                    <div class="row gy-3">
                                        <div class="col-sm-6">
                                            <div class="single-feature">
                                                <p class="caption">Min Invest Amount</p>
                                                <h6 class="p-amount">
                                                    <span>
                                                        @money($property->min_price) USD
                                                    </span>
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="single-feature">
                                                <p class="caption">Max Invest Amount</p>
                                                <h6 class="p-amount">
                                                                                                    <span>
                                                        @money($property->price) USD</span>
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="single-feature">
                                                <p class="caption">Return Rate</p>
                                                <h6 class="p-amount">
                                                    {{ $property->return_rate }}
                                                    %
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="single-feature">
                                                <p class="caption">Target Duration</p>
                                                <h6 class="p-amount">{{ $property->target_duration }}</h6>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="single-feature">
                                                <p class="caption">Return For</p>
                                                <h6 class="p-amount">
                                                    {{ $property->return_for }}
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="single-feature">
                                                <p class="caption">Capital Back</p>
                                                <h6 class="p-amount">
                                                    {{ $property->capital_back }}
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- content-box end -->

                                <div class="content-box">
                                    <h4 class="title">Property Amenities</h4>

                                    <div class="row gy-3">


                                        <div class="col-lg-3 col-sm-4 col-6">
                                            <div class="single-amenities">
                                                <i class="fas fa-tag"></i>
                                                <div class="content">
                                                    <h6 class="mb-0">PRICE</h6>
                                                    <p class="caption">@money($property->price)</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-4 col-6">
                                            <div class="single-amenities">
                                                <i class="fas fa-ruler"></i>
                                                <div class="content">
                                                    <h6 class="mb-0">SQUARE METERS</h6>
                                                    <p class="caption">{{ $property->square_meter }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-4 col-6">
                                            <div class="single-amenities">
                                                <i class="as fa-booth-curtain"></i>
                                                <div class="content">
                                                    <h6 class="mb-0">ROOMS</h6>
                                                    <p class="caption">{{ $property->rooms }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-4 col-6">
                                            <div class="single-amenities">
                                                <i class="fas fa-sort-circle"></i>
                                                <div class="content">
                                                    <h6 class="mb-0">FLOOR</h6>
                                                    <p class="caption">{{ $property->floor }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-4 col-6">
                                            <div class="single-amenities">
                                                <i class="fas fa-sort-calendar"></i>
                                                <div class="content">
                                                    <h6 class="mb-0">YEAR OF BUILDING</h6>
                                                    <p class="caption">{{ $property->building_year }}</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div><!-- content-box end -->

                                <div class="content-box">
                                    <h4 class="title">Property Description</h4>
                                    <p>{{ $property->description }}</p>

                                </div><!-- content-box end -->

                                <div class="content-box">
                                    <h4 class="title">Property Reviews</h4>

                                    <div class="property-reviews">





                                        <div class="mt-4 text-center">

                                        </div>
                                    </div>
                                </div><!-- content-box end -->
                            </div>
                        </div>

                        {{--                        calculator here--}}
                    </div>


                </div>
            </div>
        </section>
        <!-- property details banner section end -->

        <div class="modal fade" id="invest" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form action="https://crowdsq.com/investmentplan/invest" method="post">
                    <input type="hidden" name="_token" value="UEyWhn3oCyfyjkmFpeQdkhlxuSvsBeNMEU2GRRAM">                <div class="modal-content">
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

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Social Share</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <ul class="social-share-list">
                            <div id="social-links"><ul><li><a href="https://www.facebook.com/sharer/sharer.php?u=https://crowdsq.com/investment/plan/details/7" class="social-button " id="" title="" rel=""><span class="fab fa-facebook-square"></span></a></li><li><a href="https://twitter.com/intent/tweet?text=Share&amp;url=https://crowdsq.com/investment/plan/details/7" class="social-button " id="" title="" rel=""><span class="fab fa-twitter"></span></a></li><li><a href="https://www.linkedin.com/sharing/share-offsite?mini=true&amp;url=https://crowdsq.com/investment/plan/details/7&amp;title=Share&amp;summary=" class="social-button " id="" title="" rel=""><span class="fab fa-linkedin"></span></a></li><li><a target="_blank" href="https://telegram.me/share/url?url=https://crowdsq.com/investment/plan/details/7&amp;text=Share" class="social-button " id="" title="" rel=""><span class="fab fa-telegram"></span></a></li><li><a target="_blank" href="https://wa.me/?text=https://crowdsq.com/investment/plan/details/7" class="social-button " id="" title="" rel=""><span class="fab fa-whatsapp"></span></a></li><li><a target="_blank" href="https://www.reddit.com/submit?title=Share&amp;url=https://crowdsq.com/investment/plan/details/7" class="social-button " id="" title="" rel=""><span class="fab fa-reddit"></span></a></li></ul></div>                    </ul>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="bookmark" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <form action="" method="post">
                    <input type="hidden" name="_token" value="UEyWhn3oCyfyjkmFpeQdkhlxuSvsBeNMEU2GRRAM">                <div class="modal-content">
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
                    <input type="hidden" name="_token" value="UEyWhn3oCyfyjkmFpeQdkhlxuSvsBeNMEU2GRRAM">                <div class="modal-content">
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
        'use strict';
        $(document).ready(function() {

            $(document).on('keyup', '.amount', function() {
                let amount = $(this).val();

                let id = $('input[name=id]').val();

                var url = "https://crowdsq.com/investment/calculate/:id";

                url = url.replace(':id', id);

                $.ajax({
                    type: 'GET',
                    url: url,
                    data: {
                        amount: amount,
                        selectplan: id
                    },
                    success: (data) => {
                        if (data.message) {

                            let message = data.message + ' ' + Number(data.amount).toFixed(2)

                            $('#amount').removeClass('is-valid').addClass('is-invalid')

                            $('.invalid-feedback').addClass('d-block').text(message)

                        } else {

                            $('#profit').html(data);


                            $('#amount').removeClass('is-invalid').addClass('is-valid')
                            $('.invalid-feedback').addClass('d-none').text('')

                            modal.modal('show');
                        }


                    }
                })
            })



        });
    </script>


@endsection
