@extends('admin.layout.app')
@section('content')

    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Investment Dashboard</h3>
                                <div class="nk-block-des text-soft">
                                    <p>Welcome to Crypto Invest Dashboard</p>
                                </div>
                            </div><!-- .nk-block-head-content -->
                            <div class="nk-block-head-content">
                                <div class="toggle-wrap nk-block-tools-toggle">
                                    <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                    <div class="toggle-expand-content" data-content="pageMenu">
                                        <ul class="nk-block-tools g-3">
                                            <li><a href="#" class="btn btn-white btn-dim btn-outline-primary"><em class="icon ni ni-download-cloud"></em><span>Export</span></a></li>
                                            <li><a href="#" class="btn btn-white btn-dim btn-outline-primary"><em class="icon ni ni-reports"></em><span>Reports</span></a></li>
                                            <li class="nk-block-tools-opt">
                                                <div class="drodown">
                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-primary" data-bs-toggle="dropdown"><em class="icon ni ni-plus"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><em class="icon ni ni-user-add-fill"></em><span>Add User</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-coin-alt-fill"></em><span>Add Order</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-note-add-fill-c"></em><span>Add Page</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div><!-- .toggle-expand-content -->
                                </div><!-- .toggle-wrap -->
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="row g-gs">
                            <div class="col-md-4">
                                <div class="card card-bordered card-full">
                                    <div class="card-inner">
                                        <div class="card-title-group align-start mb-0">
                                            <div class="card-title">
                                                <h6 class="subtitle">Total Deposit</h6>
                                            </div>
                                            <div class="card-tools">
                                                <em class="card-hint icon ni ni-help-fill" data-bs-toggle="tooltip" data-bs-placement="left" title="Total Deposited"></em>
                                            </div>
                                        </div>
                                        <div class="card-amount">
                                                        <span class="amount"> 49,595.34 <span class="currency currency-usd">USD</span>
                                                        </span>
                                            <span class="change up text-danger"><em class="icon ni ni-arrow-long-up"></em>1.93%</span>
                                        </div>
                                        <div class="invest-data">
                                            <div class="invest-data-amount g-2">
                                                <div class="invest-data-history">
                                                    <div class="title">This Month</div>
                                                    <div class="amount">2,940.59 <span class="currency currency-usd">USD</span></div>
                                                </div>
                                                <div class="invest-data-history">
                                                    <div class="title">This Week</div>
                                                    <div class="amount">1,259.28 <span class="currency currency-usd">USD</span></div>
                                                </div>
                                            </div>
                                            <div class="invest-data-ck">
                                                <canvas class="iv-data-chart" id="totalDeposit"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .card -->
                            </div><!-- .col -->
                            <div class="col-md-4">
                                <div class="card card-bordered card-full">
                                    <div class="card-inner">
                                        <div class="card-title-group align-start mb-0">
                                            <div class="card-title">
                                                <h6 class="subtitle">Total Withdraw</h6>
                                            </div>
                                            <div class="card-tools">
                                                <em class="card-hint icon ni ni-help-fill" data-bs-toggle="tooltip" data-bs-placement="left" title="Total Withdraw"></em>
                                            </div>
                                        </div>
                                        <div class="card-amount">
                                                        <span class="amount"> 49,595.34 <span class="currency currency-usd">USD</span>
                                                        </span>
                                            <span class="change down text-danger"><em class="icon ni ni-arrow-long-down"></em>1.93%</span>
                                        </div>
                                        <div class="invest-data">
                                            <div class="invest-data-amount g-2">
                                                <div class="invest-data-history">
                                                    <div class="title">This Month</div>
                                                    <div class="amount">2,940.59 <span class="currency currency-usd">USD</span></div>
                                                </div>
                                                <div class="invest-data-history">
                                                    <div class="title">This Week</div>
                                                    <div class="amount">1,259.28 <span class="currency currency-usd">USD</span></div>
                                                </div>
                                            </div>
                                            <div class="invest-data-ck">
                                                <canvas class="iv-data-chart" id="totalWithdraw"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .card -->
                            </div><!-- .col -->
                            <div class="col-md-4">
                                <div class="card card-bordered  card-full">
                                    <div class="card-inner">
                                        <div class="card-title-group align-start mb-0">
                                            <div class="card-title">
                                                <h6 class="subtitle">Balance in Account</h6>
                                            </div>
                                            <div class="card-tools">
                                                <em class="card-hint icon ni ni-help-fill" data-bs-toggle="tooltip" data-bs-placement="left" title="Total Balance in Account"></em>
                                            </div>
                                        </div>
                                        <div class="card-amount">
                                                        <span class="amount"> 79,358.50 <span class="currency currency-usd">USD</span>
                                                        </span>
                                        </div>
                                        <div class="invest-data">
                                            <div class="invest-data-amount g-2">
                                                <div class="invest-data-history">
                                                    <div class="title">This Month</div>
                                                    <div class="amount">2,940.59 <span class="currency currency-usd">USD</span></div>
                                                </div>
                                                <div class="invest-data-history">
                                                    <div class="title">This Week</div>
                                                    <div class="amount">1,259.28 <span class="currency currency-usd">USD</span></div>
                                                </div>
                                            </div>
                                            <div class="invest-data-ck">
                                                <canvas class="iv-data-chart" id="totalBalance"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .card -->
                            </div><!-- .col -->
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
