@extends('dashboard.layout.app')
@section('content')

    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="form-head d-md-flex mb-sm-4 mb-3 align-items-start">
                <div class="me-auto  d-lg-block">
                    <h2 class="text-black font-w600">Fund Account</h2>

                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-md-12">
                    <div class="card">
                       
                        <div class="card-body">
                            <!-- Nav tabs -->
                            <div class="custom-tab-1">
                                <ul class="nav nav-tabs col-lg-6 offset-lg-5">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#home1"><i class="fa fa-money-check me-2"></i> Bank Transfer</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#profile1"><i class="fa fa-coins me-2"></i> Crypto</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade active show" id="home1" role="tabpanel">
                                        <div class="pt-4">
                                            <h4>This is home title</h4>
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.
                                            </p>
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="profile1">
                                        <div class="pt-4">
                                            <h4>This is profile title</h4>
                                            <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.
                                            </p>
                                            <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="contact1">
                                        <div class="pt-4">
                                            <h4>This is contact title</h4>
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.
                                            </p>
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="message1">
                                        <div class="pt-4">
                                            <h4>This is message title</h4>
                                            <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.
                                            </p>
                                            <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
