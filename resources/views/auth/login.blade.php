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
    <link rel="stylesheet" href="css/vertical-layout-light/style.css">
    <link rel="stylesheet" href="css/style.css">
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
                    <div class="mx-auto">

                        <div class="auth-form-light text-left pb-5 px-3">
                            <div class="login-header">
                                <a href="#default">
                                    <img src="images/favicon2.png" alt="Zuniga Gravel and Sand Trading">
                                </a>
                            </div>
                            <h2 class="center mt-5">Log In</h2>
                            <hr>
                            <form action="/login" class="py-3 text-center" method="POST">
                              @csrf
                                <div class="form-group py-2">
                                    <div class="input-group login-input">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text fa fa-user"></span>
                                        </div>
                                        <input type="text" class="form-control font-italic"
                                          name="email"
                                            placeholder="Input your username" aria-label="Username">
                                    </div>
                                </div>
                                <div class="form-group py-2">
                                    <div class="input-group login-input">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text fa fa-lock "></span>
                                        </div>
                                        <input type="password" class="form-control font-italic"
                                          name="password"
                                            placeholder="Input your password" aria-label="Password">
                                    </div>
                                </div>

                                <div class="mt-4 text-center">
                                    <button class="btn btn-inverse-dark btn-md btn-icon-text"
                                        style="font-weight: lighter;"><i
                                            class="fas fa-sign-in-alt btn-icon-prepend icon-th"></i>Log In</button>
                                </div>
                            </form>
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
