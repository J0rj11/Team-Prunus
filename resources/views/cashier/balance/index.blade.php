@extends('layouts.cashier')

@section('content')
    <div class="main-panel">
        <div class="contentWrapper">
            <div class="row py-2">
                <h4>BALANCES</h4>
                <p class="pl-2">List Balances</p>
            </div>

            <div class="col-12 grid-margin ">
                <div class="row">
                    <div class="csswrapper">
                        <div class="csstabs">
                            <div class="csstab">
                                <input type="radio" name="css-tabs" id="tab-1" checked class="csstab-switch">
                                <label for="tab-1" class="csstab-label">Customer Balances</label>
                                <div class="csstab-content">
                                    <div class="col-m-12 grid-margin stretch-card">
                                        <div class="card white-bg">
                                            <div class="card-body bg-transparent">
                                                <div class="table-responsive">
                                                    <table class="table table-hover table-striped" id="balanceTable">
                                                        <thead class="color">
                                                            <tr>
                                                                <th>Transaction ID</th>
                                                                <th>Customer Name</th>
                                                                <th>Total Item</th>
                                                                <th>Total Payment</th>
                                                                <th>Due</th>
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
                            <div class="csstab">
                                <input type="radio" name="css-tabs" id="tab-2"class="csstab-switch">
                                <label for="tab-2" class="csstab-label">Reservation Balances</label>
                                <div class="csstab-content">
                                    <div class="col-m-12 grid-margin stretch-card">
                                        <div class="card white-bg">
                                            <div class="card-body bg-transparent">
                                                <div class="table-responsive">
                                                    <table class="table table-hover table-striped" id="reservationTable">
                                                        <thead class="color">
                                                            <tr>
                                                                <th>Reservation ID</th>
                                                                <th>Customer Name</th>
                                                                <th>Total Item</th>
                                                                <th>Total Payment</th>
                                                                <th>Due</th>
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
    </div>
@endsection

@push('scripts')
    <script>
        $('#balanceTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('balance.index') }}",
            columns: [{
                    data: 'transaction_identifier',
                    name: 'transaction_identifier'
                },
                {
                    data: 'transaction_name',
                    name: 'transaction_name'
                },
                {
                    data: 'transaction_items_count',
                    name: 'transaction_items_count'
                },
                {
                    data: 'transaction_items_sum_price',
                    name: 'transaction_items_sum_price'
                },
                {
                    data: 'due_date',
                    name: 'due_date'
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


        $('#reservationTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('reservation-balance.index') }}",
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'reservation_items_count',
                    name: 'reservation_items_count'
                },
                {
                    data: 'reservation_items_sum_price',
                    name: 'reservation_items_sum_price'
                },
                {
                    data: 'due_date',
                    name: 'due_date'
                },
                {
                    data: 'actions',
                    name: 'actions'
                }
            ]
        })
    </script>
@endpush
