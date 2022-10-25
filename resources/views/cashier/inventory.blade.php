@extends('layouts.cashier')

@section('content')
    <div class="main-panel">
        <div class="contentWrapper">
            <div class="row py-2 pl-2">
                <h4>INVENTORY</h4>
            </div>
            <div class="col-12 grid-margin ">
                <div class="row">
                    <div class="csswrapper">
                        <div class="csstabs">
                            <div class="csstab">
                                <input type="radio" name="css-tabs" id="tab-1" checked class="csstab-switch">
                                <label for="tab-1" class="csstab-label">Inventory</label>
                                <div class="csstab-content">
                                    <div class="col-m-12 grid-margin stretch-card">
                                        <div class="card white-bg p-3">

                                            <div class="p-2">
                                                <div class="detail-title">CAPITAL: </div>
                                                <div class="detail-title float-right mr-5 pr-5">DATE:</div>
                                                <br>
                                                <div class="detail-title">TOTAL END OF DAY SALES:</div>
                                            </div>
                                        
                                            <div class="card-body bg-transparent">
                                                <div class="table-responsive">
                                                    <table class="table table-hover table-striped table-bordered mb-2">
                                                        <thead class="color ">
                                                            <tr class="vertical-align">
                                                                <th rowspan="0">Product ID</th>
                                                                <th rowspan="0">Product Name</th>
                                                                <th rowspan="0">Product Category</th>
                                                                <th colspan="3">PURCHASES</th>
                                                                <th colspan="3">SOLD PRODUCTS</th>
                                                                <th colspan="2">ENDING INVENTORY</th>
                                                            </tr>
                                                            <tr>
                                                                <th>Qty.</th>
                                                                <th>Purchase Price</th>
                                                                <th>Amount</th>
                                                                <th>Qty.</th>
                                                                <th>Sale Price</th>
                                                                <th>Total</th>
                                                                <th>Available Stock</th>
                                                                <th>Total</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($products as $product)
                                                                <tr>
                                                                    <td>{{ $product->id }}</td>
                                                                    <td>{{ $product->product_name }}</td>
                                                                    <td>{{ $product->category->category_name }}</td>
                                                                    <td>50</td>
                                                                    <td>92.26</td>
                                                                    <td>4,613</td>
                                                                    <td>{{ $product->sold_products_count }}</td>
                                                                    <td>{{ $product->purchase_price }}</td>
                                                                    <td>940</td>
                                                                    <td>40</td>
                                                                    <td>3,760</td>
                                                                </tr>
                                                                {{-- <tr>
                                                                    <td>P1203T</td>
                                                                    <td>PVC Pipe#1</td>
                                                                    <td>Pipe</td>
                                                                    <td>50</td>
                                                                    <td>92.26</td>
                                                                    <td>4,613</td>
                                                                    <td>10</td>
                                                                    <td>94</td>
                                                                    <td>940</td>
                                                                    <td>40</td>
                                                                    <td>3,760</td>
                                                                </tr> --}}
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                    <div class="detail-title pt-3">Total:</div> <span
                                                        class="detail-subtitle">₱ 1,350.00</span>
                                                    <div class="float-right px-3 py-3">
                                                        <button type="submit" class="btn btn-secondary btn-md">Submit
                                                            Report</button>
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
    </div>
@endsection
