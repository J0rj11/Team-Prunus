@extends('layouts.customer')

@section('content')
<div class="sidebar-fixed main-panel px-5">
  <div class="contentWrapper">
    <div class="row py-3">
      <h4>RESERVATION FORM</h4>
    </div>
    <div class="row my-1">
      <div class="col-12">

      <div class="card-body white-bg p-4">
        <h4 class="pb-3">Perdonal Information Form</h4>
        <form class="px-5 pb-3" action="" method="POST">
            @csrf
            <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">First Name</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" name="">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Payment Method</label>
                    <div class="col-sm-6">
                        <select class="form-control form-control-sm" name="">
                                <option value="">Cash</option>
                                <option value="">Credit</option>
                        </select>
                    </div>
                </div>
            </div>
            </div>

            <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Last Name</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" name="">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Date of Delivery</label>
                    <div class="col-sm-6">
                        <input type="date" class="form-control" name="date">
                    </div>
                </div>
            </div>
          </div>


            <div class="row">
            <div class="col-md-12">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="address">
                    </div>
                </div>
            </div>
            </div>
        </form>
    </div>

      <div class="col-md-12 my-1">
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
                  </tr>
                </thead>
                <tr>
                  <td>Pipe</td>
                  <td>PVC Pipe #2</td>
                  <td>55</td>
                  <td>₱ 250.00</td>
                </tr>                      
              </tbody>
            </table>
            <div class="float-right">
              <div class="detail-title pt-3">Total amount:</div> <span class="detail-subtitle">₱ 1,350.00</span>
            </div>
          </div>
          <div class="mt-5 center">                      
            <button  type="submit" class="btn btn-outline-primary btn-md mr-3">Cancel</button>
            <button type="submit" class="btn btn-primary btn-md">Submit Reservation</button>
          </div>
        </div>
      </div>
    </div>

        </div>



      </div>      
    </div>                        
</div>




@endsection


