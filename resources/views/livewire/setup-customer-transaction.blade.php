    <div class="main-panel">
        <div class="contentWrapper">
            <div class="row py-2">
                <h4>CUSTOMER TRANSACTION FORM</h4>
                <p class="pl-2">Add Transaction</p>
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
                                            <div class="pt-3 pl-4">
                                                <form class="px-3">

                                                    <div class="row mt-3">
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Customer
                                                                    Name</label>
                                                                <div class="col-sm-9">
                                                                    <input x-model="form.transaction_code"
                                                                        type="text" class="form-control"
                                                                        value="{{ $transaction->transaction_name }}"
                                                                        readonly>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="card-body">

                                                <div class="col-md-12 grid-margin stretch-card">
                                                    <div class="card-body bg-transparent">
                                                        <h4>ITEM INFORMATION</h4>
                                                        <div class="form-group row center">
                                                            <div class="col">
                                                                <label>Category</label>
                                                                <select class="form-control" id="categorySelect"
                                                                    wire:model="selectedCategory">
                                                                    @foreach ($categories as $category)
                                                                        <option value="{{ $category->id }}"
                                                                            @selected($category->id == $selectedCategory->id)>
                                                                            {{ $category->category_name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="col">
                                                                <label>Item Name</label>
                                                                <select class="form-control"
                                                                    wire:model="selectedProduct"
                                                                    id="exampleFormControlSelect2">
                                                                    @foreach ($products as $product)
                                                                        <option value="{{ $product->id }}">
                                                                            {{ $product->product_name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="col">
                                                                <label>Quantity</label>
                                                                <div id="the-basics">
                                                                    <input class="typeahead" type="number"
                                                                        wire:model="productQuantity">
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <label>Price</label>
                                                                <div id="bloodhound">
                                                                    <input class="typeahead" type="number"
                                                                        wire:model="productPrice" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <label>Action</label>
                                                                <div>
                                                                    <label class="btn btn-dark btn-sm"
                                                                        wire:click="confirmProduct">Confirm</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="table-responsive mt-3">
                                                    <table class="table table-hover table-striped">
                                                        <tbody>
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
                                                                        <button
                                                                            class="btn btn-danger btn-rounded btn-icon-sm"
                                                                            wire:click="removeProduct('{{ $loop->index }}')">
                                                                            <i class='fa-solid fa-xmark'></i>
                                                                        </button>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                    <div class="detail-title pt-3">Total:</div> <span
                                                        class="detail-subtitle">₱
                                                        {{ number_format($selectedProductTotal, 2) }}</span>

                                                </div>
                                                <div class="pt-4 center">
                                                    <button type="submit"
                                                        class="btn btn-outline-primary btn-md">Cancel</button>
                                                    <button type="submit" class="btn btn-primary btn-md"
                                                        wire:click="save">Submit</button>
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
