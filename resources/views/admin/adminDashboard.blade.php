@extends('layouts.admin')

@section('content')
<div class="main-panel">
  <div class="content-wrapper">
  <h4 class="py-3">DASHBOARD</h4>          
    <div class="row">
      <div class="col-12 grid-margin ">
        <div class="card">
         <div class="card-body">
          <div class="d-flex justify-content-between">
            <p class="card-title">Sales Report</p>
          </div>
          <canvas id="sales-chart" class="chartjs-render-monitor w-100 h-300 px-5"></canvas>
        </div>
      </div>
    </div> 
         
    <div class="col-12 grid-margin ">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between">
            <div class="col-md-3 mb-4 stretch-card transparent center">
              <div class="card card-tale br-5">
                <div class="card-body">
                  <i class="menu-icon icon-xl"><iconify-icon icon="fluent:notepad-edit-16-regular"></iconify-icon></i>
                  <h4>RESERVATIONS</h4>
                </div>
              </div>
            </div>

            <div class="col-md-3 mb-4 stretch-card transparent center">
              <div class="card card-tale br-5">
                <div class="card-body">
                  <i class="menu-icon icon-xl"><iconify-icon icon="bxs:truck"></iconify-icon></i>
                  <h4>DELIVERIES</h4>
                </div>
              </div>
            </div>

            <div class="col-md-3 mb-4 stretch-card transparent center">
              <div class="card card-tale br-5">
                <div class="card-body">
                  <i class="menu-icon icon-xl"><iconify-icon icon="mdi:progress-check"></iconify-icon></i>
                  <h4>ITEMS AVAILABLE</h4>
                </div>
              </div>
            </div>

            <div class="col-md-3 mb-4 stretch-card transparent center">
              <div class="card card-tale br-5">
                <div class="card-body">
                  <i class="menu-icon icon-xl"><iconify-icon icon="fa6-solid:dolly"></iconify-icon></i>
                  <h4>STORAGE CAPACITY</h4>
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
