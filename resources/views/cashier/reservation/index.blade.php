@extends('layouts.cashier')

@section('content')
    <div class="main-panel">
        <div class="contentWrapper">
            <div class="row py-2">
                <h4>RESERVATION INDEX</h4>
                <p class="pl-2">Reservation List</p>
            </div>

            <div class="col-12 grid-margin ">
                <div class="row">
                    <div class="csswrapper">
                        <div class="csstabs">
                            <div class="csstab">
                                <input type="radio" name="css-tabs" id="tab-1" checked class="csstab-switch">
                                <label for="tab-1" class="csstab-label">Reservation List </label>
                                <div class="csstab-content">
                                    <div class="col-m-12 grid-margin stretch-card">
                                        <div class="card white-bg">
                                            <div class="card-body bg-transparent">
                                                <div class="table-responsive">
                                                    <table class="table table-hover table-striped" id="reservationTable">
                                                        <thead class="color">
                                                            <tr>
                                                                <th>Code</th>
                                                                <th>Customer Name</th>
                                                                <th>Address</th>
                                                                <th>Total Amount</th>
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
        $(() => {
            $('#reservationTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('reservations.index') }}",
                columns: [{
                        data: 'id',
                        name: 'id',
                    },
                    {
                        data: 'user.username',
                        name: 'user.username'
                    },
                    {
                        data: 'user.address',
                        name: 'user.address'
                    },
                    {
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'actions',
                        name: 'actions'
                    }
                ]
            })
        })
    </script>
@endpush
