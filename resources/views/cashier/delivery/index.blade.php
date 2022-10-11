@extends('layouts.cashier')

@section('content')
    <div class="main-panel">
        <div class="contentWrapper">
            <div class="row py-2">
                <h4>DELIVERY INDEX</h4>
                <p class="pl-2">List Delivery</p>
            </div>

            <div class="col-12 grid-margin ">
                <div class="row">
                    <div class="csswrapper">
                        <div class="csstabs">
                            <div class="csstab">
                                <input type="radio" name="css-tabs" id="tab-1" checked class="csstab-switch">
                                <label for="tab-1" class="csstab-label">List Delivery</label>
                                <div class="csstab-content">
                                    <div class="col-m-12 grid-margin stretch-card">
                                        <div class="card white-bg">
                                            <div class="py-3 pl-4">Delivery Schedules</div>
                                            <div class="card-body bg-transparent">
                                                <div class="table-responsive">
                                                    <table class="table table-hover table-striped" id="deliveryTable">
                                                        <thead class="color">
                                                            <tr>
                                                                <th>Date</th>
                                                                <th>Customer Name</th>
                                                                <th>Address</th>
                                                                <th>Contact No.</th>
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
        $('#deliveryTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('delivery.index') }}",
            columns: [{
                    data: 'created_at',
                    name: 'created_at'
                },
                {
                    data: 'transaction.transaction_name',
                    name: 'transaction.transaction_name'
                },
                {
                    data: 'transaction.address',
                    name: 'transaction.address'
                },
                {
                    data: 'transaction.contact_number',
                    name: 'transaction.contact_number'
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
    </script>
@endpush
