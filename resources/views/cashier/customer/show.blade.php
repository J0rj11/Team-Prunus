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
                                <label for="tab-1" class="csstab-label">List Customer</label>
                                <div class="csstab-content">
                                    <div class="col-m-12 grid-margin stretch-card">
                                        <div class="card white-bg">
                                            <div class="py-3 pl-4">CO1 Details
                                                <div class="float-right">
                                                    <a href="{{ route('customer.index') }}"
                                                        class="btn btn-outline-primary btn-sm mr-5">
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
                                                                <th>Address</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>{{ $customer->id }}</td>
                                                                <td>{{ $customer->first_name . ' ' . $customer->last_name }}
                                                                </td>
                                                                <td>{{ $customer->addres ?? 'No Address' }}</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                            <h4 class="h4">TRANSACTIONS</h4>
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
                                                                <th>Date</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($customer->reservations as $reservation)
                                                                @foreach ($reservation->reservationItems as $reservationItem)
                                                                    <tr>
                                                                        <td>{{ $reservationItem->product->product_name }}
                                                                        </td>
                                                                        <td>{{ $reservationItem->product->category->category_name }}
                                                                        </td>
                                                                        <td>{{ $reservationItem->quantity }}</td>
                                                                        <td>₱
                                                                            {{ number_format($reservationItem->product->price, 2) }}
                                                                        </td>
                                                                        <td>₱
                                                                            {{ number_format($reservationItem->price, 2) }}
                                                                        </td>
                                                                        <td>{{ $reservationItem->created_at->format('d M Y') }}
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                            @endforeach
                                                            <tr class="font-weight-bolder color">
                                                                <td>Total</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>₱ 1500</td>
                                                                <td></td>
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
