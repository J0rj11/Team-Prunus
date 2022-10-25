    <div class="sidebar-fixed main-panel p-3">
        <div class="contentWrapper">
            <div class="row py-3">
                <h4>RESERVATION FORM</h4>
            </div>
            <div class="row my-1">
                <div class="col-12">

                    <div class="card-body white-bg p-4">
                        <h4 class="pb-3">Perdonal Information Form</h4>
                        <form class="px-5 pb-3" action="" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">First Name</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" name="first_name"
                                                value="{{ auth()->user()->first_name }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Payment Method</label>
                                        <div class="col-sm-6">
                                            <select class="form-control form-control-sm" wire:model="paymentMethod">
                                                <option
                                                    value="{{ \App\Models\Transaction::$TRANSACTION_PAYMENT_CASH }}">
                                                    Cash</option>
                                                <option
                                                    value="{{ \App\Models\Transaction::$TRANSACTION_PAYMENT_CREDIT }}">
                                                    Credit</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Last Name</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" name="last_name"
                                                value="{{ auth()->user()->last_name }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Date of Delivery</label>
                                        <div class="col-sm-6">
                                            <input type="date"  class="form-control" name="date"
                                                wire:model="dateOfDelivery">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Address</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="address"
                                                value="{{ auth()->user()->address }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="row my-1">
                        <div class="col-9">
                            <div class="card white-bg">
                                <div class="card-body">

                                    <div class="col-md-12">
                                        <div class="card-body bg-transparent">
                                            <h4>ITEM INFORMATION</h4>
                                            <div class="form-group row center">
                                                <div class="col">
                                                    <label>Category</label>
                                                    <select class="form-control form-control-sm"
                                                        wire:model="selectedCategory">
                                                        @foreach ($categories as $category)
                                                            <option value="{{ $category->id }}">
                                                                {{ $category->category_name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col">
                                                    <label>Item Name</label>
                                                    <select class="form-control form-control-sm"
                                                        wire:model="selectedProduct">
                                                        @foreach ($products as $product)
                                                            <option value="{{ $product->id }}">
                                                                {{ $product->product_name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col">
                                                    <label>Quantity</label>
                                                    <div id="the-basics">
                                                        <input class="form-control" type="number"
                                                            wire:model="productQuantity">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <label>Price</label>
                                                    <div>
                                                        <input class="form-control" type="text"
                                                            wire:model="productPrice" readonly>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <label>Action</label>
                                                    <div>
                                                        <button class="btn btn-primary btn-sm"
                                                            wire:click="confirmProduct">Add</button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card-body white-bg p-4">
                                <label>Total</label>
                                <div class="p-2 pb-2 col-sm-12">
                                    <input class="form-control" type="text"
                                        value="{{ collect($confirmedProducts)->sum('price') }}" readonly>
                                </div>

                                <!-- <label>Payment Method</label>
                                                <div class="p-2 col-sm-12">
                                                    <select class="form-control form-control-sm">
                                                      <option>Cash</option>
                                                      <option>Credit</option>
                                                    </select>
                                                </div> -->

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-9">
                            <div class="card-body white-bg p-4">
                                <h4>Order Details</h4>
                                <div class="table-responsive mt-3">
                                    <table class="table table-hover table-striped">
                                        <tbody>
                                            <thead class="color">
                                                <tr>
                                                    <th>Product Name</th>
                                                    <th>Category</th>
                                                    <th>Quantity</th>
                                                    <th>Amount</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            @foreach ($confirmedProducts as $confirmedProduct)
                                                <tr>
                                                    <td>{{ $confirmedProduct['category']['category_name'] ?? '' }}
                                                    </td>
                                                    <td>{{ $confirmedProduct['product']['product_name'] ?? '' }}
                                                    </td>
                                                    <td>{{ $confirmedProduct['quantity'] }}
                                                    </td>
                                                    <td>₱ {{ $confirmedProduct['price'] }}
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-danger btn-rounded btn-icon-sm"
                                                            wire:click="removeProduct('{{ $loop->index }}')">
                                                            <i class='fa-solid fa-xmark'></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            {{-- <tr>
                                                <td>Pipe</td>
                                                <td>PVC Pipe #2</td>
                                                <td>55</td>
                                                <td>₱ 250.00</td>
                                                <td>
                                                    <button class="btn btn-danger btn-rounded btn-icon-sm">
                                                        <i class='fa-solid fa-xmark'></i>
                                                    </button>
                                                </td>
                                            </tr> --}}
                                        </tbody>
                                    </table>
                                </div>
                                <div class="mt-5 center">
                                    <button type="submit" class="btn btn-outline-primary btn-md">Cancel</button>
                                    <button type="submit" class="btn btn-primary btn-md"
                                        wire:click="save">Next</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
