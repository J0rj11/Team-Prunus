<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Delivery Report</title>

  <!-- Normalize or reset CSS with your favorite library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">

  <!-- Load paper.css for happy printing -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.4.1/paper.css">
  <link rel="stylesheet" href="{{ asset('/css/style.css') }}">  
  <link rel="stylesheet" href="{{ asset('/css/vertical-layout-light/style.css') }}">



  <!-- Set page size here: A5, A4 or A3 -->
  <!-- Set also "landscape" if you need -->
  <style>@page { size: letter }</style>
</head>

<!-- Set "A5", "A4" or "A3" for class name -->
<!-- Set also "landscape" if you need -->
<body class="letter">

  <!-- Each sheet element should have the class "sheet" -->
  <!-- "padding-**mm" is optional: you can set 10, 15, 20 or 25 -->
<div class="sheet padding-10mm">
    <div class="login-header float-right px-3">
        <a href="#default">
            <img src="{{ asset('/images/favicon2.png')}}" alt="">
        </a>
    </div>
    <!-- Write HTML just like a web page -->
    <h3 class="center">Delivery Report</h3>

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
            <thead class="color">
                <tr>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Truck #</th>
                    <th>Client's Name</th>
                    <th>Items</th>
                    <th>Amount</th>
                    <th>Notes</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


</div>

</body>

</html>
