@extends('layouts.admin')

@section('content')
    <div class="sidebar-fixed main-panel">
        <div class="contentWrapper">
            <div class="row py-2">
                <h4>STOCK INVENTORY</h4>
                <p class="pl-2">Sold Item</p>
            </div>
            <div class="col-12 grid-margin ">
                <div class="row">
                    <div class="csswrapper">
                        <div class="csstabs">
                            <div class="csstab">
                                <input type="radio" name="css-tabs" id="tab-1" checked class="csstab-switch">
                                <label for="tab-1" class="csstab-label">Purchase Records</label>
                                <div class="csstab-content">
                                    <div class="card-body white-bg">
                                        <div class="card bg-transparent">
                                            <h3>MONTHLY PURCHASE RECORDS</h3>
                                            <div class="card-body">
                                                <div class="table-responsive px-3">
                                                    <table class="table table-hover table-striped table-bordered-body"
                                                        id="deliveryTable">
                                                        <thead class="color">
                                                            <tr>
                                                                <th>MONTHLY: {{ request('month') }}</th>
                                                            </tr>
                                                            <tr>
                                                                <th>YEAR: {{ request('year') }}</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th>Record #</th>
                                                                <th>Date</th>
                                                                <th>Action</th>
                                                            </tr>
                                                            <tr>
                                                                <td>J122</td>
                                                                <td>01/15/2022</td>
                                                                <td>
                                                                    <button class="btn btn-primary btn-sm">View</button>
                                                                    <button class="btn btn-dark btn-sm">Download</button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>J222</td>
                                                                <td>2022</td>
                                                                <td>
                                                                    <button class="btn btn-primary btn-sm">View</button>
                                                                    <button class="btn btn-dark btn-sm">Download</button>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="float-right mt-5">
                                                    <a href="{{ route('customer.index') }}"
                                                        class="btn btn-outline-primary btn-sm mr-5">
                                                        <i class="fa fa-arrow-left menu-icon"></i>
                                                        <span class="menu-title">Back</span>
                                                    </a>
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
        </div>
    </div>
@endsection
