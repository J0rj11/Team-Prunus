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
                                <label for="tab-1" class="csstab-label">Add Transaction</label>
                                <div class="csstab-content">

                                    <div class="card-body white-bg">
                                        <form class="px-3" method="POST" action="{{ route('transaction.store') }}">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 col-form-label">Date</label>
                                                        <div class="col-sm-8">
                                                            <input name="" type="date"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Transaction ID</label>
                                                        <div class="col-sm-10">
                                                            <input name="transaction_identifier" type="text"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 col-form-label">Customer Name</label>
                                                        <div class="col-sm-8">
                                                            <input name="transaction_name" type="text"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 col-form-label">Address</label>
                                                        <div class="col-sm-8">
                                                            <input name="address" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 col-form-label">Contact No.</label>
                                                        <div class="col-sm-8">
                                                            <input name="number" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 col-form-label">Delivery Status</label>
                                                        <div class="col-sm-8">
                                                            <select class="form-control form-control-sm" name="delivery_status">
                                                                <option
                                                                    value="{{ \App\Models\Transaction::$TRANSACTION_DELIVERY_DELIVER }}">
                                                                    Deliver</option>
                                                                <option
                                                                    value="{{ \App\Models\Transaction::$TRANSACTION_DELIVERY_PICKUP }}">
                                                                    Pickup</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 col-form-label">Payment Method</label>
                                                        <div class="col-sm-8">
                                                            <select class="form-control form-control-sm" name="payment_method">
                                                                <option
                                                                    value="{{ \App\Models\Transaction::$TRANSACTION_PAYMENT_CASH }}">
                                                                    Cash</option>
                                                                <option
                                                                    value="{{ \App\Models\Transaction::$TRANSACTION_PAYMENT_CREDIT }}">
                                                                    Credit</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-5">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 col-form-label">Due Date</label>
                                                        <div class="col-sm-8">
                                                            <input name="date" type="date" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="pt-4 center mb-4">
                                                <button type="submit" class="btn btn-outline-primary btn-md">Cancel
                                                    edit</button>
                                                <button type="submit" class="btn btn-primary btn-md">Proceed</button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                            <div class="csstab">
                                <input type="radio" name="css-tabs" id="tab-2" class="csstab-switch">
                                <label for="tab-2" class="csstab-label">Transaction List</label>
                                <div class="csstab-content">
                                    <div class="card-body white-bg">
                                        {{-- <form class="form-group row px-1 pl-5">
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
                                        </form> --}}

                                        <div class="card-body bg-transparent">
                                            <div class="table-responsive mt-2">
                                                <table class="table table-hover table-striped" id="transactionTable">
                                                    <thead class="color">
                                                        <tr>
                                                            <th>Transaction ID</th>
                                                            <th>Transaction Name</th>
                                                            <th>Total Item</th>
                                                            <th>Total Price</th>
                                                            <th>Payment Method</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        {{-- <tr>
                                                            <td>OUT963214 </td>
                                                            <td>Jeorgie Salcedo </td>
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
                                                        </tr> --}}
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


@push('scripts')
    <script type="text/javascript">
        $(() => {
            $('#transactionTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('transaction.index') }}",
                columns: [
                    { data: 'transaction_identifier', name: 'transaction_identifier'}, 
                    { data: 'transaction_name', name: 'transaction_name'},
                    { data: 'total_item', name: 'total_item'}, 
                    { data: 'total_price', name: 'total_price'}, 
                    { data: 'payment_method', name: 'payment_method'},
                    { data: 'actions', name: 'actions'}
                ],
                columnDefs: [
                    { "defaultContent": "-", "targets": "_all" },
                    { "searchable": false, targets: [2,3]}
                ]
            })
        })
    </script>
@endpush
