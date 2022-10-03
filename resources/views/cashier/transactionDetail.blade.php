
@extends('layouts.cashier')

@section('content')
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
                      <div class="float-right">
                        <button type="button" class="btn btn-outline-primary btn-sm mr-5">
                          <i class="fa fa-arrow-left menu-icon"></i>
                          
                          <a href="/customer"><span class="menu-title">Back</span></a>
                        </button>
                      </div>
                    </div>
                    <div class="card-body">
                       <form class="px-3 py-3">

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Customer Name</label>
                            <div class="col-sm-9">
                              <input x-model="form.transaction_code" type="text" class="form-control">
                            </div>
                          </div>
                        </div>
                      </div>                    
                    </form>

                    <div class="card-body bg-transparent">
                      <h4>ITEM INFORMATION</h4>
                      <div class="table-responsive mt-2">
                        <table class="table table-hover table-striped">
                        <thead class="color">
                          <tr>
                            <th>Category</th>
                            <th>Item Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Pipes</td>
                            <td>PVC Pipe #2</td>
                            <td>2</td>
                            <td>₱ 250.00</td>
                            <td>
                              <label class="btn btn-dark btn-sm">Confirm</label>
                            </td>
                          </tr>
                          <tr>
                            <td>A2</td>
                            <td>PVC Pipe #2</td>
                            <td>55</td>
                            <td>₱ 250.00</td>
                            <td>
                              <button class="btn btn-danger btn-rounded btn-icon-sm">
                                <i class='fa-solid fa-xmark'></i>
                              </button>    
                            </td>
                          </tr>
                          <tr>
                            <td>A3</td>
                            <td>PVC Pipe #2</td>
                            <td>55</td>
                            <td>₱ 250.00</td>
                            <td>
                              <button class="btn btn-danger btn-rounded btn-icon-sm">
                                <i class='fa-solid fa-xmark'></i>
                              </button>    
                            </td>
                          </tr>
                          <tr>
                            <td>A4</td>
                            <td>PVC Pipe #2</td>
                            <td>55</td>
                            <td>₱ 250.00</td>
                            <td>
                              <button class="btn btn-danger btn-rounded btn-icon-sm">
                                <i class='fa-solid fa-xmark'></i>
                              </button>
                            </td>
                          </tr>
                          <tr class="font-weight-bolder">
                            <td>Total Price</td>
                            <td></td>
                            <td></td>
                            <td>₱ 1500.00</td>
                            <td></td>
                          </tr>                              
                        </tbody>
                      </table>
                    </div>
                    <div class="pt-4 center">                      
                      <button  type="submit" class="btn btn-outline-primary btn-md">Cancel edit</button>
                      <button type="submit" class="btn btn-primary btn-md">Submit</button>
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

