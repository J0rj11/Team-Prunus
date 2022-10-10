@extends('layouts.app')

@section('content')
    <div class="sidebar-fixed main-panel overflow-auto">
        <div class="contentWrapper">
            <div class="row py-2">
                <h4>SUPPLIER FORM</h4>
                <p class="pl-2">Supplier List</p>
            </div>
            <div class="col-12 grid-margin ">
                <div class="row">
                    <div class="csswrapper">
                        <div class="csstabs">
                            <div class="csstab">
                                <input type="radio" name="css-tabs" id="tab-1" checked class="csstab-switch">
                                
                                <label for="tab-2" class="csstab-label">Supplier List</label>
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

