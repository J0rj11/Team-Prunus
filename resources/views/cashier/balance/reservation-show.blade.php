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
                                            <div class="py-3 pl-4">{{ $reservationBalance->id }}
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
                                                                <td>{{ $reservationBalance->id }}</td>
                                                                <td>{{ $reservationBalance->user->first_name . ' ' . $reservationBalance->user->last_name }}
                                                                </td>
                                                                <td>{{ $reservationBalance->reservation_items_count }}</td>
                                                                <td>₱ {{ $reservationBalance->reservation_items_sum_price }}
                                                                </td>

                                                                <td>{{ $reservationBalance->payment_type == 0 ? 'FULL' : 'PARTIAL' }}
                                                                </td>
                                                                <td>{{ $reservationBalance->due_date }}</td>
                                                                <td>{{ $reservationBalance->created_at }}</td>
                                                            </tr>
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <td class="font-weight-bolder color">Remaining Balance:</td>
                                                                <td>₱
                                                                    {{ number_format($reservationBalance->remaining_balance, 2) }}
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td><label class="btn btn-secondary btn-sm"
                                                                        onclick="document.getElementById('id01').style.display='block'">Add
                                                                        Payment</label></td>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>

                                                <div id="id01" class="alert-modal overflow-hidden"
                                                    style="display: none;">
                                                    <form class="alert-modal-content"
                                                        action="{{ route('reservation-balance.update', $reservationBalance) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="modal-container">
                                                            <div class="float-right mb-3">
                                                                <span
                                                                    onclick="document.getElementById('id01').style.display='none'"
                                                                    class="btn btn-danger btn-rounded btn-icon-sm"
                                                                    title="Close Modal">
                                                                    <i class='fa-solid fa-xmark'></i>
                                                                </span>
                                                            </div>
                                                            <div class="detail-title mt-4 ml-3"> Remaining Balance :</div>
                                                            <span class="pl-1 detail-subtitle">₱
                                                                {{ number_format($reservationBalance->remaining_balance, 2) }}</span>

                                                            <div class="p-2">
                                                                <div class="col-sm-12">
                                                                    <div class="row">
                                                                        <label class="col-sm-3">Date: </label>
                                                                        <div class="col-sm-9">
                                                                            <input type="text"
                                                                                class="form-control form-control-sm mb-2"
                                                                                value="{{ now()->format('d M Y') }}"
                                                                                readonly>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <label class="col-sm-3">Amount: </label>
                                                                        <div class="col-sm-9">
                                                                            <input type="text"
                                                                                class="form-control form-control-sm mb-2"
                                                                                name="amount">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <button type="submit" {{-- onclick="document.getElementById('id01').style.display='none'" --}}
                                                                    class="mt-3 btn btn-secondary btn-sm">Save</button>
                                                            </div>
                                                        </div>
                                                    </form>
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
                                                            @foreach ($reservationBalance->reservationItems as $reservationItem)
                                                                <tr>
                                                                    <td>{{ $reservationItem->product->product_name }}</td>
                                                                    <td>{{ $reservationItem->product->category->category_name }}
                                                                    </td>
                                                                    <td>{{ $reservationItem->quantity }}</td>
                                                                    <td>₱ {{ $reservationItem->product->price }}</td>
                                                                    <td>₱ {{ $reservationItem->price }}</td>
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
