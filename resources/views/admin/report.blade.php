@extends('layouts.admin')

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
                            <tr> 
                              <td>05/22/2022 </td>
                              <td>A1</td>
                              <td>PVC Pipe #2</td>
                              <td>55</td>
                              <td> ₱ 250.00 </td>
                            </tr>
                            <tr> 
                              <td>05/22/2022 </td>
                              <td>A1</td>
                              <td>PVC Pipe #2</td>
                              <td>55</td>
                              <td> ₱ 250.00 </td>
                            </tr>
                            <tr> 
                              <td>05/22/2022 </td>
                              <td>A1</td>
                              <td>PVC Pipe #2</td>
                              <td>55</td>
                              <td> ₱ 250.00 </td>
                            </tr>
                            <tr> 
                              <td>05/22/2022 </td>
                              <td>A1</td>
                              <td>PVC Pipe #2</td>
                              <td>55</td>
                              <td> ₱ 250.00 </td>
                            </tr>
                            <tr> 
                              <td>05/22/2022 </td>
                              <td>A1</td>
                              <td>PVC Pipe #2</td>
                              <td>55</td>
                              <td> ₱ 250.00 </td>
                            </tr>                            
                          </tbody>
                        </table>
                        <!-- <div class="float-right px-3 py-3">
                          <button type="submit" class="btn btn-secondary btn-md">Submit Report</button>
                        </div> -->
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
                            <tr> 
                              <td>05/22/2022</td>
                              <td>11:25:05 AM</td>
                              <td>#1R</td>
                              <td>Juan Dela Cruz</td>
                              <td>5 cubics sand</td>
                              <td>₱ 250.00</td>
                            </tr>
                            <tr> 
                              <td>05/22/2022</td>
                              <td>11:45:16 AM</td>
                              <td>#2G</td>
                              <td>Juan Dela Cruz</td>
                              <td>Plywood</td>
                              <td>₱ 250.00</td>
                            </tr>
                            <tr> 
                              <td>05/22/2022</td>
                              <td>01:07:10 PM</td>
                              <td>#2G</td>
                              <td>Juan Dela Cruz</td>
                              <td>5 cubics gravel</td>
                              <td>₱ 250.00</td>
                            </tr>
                            <tr> 
                              <td>05/22/2022</td>
                              <td>02:35:00 PM</td>
                              <td>#1R</td>
                              <td>Juan Dela Cruz</td>
                              <td>Plywood</td>
                              <td>₱ 250.00</td>
                            </tr>
                            <tr> 
                              <td>05/22/2022</td>
                              <td>04:15:20 PM</td>
                              <td>#2G</td>
                              <td>Juan Dela Cruz</td>
                              <td>PVC Pipe</td>
                              <td>₱ 250.00</td>
                            </tr>
                            
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>    
              </div>
            </div>

            <div class="csstab">
              <input type="radio" name="css-tabs" id="tab-3" class="csstab-switch">
              <label for="tab-3" class="csstab-label">Add Expenses</label>
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


            <div class="csstab">
              <input type="radio" name="css-tabs" id="tab-4" class="csstab-switch">
              <label for="tab-4" class="csstab-label">Expenses</label>
              <div class="csstab-content">
                <div class="card-body white-bg">
                  <h3>EXPENSE REPORT</h3>
                    <div class="row pt-2 px-5">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label ">Date</label>
                                <div class="col-sm-8">
                                    <input name="" value="" type="date" class="form-control form-control-sm">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body bg-transparent">
                      <div class="table-responsive">
                        <table class="table table-hover table-striped">
                          <thead class="color">
                            <tr>
                              <th>Date</th>
                              <th>Expense Account</th>
                              <th>Amount</th>
                              <th>Notes</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr> 
                              <td>05/22/2022</td>
                              <td>Gas</td>
                              <td>₱ 500.00</td>
                              <td>Truck #2G</td>
                            </tr>
                            <tr> 
                              <td>05/22/2022</td>
                              <td>Payroll</td>
                              <td>₱ 750.00</td>
                              <td>Salary 5 worker</td>
                            </tr>
                            <tr> 
                              <td>05/22/2022</td>
                              <td>Car Repair</td>
                              <td>₱ 100.00</td>
                              <td>Truck #1R</td>
                            </tr>
                          </tbody>
                        </table>
                        <div class="detail-title pt-3">Total:</div> <span class="detail-subtitle">₱ 1,350.00</span>
                        <!-- <div class="float-right px-3 py-3">
                          <button type="submit" class="btn btn-secondary btn-md">Submit Report</button>
                        </div> -->
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

