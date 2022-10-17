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
                                            <form class="pt-4 pl-5"
                                                action="{{ route('admin.stock-inventory.update', $stockInventory) }}"
                                                method="POST">
                                                @csrf
                                                @method('PUT')

                                                <div class="row pt-2 px-5">
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label ">Date</label>
                                                            <div class="col-sm-8">
                                                                <input name="purchased_date"
                                                                    value="{{ old('purchased_date', $stockInventory->purchased_date) }}"
                                                                    type="date" class="form-control form-control-sm">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body bg-transparent">
                                                    <div class="row">

                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="col-sm-4 col-form-label">Product
                                                                    Category</label>
                                                                <div class="col-sm-7">
                                                                    <select class="form-control form-control-sm"
                                                                        name="category_id">
                                                                        @foreach ($categories as $category)
                                                                            <option value="{{ $category->id }}"
                                                                                @selected(old('category_id') == $category->id || $stockInventory->category_id == $category->id)>
                                                                                {{ $category->category_name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="col-sm-4 col-form-label">Sale Price</label>
                                                                <div class="col-sm-7">
                                                                    <input type="number" class="form-control"
                                                                        value="{{ old('price', $stockInventory->price) }}"
                                                                        name="price">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="col-sm-4 col-form-label">Product Name</label>
                                                                <div class="col-sm-7">
                                                                    <input type="text" class="form-control"
                                                                        value="{{ old('product_name', $stockInventory->product_name) }}"
                                                                        name="product_name">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">

                                                            <div class="form-group row">
                                                                <label class="col-sm-4 col-form-label">Quantity</label>
                                                                <div class="col-sm-7">
                                                                    <input type="number" class="form-control"
                                                                        value="{{ old('quantity', $stockInventory->quantity) }}"
                                                                        id="quantity" name="quantity">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-4 col-form-label">Purchase
                                                                    Price</label>
                                                                <div class="col-sm-7">
                                                                    <input type="number" class="form-control"
                                                                        id="purchase_price" name="purchase_price"
                                                                        value="{{ old('purchase_price', $stockInventory->purchase_price) }}">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-4 col-form-label">Total Amount</label>
                                                                <div class="col-sm-7">
                                                                    <input type="number" class="form-control"
                                                                        value="{{ $stockInventory->quantity * $stockInventory->purchase_price }}"
                                                                        id="total_amount">
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="mt-5 pb-2 float-left">
                                                                    <a href="{{ route('admin.stock-inventory.index') }}"
                                                                        class="btn btn-primary btn-md">
                                                                        <i class="fa fa-arrow-left menu-icon"></i></a>

                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="mt-5 pb-2 float-right">
                                                                    <a href="{{ route('admin.stock-inventory.index') }}"
                                                                        class="btn btn-outline-primary btn-md mr-2">Cancel</a>
                                                                    <button type="submit"
                                                                        class="btn btn-primary btn-md">Confirm</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

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
@endsection


@push('scripts')
    <script>
        $(() => {
            $('#quantity').on('keyup change', function(e) {
                $('#total_amount').val(+e.target.value * +($('#purchase_price').val()))
            })

            $('#purchase_price').on('keyup change', function(e) {
                $('#total_amount').val(+e.target.value * $('#quantity').val())
            })
        })
    </script>
@endpush
