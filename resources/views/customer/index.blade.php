@extends('layouts.customer')

@section('content')
    
 <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper">

    <div class="col-md-12 grid-margin ">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between">
            <div class="col-md-6 mb-4 stretch-card transparent center">
              <div class="card card-tale br-5">
                <div class="card-body">
                  <i class="menu-icon icon-xl"><iconify-icon icon="fluent:notepad-edit-16-regular"></iconify-icon></i>
                  <h4>RESERVATIONS</h4>
                </div>
              </div>
            </div>

            <div class="col-md-6 mb-4 stretch-card transparent center">
              <div class="card card-tale br-5">
                <div class="card-body">
                  <i class="menu-icon icon-xl"><iconify-icon icon="bxs:truck"></iconify-icon></i>
                  <h4>DELIVERIES</h4>
                </div>
              </div>
            </div>

            <div class="col-md-6 mb-4 stretch-card transparent center">
              <div class="card card-tale br-5">
                <div class="card-body">
                  <i class="menu-icon icon-xl"><iconify-icon icon="mdi:progress-check"></iconify-icon></i>
                  <h4>ITEMS AVAILABLE</h4>
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

