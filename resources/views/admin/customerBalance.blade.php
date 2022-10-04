@extends('layouts.admin')

@section('content')
<div class="main-panel">
  <div class="contentWrapper">
    <div class="row py-2">
      <h4>BALANCES</h4>
      <p class="pl-2">List Balances</p> 
    </div>

    <div class="col-12 grid-margin ">
      <div class="row">
        <div class="csswrapper">
          <div class="csstabs">
            <div class="csstab">
              <input type="radio" name="css-tabs" id="tab-1" checked class="csstab-switch">
              <label for="tab-1" class="csstab-label">Customer Balances</label>
              <div class="csstab-content">
                <div class="col-m-12 grid-margin stretch-card">
                  <div class="card white-bg">
                    <form class="form-group row mb-4 py-4 pl-5">
                      <div class="col">
                        <label class="mb-2 font-weight-bold">Transaction ID</label>
                        <select class="form-control">
                          <option></option>
                          <option></option>
                          <option></option>
                          <option></option>
                        </select>
                      </div>
                      <div class="col">
                        <label class="mb-2 font-weight-bold">Date</label>
                          <input class="typeahead" type="text" placeholder="">
                      </div>
                      <div class="col pt-4-5">
                        <a href="{{ route('balanceDetail') }}">
                        <button type="submit" class="btn btn-primary mb-2">Submit</button>
</a>
                      </div>
                    </form>

                    <div class="card-body bg-transparent">
                      <div class="table-responsive">
                        <table class="table table-hover table-striped">
                          <thead class="color">
                          <tr>
                            <th>Transaction ID</th>
                            <th>Customer Name</th>
                            <th>Total Item</th>
                            <th>Total Payment</th>
                            <th>Due</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>OUT190081</td>
                            <td>Juan Dela Cruz</td>
                            <td>5</td>
                            <td>₱ 1,500.00 </td>
                            <td>2022-08-26</td>
                            <td>
                              <label class="btn btn-success btn-sm">Detail</label>
                              <label class="btn btn-secondary btn-sm">Edit</label>
                              <label class="btn btn-dark btn-sm">Delete</label>
                            </td>
                          </tr>
                          <tr>
                            <td>OUT201120</td>
                            <td>John Doe</td>
                            <td>5</td>
                            <td>₱ 1500.00</td>
                            <td>2022-08-26</td>
                            <td>
                              <label class="btn btn-success btn-sm">Detail</label>
                              <label class="btn btn-secondary btn-sm">Edit</label>
                              <label class="btn btn-dark btn-sm">Delete</label>
                            </td>
                          </tr>
                          <tr>
                            <td>OUT190212</td>
                            <td>Sheila Zuniga </td>
                            <td>3</td>
                            <td>₱ 1012.00</td>
                            <td>2022-08-26</td>
                            <td>
                              <label class="btn btn-success btn-sm">Detail</label>
                              <label class="btn btn-secondary btn-sm">Edit</label>
                              <label class="btn btn-dark btn-sm">Delete</label>
                            </td>
                          </tr>
                          <tr>
                            <td>OUT120031</td>
                            <td>Vina Occiano </td>
                            <td>3</td>
                            <td>₱ 1012.00</td>
                            <td>2022-08-26</td>
                            <td>
                              <label class="btn btn-success btn-sm">Detail</label>
                              <label class="btn btn-secondary btn-sm">Edit</label>
                              <label class="btn btn-dark btn-sm">Delete</label>
                            </td>
                          </tr>
                          <tr>
                            <td>OUT963214 </td>
                            <td>Jeorgie Salcedo </td>
                            <td>3</td>
                            <td>₱ 1012.00</td>
                            <td>2022-08-26</td>
                            <td>
                              <label class="btn btn-success btn-sm">Detail</label>
                              <label class="btn btn-secondary btn-sm">Edit</label>
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
</div>

@endsection

