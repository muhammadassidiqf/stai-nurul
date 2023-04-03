@extends('layouts.app-admin')
<!-- Content -->
@section('content-admin')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Website Analytics-->
            <div class="col-lg-6 col-md-12 mb-4">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0">Website Analytics</h5>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="analyticsOptions" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="analyticsOptions">
                                <a class="dropdown-item" href="javascript:void(0);">Select All</a>
                                <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                                <a class="dropdown-item" href="javascript:void(0);">Share</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pb-2">
                        <div class="d-flex justify-content-around align-items-center flex-wrap mb-4">
                            <div class="user-analytics text-center me-2">
                                <i class="bx bx-user me-1"></i>
                                <span>Users</span>
                                <div class="d-flex align-items-center mt-2">
                                    <div class="chart-report" data-color="success" data-series="35">
                                    </div>
                                    <h3 class="mb-0">61K</h3>
                                </div>
                            </div>
                            <div class="sessions-analytics text-center me-2">
                                <i class="bx bx-pie-chart-alt me-1"></i>
                                <span>Sessions</span>
                                <div class="d-flex align-items-center mt-2">
                                    <div class="chart-report" data-color="warning" data-series="76">
                                    </div>
                                    <h3 class="mb-0">92K</h3>
                                </div>
                            </div>
                            <div class="bounce-rate-analytics text-center">
                                <i class="bx bx-trending-up me-1"></i>
                                <span>Bounce Rate</span>
                                <div class="d-flex align-items-center mt-2">
                                    <div class="chart-report" data-color="danger" data-series="65">
                                    </div>
                                    <h3 class="mb-0">72.6%</h3>
                                </div>
                            </div>
                        </div>
                        <div id="analyticsBarChart"></div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Activity</h5>
                    </div>
                    <div class="card-body">
                        <ul class="p-0 m-0">
                            <li class="d-flex mb-4 pb-2">
                                <div class="avatar avatar-sm flex-shrink-0 me-3">
                                    <span class="avatar-initial rounded-circle bg-label-primary"><i
                                            class="bx bx-cube"></i></span>
                                </div>
                                <div class="d-flex flex-column w-100">
                                    <div class="d-flex justify-content-between mb-1">
                                        <span>Total Sales</span>
                                        <span class="text-muted">$2,459</span>
                                    </div>
                                    <div class="progress" style="height: 6px">
                                        <div class="progress-bar bg-primary" style="width: 40%" role="progressbar"
                                            aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex mb-4 pb-2">
                                <div class="avatar avatar-sm flex-shrink-0 me-3">
                                    <span class="avatar-initial rounded-circle bg-label-success"><i
                                            class="bx bx-dollar"></i></span>
                                </div>
                                <div class="d-flex flex-column w-100">
                                    <div class="d-flex justify-content-between mb-1">
                                        <span>Income</span>
                                        <span class="text-muted">$8,478</span>
                                    </div>
                                    <div class="progress" style="height: 6px">
                                        <div class="progress-bar bg-success" style="width: 80%" role="progressbar"
                                            aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex mb-4 pb-2">
                                <div class="avatar avatar-sm flex-shrink-0 me-3">
                                    <span class="avatar-initial rounded-circle bg-label-warning"><i
                                            class="bx bx-trending-up"></i></span>
                                </div>
                                <div class="d-flex flex-column w-100">
                                    <div class="d-flex justify-content-between mb-1">
                                        <span>Budget</span>
                                        <span class="text-muted">$12,490</span>
                                    </div>
                                    <div class="progress" style="height: 6px">
                                        <div class="progress-bar bg-warning" style="width: 80%" role="progressbar"
                                            aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex mb-2">
                                <div class="avatar avatar-sm flex-shrink-0 me-3">
                                    <span class="avatar-initial rounded-circle bg-label-danger"><i
                                            class="bx bx-check"></i></span>
                                </div>
                                <div class="d-flex flex-column w-100">
                                    <div class="d-flex justify-content-between mb-1">
                                        <span>Tasks</span>
                                        <span class="text-muted">$184</span>
                                    </div>
                                    <div class="progress" style="height: 6px">
                                        <div class="progress-bar bg-danger" style="width: 25%" role="progressbar"
                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/ Activity -->

            <!-- Profit Report & Registration -->
            <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-12 mb-4">
                        <div class="card h-100">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Profit Report</h5>
                            </div>
                            <div class="card-body d-flex align-items-end justify-content-between">
                                <div class="d-flex justify-content-between align-items-center gap-3 w-100">
                                    <div class="d-flex align-content-center">
                                        <div class="chart-report" data-color="danger" data-series="25"></div>
                                        <div class="chart-info">
                                            <h5 class="mb-0">$12k</h5>
                                            <small class="text-muted">2020</small>
                                        </div>
                                    </div>
                                    <div class="d-flex align-content-center">
                                        <div class="chart-report" data-color="info" data-series="50">
                                        </div>
                                        <div class="chart-info">
                                            <h5 class="mb-0">$64k</h5>
                                            <small class="text-muted">2021</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-12 mb-4">
                        <div class="card">
                            <div class="card-header pb-2">
                                <h5 class="card-title mb-0">Registration</h5>
                            </div>
                            <div class="card-body pb-2">
                                <div class="d-flex justify-content-between align-items-end gap-3">
                                    <div class="mb-3">
                                        <div class="d-flex align-content-center">
                                            <h5 class="mb-1">58.4k</h5>
                                            <i class="bx bx-chevron-up text-success"></i>
                                        </div>
                                        <small class="text-success">12.8%</small>
                                    </div>
                                    <div id="registrationsBarChart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Referral, conversion, impression & income charts -->
    </div>
@endsection
<!-- / Content -->
