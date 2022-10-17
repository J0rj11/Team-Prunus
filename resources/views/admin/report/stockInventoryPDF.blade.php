<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Stock Inventory Report</title>

  <!-- Normalize or reset CSS with your favorite library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">

  <!-- Load paper.css for happy printing -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.4.1/paper.css">
  <link rel="stylesheet" href="{{ asset('/css/style.css') }}">  
  <link rel="stylesheet" href="{{ asset('/css/vertical-layout-light/style.css') }}">



  <!-- Set page size here: A5, A4 or A3 -->
  <!-- Set also "landscape" if you need -->
  <style>@page { size: legal landscape}</style>
</head>

<!-- Set "A5", "A4" or "A3" for class name -->
<!-- Set also "landscape" if you need -->
<body class="legal landscape">

  <!-- Each sheet element should have the class "sheet" -->
  <!-- "padding-**mm" is optional: you can set 10, 15, 20 or 25 -->
<div class="sheet padding-10mm">
    <div class="login-header float-right px-3">
        <a href="#default">
            <img src="{{ asset('/images/favicon2.png')}}" alt="">
        </a>
    </div>
    <!-- Write HTML just like a web page -->
    <h3 class="center">Stock Inventory Report</h3>

    <div class="row2 mt-5">
                <div class="row">
                    <div class="col-md-9">
                      <address>
                        <p class="font-weight-bold">Zuñiga’s Gravel and Sand Trading</p>
                        <p>Zone</p>
                        <p>Tandaay, Nabua, Camarines Sur</p>
                        <p>Philippines</p>
                      </address>
                    </div>
                    <div class="col-md-3">
                      <div class="text-primary">
                        <p class="font-weight-bold">
                          Date:
                        </p>
                        <div class="row pl-2">
                            <div class="col-md-3">
                                <p class="col-2">From: </p>
                                </div>
                            <div class="col-md-9">
                                <p>01-01-22</p>
                            </div>
                        </div>
                        <div class="row pl-2">
                            <div class="col-md-3">
                                <p class="col-2">To: </p>
                                </div>
                            <div class="col-md-9">
                                <p>10-20-22</p>
                            </div>
                        </div>
                    </div>
                </div>
                    
    </div>
    <div class="table-responsive mt-3">
        <table class="table table-hover table-striped table-bordered" id="deliveryTable">
            <thead class="color ">
                <tr class="vertical-align">
                    <th rowspan="0">Product ID</th>
                    <th rowspan="0">Product Name</th>
                    <th rowspan="0">Product Category</th>
                    <th colspan="3">PURCHASES</th>
                    <th colspan="3">SOLD PRODUCTS</th>
                    <th colspan="2">ENDING INVENTORY</th>
                </tr>
                <tr>
                    <th>Qty.</th>
                    <th>Purchase Price</th>
                    <th>Amount</th>
                    <th>Qty.</th>
                    <th>Sale Price</th>
                    <th>Total</th>
                    <th>Available Stock</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>P1203T</td>
                    <td>PVC Pipe#1</td>
                    <td>Pipe</td>
                    <td>50</td>
                    <td>92.26</td>
                    <td>4,613</td>
                    <td>10</td>
                    <td>94</td>
                    <td>940</td>
                    <td>40</td>
                    <td>3,760</td>
                    </tr>
                    <tr>
                    <td>P1203T</td>
                    <td>PVC Pipe#1</td>
                    <td>Pipe</td>
                    <td>50</td>
                    <td>92.26</td>
                    <td>4,613</td>
                    <td>10</td>
                    <td>94</td>
                    <td>940</td>
                    <td>40</td>
                    <td>3,760</td>
                    </tr>
            </tbody>
        </table>
    </div>
</div>


</div>

</body>

</html>
