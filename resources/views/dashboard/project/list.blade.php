@extends('dashboard.layout.app')
@section('content')

    <div class="content-body" style="min-height: 1061px;">
        <div class="container-fluid">
            <div class="page-titles">
                <h4 class=" text-center">Active Projects</h4>
            </div>
            <div class="row">
                @foreach($properties as $item)
                <div class="col-lg-12 col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row m-b-30">
                                <div class="col-md-5 col-xxl-12">
                                    <div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
                                        <div class="new-arrivals-img-contnent">
                                            <img class="img-fluid" src="images/product/2.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 col-xxl-12">
                                    <div class="new-arrival-content position-relative">
                                        <h4><a href="ecom-product-detail.html">{{ $item->name }}</a></h4>
                                        <div class="comment-review star-rating">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star-half-empty"></i></li>
                                                <li><i class="fa fa-star-half-empty"></i></li>
                                            </ul>
                                            <span class="review-text">({{ $item->reviews }}) </span>
                                            <p class="price">$@money($item->price)</p>
                                        </div>
                                        <p>Type: <span class="item"> {{ $item->type }} </span></p>
                                        <p><i class="fa fa-location-arrow"></i> Location: <span class="item">{{ $item->building_location }}</span></p>
                                        <p class="text-content">
                                            {{ $item->description  }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach


            </div>
        </div>
    </div>

@endsection
