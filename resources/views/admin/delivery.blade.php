@extends('layouts.admin')

@section('content')
<div class="main-panel">
  <div class="contentWrapper">
    <div class="row py-2">
      <h4>DELIVERY INDEX</h4>
      <p class="pl-2">List Delivery</p> 
    </div>

    <div class="col-12 grid-margin ">
      <div class="row">
        <div class="csswrapper">
          <div class="csstabs">
            <div class="csstab">
              <input type="radio" name="css-tabs" id="tab-1" checked class="csstab-switch">
              <label for="tab-1" class="csstab-label">List Delivery</label>
              <div class="csstab-content">
                <div class="col-m-12 grid-margin stretch-card">
                  <div class="card white-bg">
                    <div class="py-3 pl-4 detail-subtitle">Delivery Schedules</div>

                    <div class="card-body bg-transparent">
                      <div class="table-responsive">
                        <table class="table table-hover table-striped">
                          <thead class="color">
                            <tr>
                              <th>Date</th>
                              <th>Customer Name</th>
                              <th>Address</th>
                              <th>Contact No.</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>2022-08-15</td>
                              <td>Juan Dela Cruz </td>
                              <td>Tandaay, Nabua Camarines Sur</td>
                              <td>09123456789</td>
                              <td>
                                <label class="btn btn-secondary btn-sm">View</label>
                              </td>
                            </tr>
                            <tr>
                              <td>2022-08-15</td>
                              <td>Juan Dela Cruz </td>
                              <td>Tandaay, Nabua Camarines Sur</td>
                              <td>09123456789 </td>
                              <td>
                                <label class="btn btn-secondary btn-sm">View</label>
                              </td>
                            </tr>
                            <tr>
                              <td>2022-08-15</td>
                              <td>Juan Dela Cruz</td>
                              <td>Tandaay, Nabua Camarines Sur</td>
                              <td>09123456789 </td>
                              <td>
                                <label class="btn btn-secondary btn-sm">View</label>
                              </td>
                            </tr><tr>
                              <td>2022-08-15</td>
                              <td>Juan Dela Cruz </td>
                              <td>Tandaay, Nabua Camarines Sur</td>
                              <td>09123456789 </td>
                              <td>
                                <label class="btn btn-secondary btn-sm">View</label>
                              </td>
                            </tr>
                            <tr>
                              <td>2022-08-15</td>
                              <td>Juan Dela Cruz</td>
                              <td>Tandaay, Nabua Camarines Sur</td>
                              <td>09123456789 </td>
                              <td>
                                <label class="btn btn-secondary btn-sm">View</label>
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

