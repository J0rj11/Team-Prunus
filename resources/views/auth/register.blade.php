<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Zuniga Gravel and Sand Trading</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/feather/feather.css">
    <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/vertical-layout-light/customer-style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content_wrapper auth ">
                <div class="row">
                    <div class="mx-auto my-auto">
                        <div class="auth-form-light text-left">

                            <div class="col-12">

                                <div class="card bg-transparent">
                                    <div class="card-body">
                                        <h4 class="card-title">Welcome to Zuniga Gravel and Sand Trading</h4>
                                        <form class="form-sample" action="{{ route('register') }}" method="POST">
                                            @csrf
                                            <div class="card-subtitle">
                                                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, "</p>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="pl-3">First Name</label>
                                                        <div class="col-sm-12">
                                                            <input type="text" class="form-control form-control-sm"
                                                                name="first_name" value="{{ old('first_name') }}" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="pl-3">Last Name</label>
                                                        <div class="col-sm-12">
                                                            <input type="text" class="form-control form-control-sm"
                                                                name="last_name" value="{{ old('last_name') }}" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="pl-3">Address</label>
                                                        <div class="col-sm-12">
                                                            <input type="text" class="form-control form-control-sm"
                                                                name="address" value="{{ old('address') }}" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="pl-3">Contact Number</label>
                                                        <div class="col-sm-12">
                                                            <input type="text" class="form-control form-control-sm"
                                                                name="contact_number"
                                                                value="{{ old('contact_number') }}" maxlength="11" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="pl-3">Username</label>
                                                        <div class="col-sm-12">
                                                            <input type="text" class="form-control form-control-sm"
                                                                name="username" value="{{ old('username') }}" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="pl-3">Password</label>
                                                        <div class="col-sm-12">
                                                            <input type="password" class="form-control form-control-sm"
                                                                name="password" />
                                                        </div>
                                                    </div>
                                                    @error('password')
                                                        <span class="text-red ml-2">Password doesnt match</span>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="pl-3">Confirm Password</label>
                                                        <div class="col-sm-12">
                                                            <input type="password" class="form-control form-control-sm"
                                                                name="password_confirmation" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                    </div>

                                    <div class="pt-4 pb-3 center">
                                        <button type="submit"
                                            class="btn btn-md btn-primary mb-3 font-weight-light">Create
                                            Account</button>
                                        <div class="hr-dashed center"></div>
                                        <div class="register mt-4">
                                            <p>Already have an account? <a href="login.html"
                                                    class="font-weight-bolder text-primary">Click Here</a>
                                            </p>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../../vendors/js/vendor.bundle.base.js"></script>
    <script src="../../js/off-canvas.js"></script>
    <script src="../../js/hoverable-collapse.js"></script>
    <script src="../../js/template.js"></script>
    <script src="../../js/settings.js"></script>
    <script src="../../js/todolist.js"></script>
</body>

</html>
