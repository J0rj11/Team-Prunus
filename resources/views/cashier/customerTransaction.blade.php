@extends('layouts.cashier')

@section('content')
    <div class="sidebar-fixed main-panel">
        <div class="contentWrapper">
            <div class="row py-2">
                <h4>CUSTOMER TRANSACTION FORM</h4>
                <p class="pl-2">Add Transaction</p>
            </div>
            <div class="col-12 grid-margin ">
                <div class="row">
                    <div class="csswrapper">
                        <div class="csstabs">
                            <div class="csstab">
                                <input type="radio" name="css-tabs" id="tab-1" checked class="csstab-switch">
                                <label for="tab-1" class="csstab-label">Add/Edit Transaction</label>
                                <div class="csstab-content">

                                    <div class="card-body white-bg">
                                        <form>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Transaction ID</label>
                                                <div class="col-sm-9">
                                                    <input type="email" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-inline ml-6">
                                                <div class="row">
                                                    <label class="col-sm-3 col-form-label">Customer Name</label>
                                                    <div class="col-sm-3">

                                                        <input type="email" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-inline ml-6">
                                                    <div class="row">
                                                        <label class="col-sm-2 col-form-label">Date</label>
                                                        <div class="col-sm-3">
                                                            <input type="email" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-inline ml-6">
                                                <div class="row">
                                                    <label class="col-sm-3 col-form-label">Address</label>
                                                    <div class="col-sm-3">

                                                        <input type="email" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-inline ml-6">
                                                    <div class="row">
                                                        <label class="col-sm-2 col-form-label">Payment Method</label>
                                                        <div class="col-sm-3">
                                                            <select class="form-control">
                                                                <option></option>
                                                                <option></option>
                                                                <option></option>
                                                                <option></option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-inline ml-6 mb-2">
                                                <div class="row">
                                                    <label class="col-sm-3 col-form-label">Contact No.</label>
                                                    <div class="col-sm-3">

                                                        <input type="email" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-inline ml-6">
                                                    <div class="row">
                                                        <label class="col-sm-2 col-form-label">Delivery Status</label>
                                                        <div class="col-sm-3">
                                                            <select class="form-control">
                                                                <option></option>
                                                                <option></option>
                                                                <option></option>
                                                                <option></option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <h4>TRANSACTIONS</h4>
                                            <div class="table-responsive">
                                                <table class="table table-hover table-striped">
                                                    <thead class="color">
                                                    <tr>
                                                        <th>Category</th>
                                                        <th>Item Name</th>
                                                        <th>Quantity</th>
                                                        <th>Price</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>Pipes</td>
                                                        <td>PVC Pipe #2</td>
                                                        <td>2</td>
                                                        <td>₱ 250.00</td>
                                                        <td>
                                                            <label class="btn btn-dark btn-sm">Confirm</label>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>A2</td>
                                                        <td>PVC Pipe #2</td>
                                                        <td>55</td>
                                                        <td>₱ 250.00</td>
                                                        <td>
                                                            <button class="btn btn-danger btn-rounded btn-icon-sm">
                                                                <i class='fa-solid fa-xmark'></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>A3</td>
                                                        <td>PVC Pipe #2</td>
                                                        <td>55</td>
                                                        <td>₱ 250.00</td>
                                                        <td>
                                                            <button class="btn btn-danger btn-rounded btn-icon-sm">
                                                                <i class='fa-solid fa-xmark'></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>A4</td>
                                                        <td>PVC Pipe #2</td>
                                                        <td>55</td>
                                                        <td>₱ 250.00</td>
                                                        <td>
                                                            <button class="btn btn-danger btn-rounded btn-icon-sm">
                                                                <i class='fa-solid fa-xmark'></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr class="font-weight-bolder">
                                                        <td>Total Price</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td>₱ 1500.00</td>
                                                        <td></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <center class="mt-5 mb-5">
                                                <button type="button" class="btn btn-outline-primary btn-md mr-5">
                                                    Cancel
                                                </button>
                                                <button type="submit" class="btn btn-primary btn-md">Submit</button>
                                            </center>
                                        </form>
                                    </div>

                                </div>
                            </div>
                            <div class="csstab">
                                <input type="radio" name="css-tabs" id="tab-2" class="csstab-switch">
                                <label for="tab-2" class="csstab-label">List Transaction</label>
                                <div class="csstab-content">
                                    <div class="card-body white-bg">
                                        <form class="form-group row px-1 pl-5">
                                            <div class="col">
                                                <label class="mb-2">Search by</label>
                                                <select class="form-control">
                                                    <option></option>
                                                    <option></option>
                                                    <option></option>
                                                    <option></option>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <label class="mb-2">Value</label>
                                                <input class="typeahead" type="text">
                                            </div>
                                            <div class="col pt-4-5">
                                                <button type="submit" class="btn btn-primary mb-2">Search</button>
                                            </div>
                                        </form>

                                        <div class="card-body bg-transparent">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-striped">
                                                    <thead class="color">
                                                    <tr>
                                                        <th>Transaction ID</th>
                                                        <th>Customer Name</th>
                                                        <th>Total Item</th>
                                                        <th>Total Price</th>
                                                        <th>Payment Method</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>OUT190081</td>
                                                        <td>Juan Dela Cruz</td>
                                                        <td>5</td>
                                                        <td>₱ 1,500.00</td>
                                                        <td>
                                                            <label class="btn btn-warning btn-sm">Cash</label>
                                                        </td>
                                                        <td>
                                                            <label class="btn btn-success btn-sm">Details</label>
                                                            <label class="btn btn-secondary btn-sm">Edit</label>
                                                            <label class="btn btn-dark btn-sm">Delete</label>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>OUT201120</td>
                                                        <td>John Doe</td>
                                                        <td>5</td>
                                                        <td>₱ 1500.00</td>
                                                        <td>
                                                            <label class="btn btn-light btn-sm">Credit</label>
                                                        </td>
                                                        <td>
                                                            <label class="btn btn-success btn-sm">Details</label>
                                                            <label class="btn btn-secondary btn-sm">Edit</label>
                                                            <label class="btn btn-dark btn-sm">Delete</label>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>OUT190212</td>
                                                        <td>Sheila Zuniga</td>
                                                        <td>3</td>
                                                        <td>₱ 1012.00</td>
                                                        <td>
                                                            <label class="btn btn-warning btn-sm">Cash</label>
                                                        </td>
                                                        <td>
                                                            <label class="btn btn-success btn-sm">Details</label>
                                                            <label class="btn btn-secondary btn-sm">Edit</label>
                                                            <label class="btn btn-dark btn-sm">Delete</label>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>OUT120031</td>
                                                        <td>Vina Occiano</td>
                                                        <td>3</td>
                                                        <td>₱ 1012.00</td>
                                                        <td>
                                                            <label class="btn btn-warning btn-sm">Cash</label>
                                                        </td>
                                                        <td>
                                                            <label class="btn btn-success btn-sm">Details</label>
                                                            <label class="btn btn-secondary btn-sm">Edit</label>
                                                            <label class="btn btn-dark btn-sm">Delete</label>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>OUT963214</td>
                                                        <td>Jeorgie Salcedo</td>
                                                        <td>3</td>
                                                        <td>₱ 1012.00</td>
                                                        <td>
                                                            <label class="btn btn-light btn-sm">Credit</label>
                                                        </td>
                                                        <td>
                                                            <label class="btn btn-success btn-sm">Details</label>
                                                            <label class="btn btn-secondary btn-sm">Edit</label>
                                                            <label class="btn btn-dark btn-sm">Delete</label>
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

