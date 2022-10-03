@extends('layouts.app')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <h4 style="padding-bottom: 10px;">DASHBOARD</h4>
            <div class="row">
                <div class="col-12 grid-margin ">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <p class="card-title">Sales Report</p>
                                <a href="#" class="text-info">View all</a>
                            </div>
                            <canvas id="sales-chart" style=" width: 100%; height: 250px; padding: 0 50px 0 50px;"
                                class="chartjs-render-monitor"></canvas>
                        </div>
                    </div>
                </div>

                <div class="col-12 grid-margin ">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="col-md-6 mb-4 stretch-card transparent">
                                    <div class="card card-tale" style="border-radius: 5px;">
                                        <div class="card-body">
                                            <h4>RESERVATIONS</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-4 stretch-card transparent">
                                    <div class="card card-tale" style="border-radius: 5px;">
                                        <div class="card-body">
                                            <h4>DELIVERIES</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-4 stretch-card transparent">
                                    <div class="card card-tale" style="border-radius: 5px;">
                                        <div class="card-body">
                                            <h4>ITEMS AVAILABLE</h4>
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
