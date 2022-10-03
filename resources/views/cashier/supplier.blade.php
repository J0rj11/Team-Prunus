@extends('layouts.app')

@section('content')
    <div class="sidebar-fixed main-panel">
        <div class="contentWrapper">
            <div class="row py-2">
                <h4>SUPPLIER FORM</h4>
                <p class="pl-2">Add Supplier</p>
            </div>
            <div class="col-12 grid-margin ">
                <div class="row">
                    <div class="csswrapper">
                        <div class="csstabs">
                            <div class="csstab">
                                <input type="radio" name="css-tabs" id="tab-1" checked class="csstab-switch">
                                <label for="tab-1" class="csstab-label">Add Supplier</label>
                                <div class="csstab-content">

                                    <div class="card-body white-bg">
                                        <form class="ml-3 py-4" action="{{ route('supplier.store') }}" method="POST">
                                            @csrf
                                            <div class="form-inline">
                                                <div class="row-2">
                                                    <label class="mr-4">Supplier Code </label>
                                                    <input type="text" class="form-control mb-2" name="supplier_code">

                                                    <label class="ml-6 mr-4">Contact</label>
                                                    <input type="text" class="form-control mb-2 " name="contact">
                                                </div>
                                            </div>
                                            <div class="form-inline">
                                                <div class="row-2">
                                                    <label class="mr-3">Supplier Name</label>
                                                    <input type="text" class="form-control mb-2 mr-sm-2"
                                                           name="supplier_name">
                                                </div>
                                            </div>
                                            <div class="form-inline">
                                                <label class="mr-6 pl-3">Address</label>
                                                <input type="text" class="form-control mb-2 mr-sm-2 col-md-10"
                                                       name="address">
                                            </div>
                                            <center class="mt-5 mb-2">
                                                <button type="button" class="btn btn-outline-primary btn-md mr-5">
                                                    Cancel
                                                </button>
                                                <button type="submit" class="btn btn-primary btn-md">Save</button>
                                            </center>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="csstab">
                                <input type="radio" name="css-tabs" id="tab-2" class="csstab-switch">
                                <label for="tab-2" class="csstab-label">List Supplier</label>
                                <div class="csstab-content">
                                    <div class="card-body white-bg">
                                        <div class="card-body bg-transparent">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-striped" id="supplierTable">
                                                    <thead class="color">
                                                    <tr>
                                                        <th>Code</th>
                                                        <th>Supplier Name</th>
                                                        <th>Contact</th>
                                                        <th>Address</th>
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
            $('#supplierTable').DataTable({
                serverSide: true,
                processing: true,
                ajax: "{{ route('supplier.index') }}",
                columns: [{
                    data: 'supplier_code',
                    name: 'supplier_code'
                },
                    {
                        data: 'supplier_name',
                        name: 'supplier_name'
                    },
                    {
                        data: 'contact',
                        name: 'contact'
                    },
                    {
                        data: 'address',
                        name: 'address'
                    },
                    {
                        data: 'actions',
                        name: 'actions'
                    }
                ],
                columnDefs: [{
                    "defaultContent": "-",
                    "targets": "_all"
                }]
            })
        })
    </script>
@endpush

