@extends('layouts.admin')

@section('content')
    <div class="sidebar-fixed main-panel">
        <div class="contentWrapper">
            <div class="row py-2">
                <h4>REPORTS</h4>
                <p class="pl-2">Sold Item</p>
            </div>
            <div class="col-12 grid-margin ">
                <div class="row">
                    <div class="csswrapper">
                        <div class="csstabs">
                            <div class="csstab">
                                <input type="radio" name="css-tabs" id="tab-1" checked class="csstab-switch">
                                <label for="tab-1" class="csstab-label">Sold Item</label>
                                <div class="csstab-content">

                                    <div class="card white-bg">
                                        <!-- <div class="col-md-12 px-4">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="col-sm-3 col-form-label">Search by</label>
                                                    <div class="col-sm-9">
                                                        <input type="date" class="form-control" >
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="col-sm-3 col-form-label">Search by</label>
                                                    <div class="col-sm-9">
                                                        <input type="date" class="form-control" >
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                        
                                        <div></div>
                                        <div class="card-body">
                                            <div class="card-body bg-transparent">
                                                <form>
                                                    <div class="table-responsive">
                                                        <table class="table table-hover table-striped"
                                                            id="soldProductTable">
                                                            <thead class="color">
                                                                <tr>
                                                                    <th>Date</th>
                                                                    <th>File Name</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>05-02-2022</td>
                                                                    <td>SaleReport-5_2_2022.pdf</td>
                                                                    <td>
                                                                        <button class="btn btn-primary btn-sm">View</button>
                                                                        <button class="btn btn-dark btn-sm">Delete</button>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="csstab">
                                <input type="radio" name="css-tabs" id="tab-2" class="csstab-switch">
                                <label for="tab-2" class="csstab-label">Deliveries</label>
                                <div class="csstab-content">
                                    <div class="card-body white-bg">
                                        <div class="card bg-transparent">
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-hover table-striped" id="deliveryTable">
                                                    <thead class="color">
                                                        <tr>
                                                            <th>Date</th>
                                                            <th>File Name</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>05-02-2022</td>
                                                            <td>DeliveryReport-5_2_2022.pdf</td>
                                                            <td>
                                                                <button class="btn btn-primary btn-sm">View</button>
                                                                <button class="btn btn-dark btn-sm">Delete</button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="csstab">
                                <input type="radio" name="css-tabs" id="tab-3" class="csstab-switch">
                                <label for="tab-3" class="csstab-label">Expenses</label>
                                <div class="csstab-content">
                                    <div class="card-body white-bg">
                                        <div class="row pt-2 px-5">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label ">Search</label>
                                                    <div class="col-sm-8">
                                                        <input name="" value="" type="text"
                                                            class="form-control form-control-sm">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body bg-transparent">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-striped mb-2" id="expenseTable">
                                                <thead class="color">
                                                    <tr>
                                                        <th>Date</th>
                                                        <th>File Name</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>05-02-2022</td>
                                                        <td>ExpenseReport-5_2_2022.pdf</td>
                                                        <td>
                                                            <button class="btn btn-primary btn-sm">View</button>
                                                            <button class="btn btn-dark btn-sm">Delete</button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="csstab">
                                <input type="radio" name="css-tabs" id="tab-4" class="csstab-switch">
                                <label for="tab-4" class="csstab-label">Stock Inventory Report</label>
                                <div class="csstab-content">
                                    <div class="card-body white-bg">
                                        <div class="card-body bg-transparent">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-striped mb-2" id="expenseTable">
                                                <thead class="color">
                                                    <tr>
                                                        <th>Date</th>
                                                        <th>File Name</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>05-02-2022</td>
                                                        <td>ExpenseReport-5_2_2022.pdf</td>
                                                        <td>
                                                            <button class="btn btn-primary btn-sm">View</button>
                                                            <button class="btn btn-dark btn-sm">Delete</button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                </table>
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
