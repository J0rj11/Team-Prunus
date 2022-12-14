@extends('layouts.cashier')

@section('content')
    <div class="main-panel">
        <div class="contentWrapper">
            <div class="row py-2">
                <h4>DELVIVERY INDEX</h4>
                <p class="pl-2">List Delivery</p>
            </div>
            <div class="col-12 grid-margin ">
                <div class="row">
                    <div class="csswrapper">
                        <div class="csstabs">
                            <div class="csstab">
                                <input type="radio" name="css-tabs" id="tab-1" checked class="csstab-switch">
                                <label for="tab-1" class="csstab-label">List Delivery</label>
                                <div class="csstab-content">
                                    <div class="col-m-12 grid-margin stretch-card">
                                        <div class="card white-bg">
                                            <div class="py-3 pl-4">Delivery Details
                                                <div class="float-right">
                                                    <a type="button" class="btn btn-outline-primary btn-sm mr-5"
                                                        href="{{ route('delivery.index') }}">
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
                                                                <th>Date</th>
                                                                <th>Customer Name</th>
                                                                <th>Address</th>
                                                                <th>Contact No.</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>{{ $delivery->created_at }}</td>
                                                                <td>{{ $delivery->transaction->transaction_name }}</td>
                                                                <td>{{ $delivery->transaction->address }}</td>
                                                                <td>{{ $delivery->transaction->contact_number }}</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card pt-3 white-bg">
                                        <div class="card-body bg-transparent">
                                            <form class="ml-3" action="{{ route('delivery.update', $delivery) }}"
                                                method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="form-inline mb-2">
                                                    <div class="col-md-12">
                                                        <div class="row-2">

                                                            <label class="mr-4">Driver Name </label>
                                                            <select class="form-control col-sm-3" name="driver_name">
                                                                <option value="Alex Ventura" @selected(old('driver_name') == $delivery->driver_name || $delivery->driver_name == 'Alex Ventura')>
                                                                    Alex Ventura</option>
                                                                <option value="Jeron Tandaan" @selected(old('driver_name') == $delivery->driver_name || $delivery->driver_name == 'Jeron Tandaan')>
                                                                    Jeron Tandaan</option>
                                                            </select>

                                                            <label class="ml-6 mr-4">Truck #</label>
                                                            <select class="form-control col-sm-3" name="truck_number">
                                                                <option value="Green Truck" @selected(old('truck_number') == $delivery->truck_number || $delivery->truck_number == 'Green Truck')>
                                                                    Green Truck</option>
                                                                <option value="Red Truck" @selected(old('truck_number') == $delivery->truck_number || $delivery->truck_number == 'Red Truck')>
                                                                    Red Truck</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-inline">
                                                    <label class="mr-2 pl-3">Item Purchased</label>
                                                    <div class="table-responsive w-83">
                                                        <table class="table table-bordered mb-3">
                                                            <thead>
                                                                <tr>
                                                                    <th>Quantity</th>
                                                                    <th>Product Name</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($delivery->transaction->purchases as $purchasedProduct)
                                                                    <tr>
                                                                        <td>{{ $purchasedProduct->quantity }}</td>
                                                                        <td>{{ $purchasedProduct->product->product_name }}
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="form-inline">
                                                    <label class="mr-2 pl-3">Delivery Status</label>
                                                    <select class="form-control col-sm-3" name="status">
                                                        <option value="{{ \App\Models\Delivery::$DELIVERY_STATUS_IDLE }}"
                                                            {{ $delivery->status == 0 ? 'selected' : null }}>
                                                            IDLE</option>
                                                        <option
                                                            value="{{ \App\Models\Delivery::$DELIVERY_STATUS_COMPLETED }}"
                                                            {{ $delivery->status == 1 ? 'selected' : null }}>
                                                            COMPLETED</option>
                                                    </select>
                                                </div>
                                                <center class="mt-5 mb-5">
                                                    <a type="button" class="btn btn-outline-primary btn-md mr-5"
                                                        href="{{ route('delivery.index') }}">Cancel</a>
                                                    <button type="submit" class="btn btn-primary btn-md">Save</button>
                                                </center>
                                            </form>
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
