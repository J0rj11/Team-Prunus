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
                                                <div class="detail-title">MONTH:</div><br>
                                                <div class="detail-title">YEAR:</div>
                                                <div class="table-responsive px-3">
                                                <table class="table table-hover table-striped"
                                                            id="soldProductTable">
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
                                                               <tr>
                                                                    <td>Pipes</td>                                                                
                                                                    <td>PVC Pipe</td>                                                                
                                                                    <td>50</td>                                                                
                                                                    <td>92.81</td>                                                                
                                                                    <td>4640.5</td>                                                                
                                                                    <td>94</td>                                                                
                                                               </tr>
                                                               <tr>
                                                                    <td>Sealant</td>                                                                
                                                                    <td>Vulcaseal 1/2 L</td>                                                                
                                                                    <td>10</td>                                                                
                                                                    <td>322</td>                                                                
                                                                    <td>3220</td>                                                                
                                                                    <td>324</td>                                                                 
                                                               </tr>
                                                            </tbody>
                                                        </table>
                                                        <div class="detail-title mt-5">TOTAL PURCHASE AMOUNT:</div>
                                                        <div class="detail-subtitle">7,860.00</div>
                                                </div>
                                                <div class="float-right">
                                                    <a href=""
                                                        class="btn btn-outline-primary btn-sm mr-5">
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
