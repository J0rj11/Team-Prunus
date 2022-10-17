@extends('layouts.admin')

@section('content')
    <div class="sidebar-fixed main-panel">
        <div class="contentWrapper">
            <div class="row py-2">
                <h4>STOCK INVENTORY</h4>
            </div>
            <div class="col-12 grid-margin ">
                <div class="row">
                    <div class="csswrapper">
                        <div class="csstabs">
                            <div class="csstab">
                                <input type="radio" name="css-tabs" id="tab-1" checked class="csstab-switch">
                                <label for="tab-1" class="csstab-label">New Purchases</label>
                                <div class="csstab-content">

                                    <div class="card white-bg">
                                        <div class="card-body">
                                            <h3>PURCHASE DATA FORM</h3>
                                            <div class="row pt-2 px-5">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label ">Date</label>
                                                        <div class="col-sm-8">
                                                            <input name="" value="" type="date"
                                                                class="form-control form-control-sm">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <a class="btn btn-primary float-right"
                                                        href="{{ route('admin.stock-inventory.create') }}">Add Product</a>
                                                </div>
                                            </div>
                                            <div class="card-body bg-transparent">
                                                <form>
                                                    <div class="table-responsive">
                                                        <table class="table table-hover table-striped"
                                                            id="purchaseProductTable">
                                                            <thead class="color">
                                                                <tr>
                                                                    <th>Product Category</th>
                                                                    <th>Product Name</th>
                                                                    <th>Quantity</th>
                                                                    <th>Purchase Price</th>
                                                                    <th>Total</th>
                                                                    <th>Sale Price</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="csstab">
                                <input type="radio" name="css-tabs" id="tab-2" class="csstab-switch">
                                <label for="tab-2" class="csstab-label">Purchase Records</label>
                                <div class="csstab-content">
                                    <div class="card-body white-bg">
                                        <div class="card bg-transparent">
                                            <h3>MONTHLY PURCHASE RECORDS</h3>
                                            <div class="card-body">
                                                <div class="table-responsive px-3">
                                                    <table class="table table-hover table-striped" id="deliveryTable">
                                                        <thead class="color">
                                                            <tr>
                                                                <th>Month</th>
                                                                <th>Year</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>January</td>
                                                                <td>2022</td>
                                                                <td>
                                                                    <button class="btn btn-primary btn-sm">View</button>
                                                                    <button class="btn btn-dark btn-sm">Delete</button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>February</td>
                                                                <td>2022</td>
                                                                <td>
                                                                    <button class="btn btn-primary btn-sm">View</button>
                                                                    <button class="btn btn-dark btn-sm">Delete</button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>March</td>
                                                                <td>2022</td>
                                                                <td>
                                                                    <button class="btn btn-primary btn-sm">View</button>
                                                                    <button class="btn btn-dark btn-sm">Delete</button>
                                                                </td>
                                                            </tr>
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
            $('#purchaseProductTable').DataTable({
                serverSide: true,
                processing: true,
                ajax: "{{ route('admin.stock-inventory.index') }}",
                columns: [{
                        data: 'category.category_name',
                        name: 'category.category_name'
                    },
                    {
                        data: 'product_name',
                        name: 'product_name'
                    },
                    {
                        data: 'quantity',
                        name: 'quantity'
                    },
                    {
                        data: 'purchase_price',
                        name: 'purchase_price'
                    },
                    {
                        data: 'total',
                        name: 'total'
                    },
                    {
                        data: 'price',
                        name: 'price',
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
