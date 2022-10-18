@extends('layouts.cashier')

@section('content')
    <div class="main-panel">
        <div class="contentWrapper">
            <div class="row py-2">
                <h4>RESERVATION INDEX</h4>
            </div>
            <div class="col-12 grid-margin ">
                <div class="row">
                    <div class="csswrapper">
                        <div class="csstabs">
                            <div class="csstab">
                                <input type="radio" name="css-tabs" id="tab-1" checked class="csstab-switch">
                                <label for="tab-1" class="csstab-label">Reservations</label>
                                <div class="csstab-content">
                                    <div class="col-m-12 grid-margin stretch-card">
                                        <div class="card white-bg">
                                            <div class="pt-3 pl-4">
                                                <div class="detail-title">RESERVATION DETAIL</div>
                                                <h4 class="font-weight-normal">Code: {{ $reservation->id }}</h4>

                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="customer-info">
                                                                <p class="font-weight-bold">NAME: </p>
                                                                <p class="text-uppercase">
                                                                    {{ $reservation->user->first_name . ' ' . $reservation->user->last_name }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="customer-info">
                                                                <p class="font-weight-bold">ADDRESS: </p>
                                                                <p class="text-uppercase">{{ $reservation->user->address }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="customer-info">
                                                                <p class="font-weight-bold">CONTACT #: </p>
                                                                <p>{{ $reservation->user->contact_number }}</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="customer-info">
                                                                <p class="font-weight-bold">DELIVERY DATE: </p>
                                                                <p>{{ $reservation->date_of_delivery }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="p-3">
                                                <div class="detail-subtitle">List of Items</div>
                                                <div class="table-responsive">
                                                    <table class="table table-hover table-striped mb-4">
                                                        <thead class="color">
                                                            <tr>
                                                                <th>Product Name</th>
                                                                <th>Quantity</th>
                                                                <th>Amount</th>
                                                                <th>Note</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($reservation->purchases as $purchasesdProduct)
                                                                <tr>
                                                                    <td>{{ $purchasesdProduct->product->product_name }}</td>
                                                                    <td>{{ $purchasesdProduct->quantity }}</td>
                                                                    <td>₱ {{ $purchasesdProduct->quantity * $purchasesdProduct->product->price }}</td>
                                                                    <td>No Notes Yet</td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>

                                                <form class="px-3" method="POST"
                                                    action="{{ route('reservation.update', $reservation) }}">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="form-group row">

                                                        <div class="col-md-7">
                                                            <div class="form-group row">
                                                                <label class="col-sm-4 col-form-label">Total Amount to Pay
                                                                    :</label>
                                                                <div class="col-sm-5">
                                                                    <input class="form-control form-control-sm"
                                                                        type="text" readonly
                                                                        value="{{ $reservation->reservationItems->sum('price') }}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="row center">
                                                        <div class="col">
                                                            <label>Payment Amount</label>
                                                            <input class="form-control" type="text"
                                                                value="{{ old('payment_amount', $reservation->payment_amount) }}"
                                                                name="payment_amount">
                                                        </div>
                                                        <div class="col">
                                                            <label>Payment Type</label>
                                                            <select class="form-control form-control-sm" id="payment_type"
                                                                name="payment_type">
                                                                <option
                                                                    value="{{ \App\Models\Reservation::$RESERVATION_PAYMENT_TYPE_FULL }}"
                                                                    @selected(old('payment_type') == $reservation->payment_type || $reservation->payment_type == 0)>
                                                                    Full Payment</option>
                                                                <option
                                                                    value="{{ \App\Models\Reservation::$RESERVATION_PAYMENT_TYPE_PARTIAL }}"
                                                                    @selected(old('payment_type') == $reservation->payment_type || $reservation->payment_type == 1)>
                                                                    Partial Payment</option>
                                                            </select>
                                                        </div>
                                                        <div class="col">
                                                            <label>Date</label>
                                                            <div>
                                                                <input class="form-control" type="text"
                                                                    value="{{ now() }}" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <label>Due Date</label>
                                                            <div>
                                                                <input class="form-control" type="date" name="due_date",
                                                                    id="due_date"
                                                                    value="{{ old('due_date', $reservation->due_date) }}">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="pt-4 center mb-4">
                                                        <button type="button" class="btn btn-dark btn-md">Cancel</button>
                                                        <button type="submit" class="btn btn-primary btn-md">Save</button>
                                                    </div>
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
    </div>
@endsection


@push('scripts')
    <script>
        $(() => {
            $('#payment_type').on('change', function(e) {
                if (e.target.value == 0) {
                    $('#due_date').prop('disabled', true);
                    return;
                }
                $('#due_date').prop('disabled', false)
            })
        })
    </script>
@endpush
