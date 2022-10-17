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
                                        <div class="row pt-2 px-5">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label ">Date</label>
                                                    <div class="col-sm-8">
                                                        <input name="" value="" type="date"
                                                            class="form-control form-control-sm">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <button class="btn btn-primary float-right">Add Product</button>
                                            </div>
                                        </div>
                                            <div class="card-body bg-transparent">
                                                <form>
                                                    <div class="table-responsive">
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
                                                                    <th>Action</th>
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
                                                                    <td>
                                                                        <button class="btn btn-primary btn-sm">Edit</button>
                                                                        <button class="btn btn-dark btn-sm">Delete</button>
                                                                    </td>                                                                
                                                               </tr>
                                                               <tr>
                                                                    <td>Sealant</td>                                                                
                                                                    <td>Vulcaseal 1/2 L</td>                                                                
                                                                    <td>10</td>                                                                
                                                                    <td>322</td>                                                                
                                                                    <td>3220</td>                                                                
                                                                    <td>324</td>                                                                
                                                                    <td>
                                                                        <button class="btn btn-primary btn-sm">Edit</button>
                                                                        <button class="btn btn-dark btn-sm">Delete</button>
                                                                    </td>                                                                
                                                               </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="csstab">
                                <input type="radio" name="css-tabs" id="tab-2" class="csstab-switch">
                                <label for="tab-2" class="csstab-label">Purchase Records</label>
                                <div class="csstab-content">
                                    <div class="card-body white-bg">
                                        <div class="card bg-transparent">
                                                <h3>MONTHLY PURCHASE RECORDS</h3>
                                            <div class="card-body">
                                                <div class="table-responsive px-3">
                                                    <table class="table table-hover table-striped" id="deliveryTable">
                                                        <thead class="color">
                                                            <tr>
                                                                <th>Month</th>
                                                                <th>Year</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>January</td>                                                                
                                                                <td>2022</td>                                                                
                                                                <td>
                                                                    <button class="btn btn-primary btn-sm">View</button>
                                                                    <button class="btn btn-dark btn-sm">Delete</button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>February</td>                                                                
                                                                <td>2022</td>                                                                
                                                                <td>
                                                                    <button class="btn btn-primary btn-sm">View</button>
                                                                    <button class="btn btn-dark btn-sm">Delete</button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>March</td>                                                                
                                                                <td>2022</td>                                                                
                                                                <td>
                                                                    <button class="btn btn-primary btn-sm">View</button>
                                                                    <button class="btn btn-dark btn-sm">Delete</button>
                                                                </td>
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
