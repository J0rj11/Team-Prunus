@extends('layouts.admin')



@section('content')
    <div class="sidebar-fixed main-panel">
        <div class="contentWrapper">
            <div class="row py-2">
                <h4>SUPPLIERS</h4>
            </div>
            <div class="col-12 grid-margin ">
                <div class="row">
                    <div class="csswrapper">
                        <div class="csstabs">
                            <div class="csstab">
                                <input type="radio" name="css-tabs" id="tab-1" value="1" x-model="tab"
                                    class="csstab-switch">
                                <label for="tab-1" class="csstab-label"><span
                                        x-text="id != null ? 'Edit' : 'Add'"></span> Supplier</label>
                                <div class="csstab-content">
                                    <div class="card-body white-bg">
                                        <form class="ml-3 pt-4 px-4" action="{{ route('admin.supplier.store') }}"
                                            method="POST">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 col-form-label">Supplier Code</label>
                                                        <div class="col-sm-8">
                                                            <input name="supplier_code" value="{{ old('supplier_code') }}"
                                                                type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 col-form-label">Contact</label>
                                                        <div class="col-sm-8">
                                                            <input name="contact" value="{{ old('contact') }}"
                                                                type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 col-form-label">Supplier Name</label>
                                                        <div class="col-sm-8">
                                                            <input name="supplier_name" value="{{ old('supplier_name') }}"
                                                                type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Address</label>
                                                        <div class="col-sm-10">
                                                            <input name="address" value="{{ old('address') }}"
                                                                type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mt-5 pb-2 center">
                                                <button type="button"
                                                    class="btn btn-outline-primary btn-md mr-2">Cancel</button>
                                                <button type="submit" class="btn btn-primary btn-md">Save</button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="csstab">
                                <input type="radio" name="css-tabs" id="tab-2" value="2" checked
                                    class="csstab-switch">
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
                ajax: "{{ route('admin.supplier.index') }}",
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
