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
                                <label for="tab-1" class="csstab-label">Purchase Records</label>
                                <div class="csstab-content">
                                    <div class="card-body white-bg">
                                        <div class="card bg-transparent">
                                            <h3>PURCHASE DETAILS</h3>
                                            <div class="card-body">
                                                <div class="detail-title">MONTH: {{ request()->query('month') }}</div><br>
                                                <div class="detail-title">YEAR: {{ request()->query('year') }}</div>
                                                <div class="table-responsive px-3">
                                                    <table class="table table-hover table-striped" id="soldProductTable">
                                                        <thead class="color">
                                                            <tr>
                                                                <th>Product Category</th>
                                                                <th>Product Name</th>
                                                                <th>Quantity</th>
                                                                <th>Purchase Price</th>
                                                                <th>Total</th>
                                                                <th>Sale Price</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($purchasedProducts as $purchasedProduct)
                                                                <tr>
                                                                    <td>{{ $purchasedProduct->product->category->category_name }}
                                                                    </td>
                                                                    <td>{{ $purchasedProduct->product->product_name }}</td>
                                                                    <td>{{ $purchasedProduct->quantity }}</td>
                                                                    <td>{{ $purchasedProduct->product->purchase_price }}
                                                                    </td>
                                                                    <td>{{ $purchasedProduct->quantity * $purchasedProduct->product->price }}
                                                                    </td>
                                                                    <td>{{ $purchasedProduct->product->price }}</td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                    <div class="detail-title mt-5">TOTAL PURCHASE AMOUNT:</div>
                                                    <div class="detail-subtitle">
                                                        {{ $purchasedProducts->map(fn($value) => $value->quantity * $value->product->price)->sum() }}
                                                    </div>
                                                </div>
                                                <div class="float-right">
                                                    <a href="{{ route('admin.stock-inventory.index') }}" class="btn btn-outline-primary btn-sm mr-5">
                                                        <i class="fa fa-arrow-left menu-icon"></i>
                                                        <span class="menu-title">Back</span>
                                                    </a>
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
