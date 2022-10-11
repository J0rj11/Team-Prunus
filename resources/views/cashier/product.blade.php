@extends('layouts.cashier')

@section('content')
<div class="sidebar-fixed main-panel">
  <div class="contentWrapper">
    <div class="row py-2">
      <h4>REPORTS</h4>
      <p class="pl-2">Sold Item</p> 
    </div>
    <div class="col-12 grid-margin ">
      <div class="row">
        <div class="csswrapper">
          <div class="csstabs">
            <div class="csstab">
              <input type="radio" name="css-tabs" id="tab-1" checked class="csstab-switch">
              <label for="tab-1" class="csstab-label">Sold Item</label>
              <div class="csstab-content">
   
                <div class="card white-bg">
                  <div class="card-body">
                    <form class="form-group row py-4 pl-5">
                    <div class="col">
                      <label>Search by</label>
                      <select class="form-control">
                        <option></option>
                        <option></option>
                        <option></option>
                        <option></option>
                      </select>
                    </div>
                    <div class="col">
                      <label>Value</label>
                      <input class="typeahead" type="text" placeholder="">
                    </div>
                    <div class="col pt-4">
                      <button type="submit" class="btn btn-primary mb-2">Search</button>
                    </div>
                  </form>

                  <div class="card-body bg-transparent">
                    <form>
                      <div class="table-responsive">
                        <table class="table table-hover table-striped">
                          <thead class="color">
                            <tr>
                              <th>Date</th>
                              <th>Code</th>
                              <th>Product Name</th>
                              <th>Quantity</th>
                              <th>Total</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr> 
                              <td>05/22/2022 </td>
                              <td>A1</td>
                              <td>PVC Pipe #2</td>
                              <td>55</td>
                              <td> ₱ 250.00 </td>
                            </tr>                        
                          </tbody>
                        </table>
                        <div class="float-right px-3 py-3 mt-2">
                          <button type="submit" class="btn btn-secondary btn-md">Submit Report</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="csstab">
              <input type="radio" name="css-tabs" id="tab-2" class="csstab-switch">
              <label for="tab-2" class="csstab-label">Deliveries</label>
              <div class="csstab-content">
                <div class="card-body white-bg">
                  <form class="form-group row px-1 pl-5">
                    <div class="col">
                      <label>Search by</label>
                      <select class="form-control">
                        <option></option>
                        <option></option>
                        <option></option>
                        <option></option>
                      </select>
                    </div>
                    <div class="col">
                      <label>Value</label>
                      <input class="typeahead" type="text" placeholder="">
                    </div>
                    <div class="col pt-4">
                      <button type="submit" class="btn btn-primary mb-2">Search</button>
                    </div>
                  </form>

                  <div class="card bg-transparent">
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-hover table-striped">
                          <thead class="color">
                            <tr>
                              <th>Date</th>
                              <th>Time</th>
                              <th>Truck #</th>
                              <th>Client's Name</th>
                              <th>Items</th>
                              <th>Amount</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr> 
                              <td>05/22/2022</td>
                              <td>10:35:16 AM</td>
                              <td>#1R</td>
                              <td>Juan Dela Cruz</td>
                              <td>50 Hollowblocks </td>
                              <td>₱ 250.00</td>
                            </tr>
                          </tbody>
                        </table>
                        <div class="float-right px-3 py-3 mt-2">
                          <button type="submit" class="btn btn-secondary btn-md">Submit Report</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>    
              </div>
            </div>

            <div class="csstab">
              <input type="radio" name="css-tabs" id="tab-3" class="csstab-switch">
              <label for="tab-3" class="csstab-label">Expenses</label>
              <div class="csstab-content">
                <div class="card-body white-bg">
                  <form class="ml-5 py-4">
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Date</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" >
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Expense Amount</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" >
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Amount</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" >
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Notes</label>
                      <div class="col-sm-9">
                        <textarea class="form-control" ></textarea>
                      </div>
                    </div>

                    <div class="pt-4 center">
                      <button  type="submit" class="btn btn-primary">Add Expenses</button>
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

