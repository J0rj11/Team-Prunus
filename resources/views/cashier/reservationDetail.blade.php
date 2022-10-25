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
                        <h4 class="font-weight-normal">Code: C01</h4>

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
                                        <p class="font-weight-bold">DELIVERY DATE: </p>
                                        <p>05-23-2022</p>
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
                            <tr>
                              <td>PVC Pipe #2</td>
                              <td>5</td>
                              <td>₱ 250.00 </td>
                              <td>Pickup</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>

                      <form class="px-3" method="POST" action="">
                                                    <div class="form-group row">

                                                        <div class="col-md-7">
                                                            <div class="form-group row">
                                                                <label class="col-sm-4 col-form-label">Total Amount to Pay :</label>
                                                                <div class="col-sm-5">
                                                                    <input class="form-control form-control-sm" type="text">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="row center">
                                                        <div class="col">
                                                            <label>Payment</label>
                                                            <input class="form-control" type="text">
                                                        </div>
                                                            <div class="col">
                                                            <label>Payment Method</label>
                                                            <select class="form-control form-control-sm" id="exampleFormControlSelect2">
                                                                <option>Full Payment</option>
                                                                <option>Partial Payment</option>
                                                            </select>
                                                        </div>
                                                        <div class="col">
                                                            <label>Date</label>
                                                            <div >
                                                                <input class="form-control" type="date">
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <label>Due Date</label>
                                                            <div >
                                                                <input class="form-control" type="date" >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                
                                            </div>
                                            <div class="pt-4 center mb-4">
                                                <button type="submit" class="btn btn-dark btn-md">Cancel</button>
                                                <button type="submit" class="btn btn-primary btn-md">Save</button>
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

