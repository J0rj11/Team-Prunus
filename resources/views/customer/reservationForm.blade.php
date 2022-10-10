@extends('layouts.customer')

@section('content')
<div class="sidebar-fixed main-panel p-3">
  <div class="contentWrapper">
    <div class="row py-3">
      <h4>RESERVATION FORM</h4>
    </div>

      <div class="row my-1">

        <div class="col-9">
          <div class="card white-bg">
            <div class="card-body">

              <div class="col-md-12">
                <div class="card-body bg-transparent">
                <h4>ITEM INFORMATION</h4>
                  <div class="form-group row center">
                    <div class="col">
                      <label>Item Name</label>
                      <input class="form-control" type="text">
                    </div>
                    <div class="col">
                      <label>Category</label>
                      <select class="form-control form-control-sm" id="exampleFormControlSelect2">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div>
                    <div class="col">
                      <label>Quantity</label>
                      <div id="the-basics">
                        <input class="form-control" type="number">
                      </div>
                    </div>
                    <div class="col">
                      <label>Price</label>
                      <div >
                          <input class="form-control" type="text">
                      </div>
                    </div>
                    <div class="col">
                      <label>Action</label>
                      <div>
                          <label class="btn btn-primary btn-sm">Add</label>
                      </div>
                    </div>

                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card-body white-bg p-4">
            <label>Total</label>
            <div class="p-2 pb-2 col-sm-12">
              <input class="form-control" type="text">
            </div>
            
            <!-- <label>Payment Method</label>
            <div class="p-2 col-sm-12">
                <select class="form-control form-control-sm">
                  <option>Cash</option>
                  <option>Credit</option>
                </select>
            </div> -->

          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-9">
            <div class="card-body white-bg p-4">
              <h4>Order Details</h4>
              <div class="table-responsive mt-3">
                <table class="table table-hover table-striped">
                <tbody>
                  <thead class="color">
                    <tr>
                      <th>Product Name</th>
                      <th>Category</th>
                      <th>Quantity</th>
                      <th>Amount</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tr>
                    <td>Pipe</td>
                    <td>PVC Pipe #2</td>
                    <td>55</td>
                    <td>₱ 250.00</td>
                    <td>
                      <button class="btn btn-danger btn-rounded btn-icon-sm">
                        <i class='fa-solid fa-xmark'></i>
                      </button>    
                    </td>
                  </tr>                      
                </tbody>
              </table>
            </div>
            <div class="mt-5 center">                      
              <button  type="submit" class="btn btn-outline-primary btn-md">Cancel</button>
              <button type="submit" class="btn btn-primary btn-md">Next</button>
            </div>
          </div>
        </div>
      </div>      
    </div>                        
</div>
@endsection


