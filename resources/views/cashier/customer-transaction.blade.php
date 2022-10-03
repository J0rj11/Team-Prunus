@extends('layouts.cashier')

@section('content')


<div class="sidebar-fixed main-panel">
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
              <label for="tab-1" class="csstab-label">Add Transaction</label>
              <div class="csstab-content">
   
                <div class="card-body white-bg">
                  <form class="px-3 py-4">

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Transaction ID</label>
                          <div class="col-sm-9">
                            <input x-model="form.transaction_code" type="text" class="form-control">
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Transaction Name</label>
                          <div class="col-sm-9">
                            <input x-model="form.transaction_name" type="text" class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Date</label>
                          <div class="col-sm-9">
                            <input x-model="form.date" class="form-control" placeholder="dd/mm/yyyy">
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Address</label>
                          <div class="col-sm-9">
                            <input x-model="form.address" type="text" class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Payment Method</label>
                          <div class="col-sm-9">
                            <select class="form-control">
                              <option>Cash</option>
                              <option>Credit</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>

                     <div class="row mb-5">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Contact No.</label>
                          <div class="col-sm-9">
                            <input x-model="form.mobile_number" type="text" class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Delivery Status</label>
                          <div class="col-sm-9">
                            <select class="form-control">
                              <option>Deliver</option>
                              <option>Pickup</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="pt-4 center mb-4">
                      <button type="submit" class="btn btn-outline-primary btn-md">Cancel edit</button>
                      <button type="submit" class="btn btn-primary btn-md">Proceed</button>
                    </div>
                  </form>
                </div>
                
              </div>
            </div>
            <div class="csstab">
              <input type="radio" name="css-tabs" id="tab-2" class="csstab-switch">
              <label for="tab-2" class="csstab-label">List Transaction</label>
              <div class="csstab-content">
                  <div class="card-body white-bg">
                    <form class="form-group row px-1 pl-5">
                      <div class="col">
                        <label class="mb-2">Transaction ID</label>
                        <select class="form-control">
                          <option></option>
                          <option></option>
                          <option></option>
                          <option></option>
                        </select>
                      </div>
                      <div class="col">
                        <label class="mb-2">Date</label>
                        <input class="typeahead" type="text">
                      </div>
                      <div class="col pt-4-5">
                        <button type="submit" class="btn btn-primary mb-2">Search</button>
                      </div>
                    </form>

                    <div class="card-body bg-transparent">
                      <div class="table-responsive mt-2">
                        <table class="table table-hover table-striped">
                          <thead class="color">
                            <tr>
                              <th>Transaction ID</th>
                              <th>Transaction Name</th>
                              <th>Total Item</th>
                              <th>Total Price</th>
                              <th>Payment Method</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <template x-for="(transaction, index) in list" :key="transaction.id" >
                            <tr>
                              <td x-text="transaction.code" ></td>
                              <td x-text="transaction.name" ></td>
                              <td x-text="transaction.description" ></td>
                              <td x-text="transaction.payment_method" ></td>
                              <td>₱ <span x-text="item.price" ></span></td>
                              <td class="center" >
                                <div role="button" class="btn btn-secondary btn-sm ml-1" @click.prevent="toUpdateForm(transaction, index)" >View</div>
                                <div role="button" class="btn btn-secondary btn-sm ml-1" @click.prevent="toUpdateForm(item, index)" >Edit</div>
                                <div role="button" class="btn btn-dark btn-sm ml-1" @click.prevent="dbDelete(item.id, index)" >Delete</div>
                              </td>
                            </tr>
                          </template>
                            </tr>
                            <tr>
                              <td>OUT963214 </td>
                              <td>Jeorgie Salcedo </td>
                              <td>3</td>
                              <td>₱ 1012.00</td>
                              <td>
                                <label class="btn btn-light btn-sm">Credit</label>
                              </td>
                              <td>
                                <label class="btn btn-success btn-sm">Details</label>
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

