@extends('layouts.admin')

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
                                <label for="tab-1" class="csstab-label">Delivery List </label>
                                <div class="csstab-content">
                                    <div class="col-m-12 grid-margin stretch-card">
                                        <div class="card white-bg">
                                            <div class="card-body bg-transparent">
                                                <div class="table-responsive">
                                                    <table class="table table-hover table-striped" id="reservationTable">
                                                        <thead class="color">
                                                            <tr>
                                                                <th>Date</th>
                                                                <th>Code</th>
                                                                <th>Client Name</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            {{-- <tr>
                                                                <td>2022-08-15</td>
                                                                <td>09123456789</td>
                                                                <td>Juan Dela Cruz </td>
                                                                <td>
                                                                    <a class="u" href="">View detail</a>
                                                                    <label
                                                                        class="btn btn-secondary btn-sm ml-2">Approve</label>
                                                                    <label class="btn btn-dark btn-sm">Decline</label>
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
    </div>
@endsection



@push('scripts')
    <script>
        $(() => {
            $('#reservationTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('admin.reservation.index') }}",
                columns: [{
                        data: 'created_at',
                        name: 'created_at',
                    },
                    {
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'user.username',
                        name: 'user.username'
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
