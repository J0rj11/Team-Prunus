@extends('layouts.admin')

@section('content')
<div class="main-panel">
  <div class="contentWrapper">
    <div class="row py-2">
      <h4>RESERVATION INDEX</h4>
      <p class="pl-2">Reservation Detail</p> 
    </div>
    <div class="col-12 grid-margin ">
      <div class="row">
        <div class="csswrapper">
          <div class="csstabs">
            <div class="csstab">
              <input type="radio" name="css-tabs" id="tab-1" checked class="csstab-switch">
              <label for="tab-1" class="csstab-label">Reservation Detail</label>
              <div class="csstab-content">
                <div class="col-m-12 grid-margin stretch-card">
                  <div class="card white-bg">
                    <div class="pt-3 pl-4">
                        <div class="detail-title">RESERVATION DETAIL</div>
                        <div class="detail-subtitle">CODE: C01</div>

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
                    
                    <div class="card-body">
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
                      <div class="back">
                        <a type="button" class="btn btn-dark btn-md mr-2" href="">
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

