@extends('layouts.customer')

@section('content')
    <div class="sidebar-fixed main-panel">
        <div class="contentWrapper">
            <div class="row py-3 px-5">
                <h4>RESERVATION STATUS</h4>
            </div>
            <div class="col-11 grid-margin m-auto">
                <div class="row ">
                    <div class="csswrapper">
                        <div class="csstabs">
                            <div class="csstab">
                                <input type="radio" name="css-tabs" id="tab-1" checked class="csstab-switch">
                                <label for="tab-1" class="csstab-label">My Order</label>
                                <div class="csstab-content overflow-auto">
                                    <div class="card-body white-bg">
                                        <div class="card-body bg-transparent">
                                            <div class="table-responsive mt-2">
                                                <table class="table table-hover table-striped" id="transactionTable">
                                                    <thead class="color">
                                                        <tr>
                                                            <th>Order #</th>
                                                            <th>Order Created</th>
                                                            <th>Total Price</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                      <tr>
                                                        <td>12345</td>
                                                        <td>10-10-22</td>
                                                        <td>570</td>
                                                        <td>
                                                          <button class="btn btn-dark btn-sm">Pending</button>
                                                        </td>
                                                        <td>
                                                          <button class="btn btn-primary btn-sm">View Details</button>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td>1234567</td>
                                                        <td>10-11-22</td>
                                                        <td>880</td>
                                                        <td>
                                                          <button class="btn btn-info btn-sm">Completed</button>
                                                        </td>
                                                        <td>
                                                          <button class="btn btn-primary btn-sm">View Details</button>
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

