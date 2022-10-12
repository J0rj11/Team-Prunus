@extends('layouts.cashier')

@section('content')
    <div class="main-panel">
        <div class="contentWrapper">
            <div class="row py-2">
                <h4>REPORTS</h4>
                <p class="pl-2">Expenses</p>
            </div>
            <div class="col-12 grid-margin ">
                <div class="row">
                    <div class="csswrapper">
                        <div class="csstabs">
                            <div class="csstab">
                                <input type="radio" name="css-tabs" id="tab-1" checked class="csstab-switch">
                                <label for="tab-1" class="csstab-label">Expenses</label>
                                <div class="csstab-content">
                                    <div class="col-m-12 grid-margin stretch-card">
                                        <div class="card white-bg p-3">

                                            <h3>EXPENSE REPORT</h3>
                                            <div class="row pt-2 px-5">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 col-form-label ">Date</label>
                                                        <div class="col-sm-8">
                                                            <input name="" value="" type="date"
                                                                class="form-control form-control-sm">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body bg-transparent">
                                                <div class="table-responsive">
                                                    <table class="table table-hover table-striped mb-2">
                                                        <thead class="color">
                                                            <tr>
                                                                <th>Date</th>
                                                                <th>Expense Account</th>
                                                                <th>Amount</th>
                                                                <th>Notes</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>05/22/2022</td>
                                                                <td>Car Repair</td>
                                                                <td>₱ 100.00</td>
                                                                <td>Truck #1R</td>
                                                        </tbody>
                                                    </table>
                                                    <div class="detail-title pt-3">Total:</div> <span
                                                        class="detail-subtitle">₱ 1,350.00</span>
                                                    <div class="float-right px-3 py-3">
                                                        <button type="submit" class="btn btn-secondary btn-md">Submit
                                                            Report</button>
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
    </div>
@endsection
