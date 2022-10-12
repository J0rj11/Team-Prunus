@extends('layouts.cashier')

@section('content')
    <div class="sidebar-fixed main-panel">
        <div class="contentWrapper">
            <div class="row py-2">
                <h4>REPORTS</h4>
                <p class="pl-2">Sold Item</p>
            </div>
            <div class="col-12 grid-margin ">
                <div class="row">
                    <div class="csswrapper">
                        <div class="csstabs">
                            <div class="csstab">
                                <input type="radio" name="css-tabs" id="tab-1" checked class="csstab-switch">
                                <label for="tab-1" class="csstab-label">Sold Item</label>
                                <div class="csstab-content">

                                    <div class="card white-bg">
                                        <div class="card-body">
                                            <div class="card-body bg-transparent">
                                                <form>
                                                    <div class="table-responsive">
                                                        <table class="table table-hover table-striped"
                                                            id="productSoldTable">
                                                            <thead class="color">
                                                                <tr>
                                                                    <th>Date</th>
                                                                    <th>Code</th>
                                                                    <th>Product Name</th>
                                                                    <th>Quantity</th>
                                                                    <th>Total</th>
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
                                <label for="tab-2" class="csstab-label">Delivery</label>
                                <div class="csstab-content">
                                    <div class="card-body white-bg">

                                        <div class="card bg-transparent">
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-hover table-striped" id="deliveryTable">
                                                        <thead class="color">
                                                            <tr>
                                                                <th>Date</th>
                                                                <th>Time</th>
                                                                <th>Truck #</th>
                                                                <th>Client's Name</th>
                                                                <th>Items</th>
                                                                <th>Amount</th>
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
                                <input type="radio" name="css-tabs" id="tab-3" class="csstab-switch">
                                <label for="tab-3" class="csstab-label">Expenses</label>
                                <div class="csstab-content">
                                    <div class="card-body white-bg">
                                        <h3>EXPENSE REPORT</h3>
                                        <div class="d-flex justify-content-end">
                                            <a type="submit" class="btn btn-primary mb-2 mr-4"
                                                href="{{ route('expense.index') }}">Add Expenses</a>
                                        </div>
                                        <div class="card-body bg-transparent">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-striped" id="expenseTable">
                                                    <thead class="color">
                                                        <tr>
                                                            <th>Date</th>
                                                            <th>Expense Account</th>
                                                            <th>Amount</th>
                                                            <th>Notes</th>
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
    <script>
        $(() => {
            $('#productSoldTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('reports.product-sold') }}",
                columns: [{
                        data: 'created_at',
                        name: 'created_at'
                    },
                    {
                        data: 'product.category.category_code',
                        name: 'product.category.category_code'
                    },
                    {
                        data: 'product.product_name',
                        name: 'product.product_name'
                    },
                    {
                        data: 'quantity',
                        name: 'quantity',
                    },
                    {
                        data: 'price',
                        name: 'price'
                    }
                ]
            })

            $('#deliveryTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('reports.delivery-completed') }}",
                columns: [{
                        data: 'created_at',
                        name: 'created_at'
                    },
                    {
                        data: 'updated_at',
                        name: 'updated_at'
                    },
                    {
                        data: 'truck_number',
                        name: 'truck_number'
                    },
                    {
                        data: 'transaction.transaction_name',
                        name: 'transaction.transaction_name'
                    },
                    {
                        data: 'joinedItems',
                        name: 'transaction.transactionItems.product.product_name'
                    },
                    {
                        data: 'sum_price',
                        name: 'sum_price'
                    }
                ]
            })

            $('#expenseTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('expense.index') }}",
                columns: [{
                        data: 'expense_date',
                        name: 'expense_date'
                    },
                    {
                        data: 'expense_account',
                        name: 'expense_account'
                    },
                    {
                        data: 'amount',
                        name: 'amount'
                    },
                    {
                        data: 'notes',
                        name: 'notes'
                    }
                ]
            })
        })
    </script>
@endpush
