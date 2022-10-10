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
                                                <a href="" class="btn btn-outline-primary btn-sm mr-5">
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
                                                            <p class="text-uppercase">Sheila Zuniga</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="customer-info">
                                                            <p class="font-weight-bold">ADDRESS: </p>
                                                            <p class="text-uppercase">#176, ZONE 2, TANDAAY, NABUA, CAM.SUR</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="customer-info">
                                                            <p class="font-weight-bold">CONTACT #: </p>
                                                            <p>09211801655</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="customer-info">
                                                            <p class="font-weight-bold">EMAIL ADDRESS: </p>
                                                            <p>shellazuniga02@gmail.com</p>
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
                                                        <label class="col-sm-4 col-form-label align-right">Driver Name</label>
                                                        <div class="col-sm-8">
                                                            <input name="" value="" type="text" class="form-control form-control-sm">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 col-form-label align-right">Truck #</label>
                                                        <div class="col-sm-8">
                                                            <input name="" value="" type="text" class="form-control form-control-sm">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="row px-2">
                                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label align-right inline">Item Purchased</label>
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
                                                                    <tr>
                                                                    <td>PVC Pipe #2</td>
                                                                    <td>Pipes</td>
                                                                    <td>2</td>
                                                                    <td>₱ 250.00</td>
                                                                    <td>₱ 500.00</td>
                                                                    <td>2022-07-26</td>
                                                                    </tr>
                                                                    <tr>
                                                                    <td>PVC Pipe #2</td>
                                                                    <td>Pipes</td>
                                                                    <td>2</td>
                                                                    <td>₱ 250.00</td>
                                                                    <td>₱ 500.00</td>
                                                                    <td>2022-07-26</td>
                                                                    </tr>
                                                                    <tr>
                                                                    <td>PVC Pipe #2</td>
                                                                    <td>Pipes</td>
                                                                    <td>2</td>
                                                                    <td>₱ 250.00</td>
                                                                    <td>₱ 500.00</td>
                                                                    <td>2022-07-26</td>
                                                                    </tr>
                                                                    <tr class="font-weight-bolder color">
                                                                    <td>Total</td>  
                                                                    <td></td>  
                                                                    <td></td>  
                                                                    <td></td>  
                                                                    <td>₱ 1500,00</td>
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
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 col-form-label align-right">Delivery Status</label>
                                                        <div class="col-sm-8">
                                                            <input name="" value="" type="text" class="form-control form-control-sm">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-5 pb-2 center">
                                                <button type="button"
                                                    class="btn btn-dark btn-md mr-2">Decline</button>
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
</div>

@endsection

