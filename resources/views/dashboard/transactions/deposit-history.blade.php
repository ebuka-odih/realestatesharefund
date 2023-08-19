@extends('dashboard.layout.app')
@section('content')

    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="form-head d-md-flex mb-sm-4 mb-3 align-items-start">
                <div class="me-auto  d-lg-block">
                    <h2 class="text-black font-w600">Deposit History</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-md-12">
                    <div class="card">

                        <div class="card-body">
                            <!-- Nav tabs -->
                            <div class="custom-tab-1">
                                <ul class="nav nav-tabs col-lg-8 col-md-12 offset-lg-5">
                                    <li class="nav-item">
                                        <a class="nav-link active"  href="{{ route('user.depositHistory') }}"><i class="fa fa-arrow-circle-down "></i> Deposits</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"  href="#"><i class="fa fa-arrow-circle-up "></i> Withdrawal</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"  href="#"><i class="fa fa-money-check"></i> Funding</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade active show" id="home1" role="tabpanel">
                                        <div class="pt-4">
                                            <table></table>
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
