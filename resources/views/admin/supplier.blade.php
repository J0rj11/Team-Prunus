@extends('layouts.admin')

@section('content')
<div class="sidebar-fixed main-panel">
  <div class="contentWrapper">
    <div class="row py-2">
      <h4>SUPPLIER FORM</h4>
        <p class="pl-2">Add Supplier</p> 
    </div>
    <div class="col-12 grid-margin ">
      <div class="row">
        <div class="csswrapper">
          <div class="csstabs">
            <div class="csstab">
              <input type="radio" name="css-tabs" id="tab-1" checked class="csstab-switch">
              <label for="tab-1" class="csstab-label">Add Supplier</label>
              <div class="csstab-content">
   
                  <div class="card-body white-bg">
                    <form class="ml-3 py-4">
                      <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Supplier Code</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control">
                                </div>
                            </div>
                            </div>

                            <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Contact</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control">
                                </div>
                            </div>
                            </div>

                            <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Supplier Name</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control">
                                </div>
                            </div>
                            </div>                      
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Address</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control">
                                </div>
                            </div>
                            </div>
                        </div>
                      <center class="mt-5 mb-2">
                        <button type="button" class="btn btn-outline-primary btn-md mr-5">Cancel</button>
                        <button type="submit" class="btn btn-primary btn-md">Save</button>
                      </center>
                    </form>
                  </div>
              </div>
            </div>
            <div class="csstab">
              <input type="radio" name="css-tabs" id="tab-2" class="csstab-switch">
              <label for="tab-2" class="csstab-label">List Supplier</label>
              <div class="csstab-content">
                  <div class="card-body white-bg">
                    <form class="form-group row px-1 pl-5">
                      <div class="col">
                        <label class="mb-2">Search by</label>
                        <select class="form-control">
                          <option></option>
                          <option></option>
                          <option></option>
                          <option></option>
                        </select>
                      </div>
                      <div class="col">
                        <label class="mb-2">Value</label>
                        <input class="typeahead" type="text" placeholder="">
                      </div>
                      <div class="col pt-4-5">
                        <button type="submit" class="btn btn-primary mb-2">Search</button>
                      </div>
                    </form>
                    <div class="card-body bg-transparent">
                      <div class="table-responsive">
                        <table class="table table-hover table-striped">
                          <thead class="color">
                            <tr>
                              <th>Code</th>
                              <th>Supplier Name</th>
                              <th>Contact</th>
                              <th>Address</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>S01</td>
                              <td> HDPE Pipe</td>
                              <td>(02) 8251 1029</td>
                              <td>35th Floor, San Juan, 1100 Metro Manila</td>
                              <td>
                                <label class="btn btn-secondary btn-sm">View</label>
                                <label class="btn btn-dark btn-sm">Delete</label>
                              </td>
                            </tr>
                            <tr>
                              <td>S02</td>
                              <td> HDPE Pipe</td>
                              <td>(02) 8251 1029</td>
                              <td>35th Floor, San Juan, 1100 Metro Manila</td>
                              <td>
                                <label class="btn btn-secondary btn-sm">View</label>
                                <label class="btn btn-dark btn-sm">Delete</label>
                              </td>
                            </tr>
                            <tr>
                              <td>S03</td>
                              <td> HDPE Pipe</td>
                              <td>(02) 8251 1029</td>
                              <td>35th Floor, San Juan, 1100 Metro Manila</td>
                              <td>
                                <label class="btn btn-secondary btn-sm">View</label>
                                <label class="btn btn-dark btn-sm">Delete</label>
                              </td>
                            </tr>
                            <tr>
                              <td>S04</td>
                              <td> HDPE Pipe</td>
                              <td>(02) 8251 1029</td>
                              <td>35th Floor, San Juan, 1100 Metro Manila</td>
                              <td>
                                <label class="btn btn-secondary btn-sm">View</label>
                                <label class="btn btn-dark btn-sm">Delete</label>
                              </td>
                            </tr>
                            <tr>
                              <td>S05</td>
                              <td> HDPE Pipe</td>
                              <td>(02) 8251 1029</td>
                              <td>35th Floor, San Juan, 1100 Metro Manila</td>
                              <td>
                                <label class="btn btn-secondary btn-sm">View</label>
                                <label class="btn btn-dark btn-sm">Delete</label>
                              </td>
                            </tr>
                            <tr>
                              <td>S06</td>
                              <td> HDPE Pipe</td>
                              <td>(02) 8251 1029</td>
                              <td>35th Floor, San Juan, 1100 Metro Manila</td>
                              <td>
                                <label class="btn btn-secondary btn-sm">View</label>
                                <label class="btn btn-dark btn-sm">Delete</label>
                              </td>
                            </tr>
                            <tr>
                              <td>S07</td>
                              <td> HDPE Pipe</td>
                              <td>(02) 8251 1029</td>
                              <td>35th Floor, San Juan, 1100 Metro Manila</td>
                              <td>
                                <label class="btn btn-secondary btn-sm">View</label>
                                <label class="btn btn-dark btn-sm">Delete</label>
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

@endsection

