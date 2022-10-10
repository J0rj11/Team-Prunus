@extends('layouts.admin')

@section('content')
<div class="main-panel">
  <div class="contentWrapper">
    <div class="row py-2">
      <h4>RESERVATION INDEX</h4>
      <p class="pl-2">Reservation List</p> 
    </div>

    <div class="col-12 grid-margin ">
      <div class="row">
        <div class="csswrapper">
          <div class="csstabs">
            <div class="csstab">
              <input type="radio" name="css-tabs" id="tab-1" checked class="csstab-switch">
              <label for="tab-1" class="csstab-label">Delivery List </label>
              <div class="csstab-content">
                <div class="col-m-12 grid-margin stretch-card">
                  <div class="card white-bg">
                    
                    <form class="form-group row py-4 px-1 pl-5">
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
                        <button type="submit" class="btn btn-primary mb-2">Submit</button>
                      </div>
                    </form>

                    <div class="card-body bg-transparent">
                      <div class="table-responsive">
                        <table class="table table-hover table-striped">
                          <thead class="color">
                            <tr>
                              <th>Date</th>
                              <th>Code</th>
                              <th>Client Name</th>                              
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>2022-08-15</td>
                              <td>09123456789</td>
                              <td>Juan Dela Cruz </td>
                              <td>
                                <a class="u" href="">View detail</a>
                                <label class="btn btn-secondary btn-sm ml-2">Approve</label>
                                <label class="btn btn-dark btn-sm">Decline</label>
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

