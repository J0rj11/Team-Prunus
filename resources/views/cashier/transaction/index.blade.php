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
                                        @if ($errors->any())
                                            @foreach ($errors->all() as $error)
                                                <span>{{ $error }}</span>
                                            @endforeach
                                        @endif
                                        <form class="px-3" method="POST" action="{{ route('transaction.store') }}">
                                            @csrf
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
                                                            <input name="contact_number" type="text"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 col-form-label">Delivery Method</label>
                                                        <div class="col-sm-8">
                                                            <select class="form-control form-control-sm"
                                                                name="delivery_status">
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
                                                            <select class="form-control form-control-sm"
                                                                name="payment_method" id="payment_method">
                                                                <option
                                                                    value="{{ \App\Models\Transaction::$TRANSACTION_PAYMENT_CASH }}">
                                                                    Full Payment</option>
                                                                <option
                                                                    value="{{ \App\Models\Transaction::$TRANSACTION_PAYMENT_CREDIT }}">
                                                                    Partial Payment</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-5 due_date">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 col-form-label">Due Date</label>
                                                        <div class="col-sm-8">
                                                            <input name="due_date" type="date" class="form-control">
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
            $('.due_date').hide();

            $('#transactionTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('transaction.index') }}",
                columns: [{
                        data: 'transaction_identifier',
                        name: 'transaction_identifier'
                    },
                    {
                        data: 'transaction_name',
                        name: 'transaction_name'
                    },
                    {
                        data: 'purchases_count',
                        name: 'purchases_count'
                    },
                    {
                        data: 'total_sum',
                        name: 'total_sum'
                    },
                    {
                        data: 'payment_method',
                        name: 'payment_method'
                    },
                    {
                        data: 'actions',
                        name: 'actions'
                    }
                ],
                columnDefs: [{
                        "defaultContent": "-",
                        "targets": "_all"
                    },
                    {
                        "searchable": false,
                        targets: [2, 3]
                    }
                ]
            })


            $('#payment_method').on('change', (e) => {
                if (e.target.value == '1') {
                    $('.due_date').hide();
                    return;
                }
                $('.due_date').show()
            })
        })
    </script>
@endpush
