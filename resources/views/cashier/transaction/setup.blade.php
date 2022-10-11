@extends('layouts.cashier')

@section('content')
    <div class="main-panel">
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
                                <label for="tab-1" class="csstab-label">List Customer</label>
                                <div class="csstab-content">
                                    <div class="col-m-12 grid-margin stretch-card">
                                        <div class="card white-bg">
                                            <div class="pt-3 pl-4">
                                                <form class="px-3">

                                                    <div class="row mt-3">
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Customer Name</label>
                                                                <div class="col-sm-9">
                                                                    <input x-model="form.transaction_code" type="text"
                                                                        class="form-control"
                                                                        value="{{ $transaction->transaction_name }}"
                                                                        readonly>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="card-body">

                                                <div class="col-md-12 grid-margin stretch-card">
                                                    <div class="card-body bg-transparent">
                                                        <h4>ITEM INFORMATION</h4>
                                                        <div class="form-group row center">
                                                            <div class="col">
                                                                <label>Category</label>
                                                                <select class="form-control" id="exampleFormControlSelect2">
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                </select>
                                                            </div>
                                                            <div class="col">
                                                                <label>Item Name</label>
                                                                <select class="form-control" id="exampleFormControlSelect2">
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                </select>
                                                            </div>
                                                            <div class="col">
                                                                <label>Quantity</label>
                                                                <div id="the-basics">
                                                                    <input class="typeahead" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <label>Price</label>
                                                                <div id="bloodhound">
                                                                    <input class="typeahead" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <label>Action</label>
                                                                <div>
                                                                    <label class="btn btn-dark btn-sm">Confirm</label>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="table-responsive mt-3">
                                                    <table class="table table-hover table-striped">
                                                        <tbody>
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
                                                <div class="pt-4 center">
                                                    <button type="submit"
                                                        class="btn btn-outline-primary btn-md">Cancel</button>
                                                    <button type="submit" class="btn btn-primary btn-md">Submit</button>
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
