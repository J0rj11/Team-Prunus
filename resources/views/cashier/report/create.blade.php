@extends('layouts.cashier')

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
                        <div class="csstab">
                            <input type="radio" name="css-tabs" checked class="csstab-switch">
                            <label for="tab-3" class="csstab-label">Expenses</label>
                            <div class="csstab-content">
                                <div class="card-body white-bg">
                                    <form class="ml-5 py-4" action="{{ route('expense.store') }}" method="POST">
                                        @csrf
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Date</label>
                                            <div class="col-sm-4">
                                                <input type="date" class="form-control" name="expense_date">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Expense Account</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="expense_account">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Amount</label>
                                            <div class="col-sm-9">
                                                <input type="number" class="form-control" name="amount">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Notes</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="notes">
                                            </div>
                                        </div>

                                        <div class="pt-4 center">
                                            <button type="submit" class="btn btn-primary">Add Expenses</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
