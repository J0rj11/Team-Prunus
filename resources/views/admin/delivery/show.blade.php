@extends('layouts.admin')

@section('content')
    <div class="main-panel">
        <div class="contentWrapper">
            <div class="row py-2">
                <h4>DELIVERY INDEX</h4>
                <p class="pl-2">Delivery List</p>
            </div>
            <div class="col-12 grid-margin ">
                <div class="row">
                    <div class="csswrapper">
                        <div class="csstabs">
                            <div class="csstab">
                                <input type="radio" name="css-tabs" id="tab-1" checked class="csstab-switch">
                                <label for="tab-1" class="csstab-label">Delivery List</label>
                                <div class="csstab-content">
                                    <div class="col-m-12 grid-margin stretch-card">
                                        <div class="card white-bg pl-3">
                                            <div class="pt-3 pl-2 detail-subtitle"> Delivery Details
                                                <div class="float-right">
                                                    <a href="{{ route('admin.delivery.index') }}"
                                                        class="btn btn-outline-primary btn-sm mr-5">
                                                        <i class="fa fa-arrow-left menu-icon"></i>
                                                        <span class="menu-title">Back</span>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="customer-info">
                                                            <p class="font-weight-bold">NAME: </p>
                                                            <p class="text-uppercase">
                                                                {{ $delivery->transaction->transaction_name }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="customer-info">
                                                            <p class="font-weight-bold">ADDRESS: </p>
                                                            <p class="text-uppercase">{{ $delivery->transaction->address }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="customer-info">
                                                            <p class="font-weight-bold">CONTACT #: </p>
                                                            <p>{{ $delivery->transaction->contact_number }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="customer-info">
                                                            <p class="font-weight-bold">EMAIL ADDRESS: </p>
                                                            <p>{{ 'NoEmailAddr' }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="customer-info">
                                                            <p class="font-weight-bold">DELIVERY DATE: </p>
                                                            <p>05-23-2022</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card white-bg pl-3 pt-3">

                                        <div class="pl-2 detail-subtitle">List of Items</div>
                                        <div class="card-body bg-transparent">
                                            <div class="row px-2">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 col-form-label align-right">Driver
                                                            Name</label>
                                                        <div class="col-sm-8">
                                                            <input name="driver_name"
                                                                value="{{ old('driver_name', $delivery->driver_name) }}"
                                                                type="text" class="form-control form-control-sm">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 col-form-label align-right">Truck # sd</label>
                                                        <div class="col-sm-8">
                                                            <input name="truck_number"
                                                                value="{{ old('truck_number', $delivery->truck_number) }}"
                                                                type="text" class="form-control form-control-sm">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row px-2">
                                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label align-right inline">Item
                                                            Purchased</label>
                                                        <div class="col-sm-10">
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
                                                                        @foreach ($delivery->transaction->transactionItems as $transactionItem)
                                                                            <tr>
                                                                                <td>{{ $transactionItem->product->product_name }}
                                                                                </td>
                                                                                <td>{{ $transactionItem->product->category->category_name }}
                                                                                </td>
                                                                                <td>{{ $transactionItem->quantity }}</td>
                                                                                <td>₱
                                                                                    {{ $transactionItem->product->price }}
                                                                                </td>
                                                                                <td>₱ {{ $transactionItem->price }}</td>
                                                                                <td>{{ $transactionItem->created_at }}</td>
                                                                            </tr>
                                                                        @endforeach
                                                                        <tr class="font-weight-bolder color">
                                                                            <td>Total</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td>₱
                                                                                {{ $delivery->transaction->transactionItems->sum('price') }}
                                                                            </td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row pt-2 px-2">
                                                <div class="col-md-6">
                                                    <div class="form-inline">
                                                        <label class="mr-2 pl-3">Delivery Status</label>
                                                        <select class="form-control col-sm-3" name="status">
                                                            <option
                                                                value="{{ \App\Models\Delivery::$DELIVERY_STATUS_IDLE }}"
                                                                {{ $delivery->status == 0 ? 'selected' : null }}>
                                                                IDLE</option>
                                                            <option
                                                                value="{{ \App\Models\Delivery::$DELIVERY_STATUS_COMPLETED }}"
                                                                {{ $delivery->status == 1 ? 'selected' : null }}>
                                                                COMPLETED</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-5 pb-2 center">
                                                <button type="button" class="btn btn-dark btn-md mr-2">Decline</button>
                                                <button type="submit" class="btn btn-primary btn-md">Approve</button>
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
