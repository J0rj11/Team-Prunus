@extends('layouts.cashier')

@section('content')
    <div class="main-panel">
        <div class="contentWrapper">
            <div class="row py-2">
                <h4>CUSTOMER INDEX</h4>
                <p class="pl-2">List Customer</p>
            </div>
            <div class="col-12 grid-margin ">
                <div class="row">
                    <div class="csswrapper">
                        <div class="csstabs">
                            <div class="csstab">
                                <input type="radio" name="css-tabs" id="tab-1" checked class="csstab-switch">
                                <label for="tab-1" class="csstab-label">List Transaction</label>
                                <div class="csstab-content">
                                    <div class="col-m-12 grid-margin stretch-card">
                                        <div class="card white-bg">
                                            <div class="py-3 pl-4">{{ $balance->transaction_identifier }}
                                                <div class="float-right">
                                                    <a type="button" class="btn btn-outline-primary btn-sm mr-5"
                                                        href="{{ route('balance.index') }}">
                                                        <i class="fa fa-arrow-left menu-icon"></i>
                                                        <span class="menu-title">Back</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-hover table-striped mb-4">
                                                        <thead class="color">
                                                            <tr>
                                                                <th>Code</th>
                                                                <th>Customer Name</th>
                                                                <th>Total Item</th>
                                                                <th>Total Payment</th>
                                                                <th>Payment Method</th>
                                                                <th>Due</th>
                                                                <th>Date</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>{{ $balance->transaction_identifier }}</td>
                                                                <td>{{ $balance->transaction_name }}</td>
                                                                <td>{{ $balance->transaction_items_count }}</td>
                                                                <td>₱ {{ $balance->transaction_items_sum_price }}</td>
                                                                <td>{{ $balance->payment_method == 0 ? 'CREDIT' : 'CASH' }}
                                                                </td>
                                                                <td>{{ $balance->due_date }}</td>
                                                                <td>{{ $balance->date }}</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                            <h4>TRANSACTION DATA</h4>
                                            <div class="card-body bg-transparent">
                                                <div class="table-responsive">
                                                    <table class="table table-hover table-striped">
                                                        <thead class="color">
                                                            <tr>
                                                                <th>Product Name</th>
                                                                <th>Category</th>
                                                                <th>Quantity</th>
                                                                <th>Price/Item</th>
                                                                <th>Subtotal</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($balance->transactionItems as $transactionItem)
                                                                <tr>
                                                                    <td>{{ $transactionItem->product->product_name }}</td>
                                                                    <td>{{ $transactionItem->product->category->category_name }}
                                                                    </td>
                                                                    <td>{{ $transactionItem->quantity }}</td>
                                                                    <td>₱ {{ $transactionItem->product->price }}</td>
                                                                    <td>₱ {{ $transactionItem->price }}</td>
                                                                </tr>
                                                            @endforeach
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
