<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
</head>

<body>
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <a class="navbar-brand brand-logo" href="index.php"><img src="assets/images/logo2.svg" alt="logo" /></a>
            <a class="navbar-brand brand-logo-mini" href="index.php"><img src="assets/images/logo-mini2.svg"
                    alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item nav-profile dropdown">
                    <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <div class="nav-profile-img">
                            <img src="assets/images/faces/face1.jpg" alt="image">
                            <span class="availability-status online"></span>
                        </div>
                        <div class="nav-profile-text">
                            <p class="mb-1 text-black"><?php echo $_SESSION['username'] ?></p>
                        </div>
                    </a>
                    <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                        <a class="dropdown-item" href="#">
                            <i class="mdi mdi-cached me-2 text-success"></i> Activity Log </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../Log-Reg-Res/logout.php">
                            <i class="mdi mdi-logout me-2 text-primary"
                                onClick="location.href='../Log-Reg-Res/logout.php'"></i>
                            Signout </a>
                    </div>
                </li>
                <li class="nav-item d-none d-lg-block full-screen-link">
                    <a class="nav-link">
                        <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
                    </a>
                </li>
                <!--  -->
                <li class="nav-item nav-logout d-none d-lg-block">
                    <a class="nav-link" href="../Log-Reg-Res/logout.php">
                        <i class="mdi mdi-power"></i>
                    </a>
                </li>
                <li class="nav-item nav-settings d-none d-lg-block">
                    <a class="nav-link" href="#">
                        <i class="mdi mdi-format-line-spacing"></i>
                    </a>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                data-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
            </button>
        </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
            <div class="content-wrapper" style="width: 122%">
                <h1 class="display-4" style="color:#9a55ff;position: inherit;margin: -15px 339px;">Quiz Code</h1>
                <input class="btn btn-block btn-lg btn-gradient-primary mt-4" style="position: inherit;margin: -9px 337px;
                padding: 0 0;
                height: 62px;" type="text" id="code" name="country" value="36625" readonly>

                <button style="border: none;
                   /* position: absolute;
                   width: 40px;
                   height: 41.33px;  */" onclick="myFunction()"><i class="mdi mdi-content-copy" style="
                   position: absolute;
                   margin: -13px -125px;
                   padding: -5px -5px;
                   display: block;
                   font-size: 50px;
                   width: 40px;
                   text-align: left;
                   color: #b66dff;
                   "></i></button>
                <!-- class="col-sm-6 col-md-4 col-lg-3" -->

                <script>
                    function myFunction() {
                        // Get the text field
                        var copyText = document.getElementById("code");

                        // Select the text field
                        copyText.select();
                        copyText.setSelectionRange(0, 99999); // For mobile devices

                        // Copy the text inside the text field
                        navigator.clipboard.writeText(copyText.value);

                    }
                </script>

                <button style="border: none;
                   /* position: absolute;
                   width: 40px;
                   height: 41.33px;  */" onclick="myFunction1()"><i class="mdi mdi-share-variant" style="
                   position: absolute;
                   margin: -13px -50px;
                   padding: -5px -5px;
                   display: block;
                   font-size: 50px;
                   width: 40px;
                   text-align: left;
                   color: #b66dff;
                   "></i></button>
                <!-- class="col-sm-6 col-md-4 col-lg-3" -->

                <script>
                    function myFunction1() {
                        // Get the text field
                        var copyText = document.getElementById("code");

                        // Select the text field
                        copyText.select();
                        copyText.setSelectionRange(0, 99999); // For mobile devices

                        // Copy the text inside the text field
                        navigator.clipboard.writeText('http://' + copyText.value); // put the url for the participant to start quiz
                    }
                </script>

                <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                <div class="row">
                    <div class="col-lg-6 grid-margin stretch-card" style="
                    position: inherit;
                    width: 405px;
                    margin: 42px 500px;
                    padding: 20px 0px;">
                        <div class="card">
                            <div class="card-body">
                                <!-- <h4 class="card-title">Basic Table</h4>
                     <p class="card-description"> Add class <code>.table</code>
                     </p> -->
                                <!-- <form action="/action_page.php"> -->
                                <table class="table">
                                    <thead>
                                        <h3>List Of Participants</h3>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="
                                    vertical-align: middle;
                                    font-size: 19px;line-height: 1;white-space: nowrap;padding: 7px;border: 0px;">Jacob
                                            </td>

                                            <!-- <td><label class="badge badge-danger">Pending</label></td> -->
                                        </tr>
                                        <tr>
                                            <td style="
                                    vertical-align: middle;
                                    font-size: 19px;line-height: 1;white-space: nowrap;padding: 7px;border: 0px;">
                                                Messsy</td>

                                            <!-- <td><label class="badge badge-warning">In progress</label></td> -->
                                        </tr>
                                        <tr>
                                            <td style="
                                    vertical-align: middle;
                                    font-size: 19px;line-height: 1;white-space: nowrap;padding: 7px;border: 0px;">John
                                            </td>

                                            <!-- <td><label class="badge badge-info">Fixed</label></td> -->
                                        </tr>
                                        <tr>
                                            <td style="
                                    vertical-align: middle;
                                    font-size: 19px;line-height: 1;white-space: nowrap;padding: 7px;border: 0px;">Peter
                                            </td>

                                            <!-- <td><label class="badge badge-success">Completed</label></td> -->
                                        </tr>
                                        <tr>
                                            <td style="
                                    vertical-align: middle;
                                    font-size: 19px;line-height: 1;white-space: nowrap;padding: 7px;border: 0px;">Dave
                                            </td>

                                            <!-- <td><label class="badge badge-warning">In progress</label></td> -->
                                        </tr>
                                    </tbody>
                                </table>
                                   <!-- </form> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                <button type="button" class="btn btn-gradient-danger btn-fw" style="position: inherit;
                margin: 10px 327px">END</button> 
                <button type="button" class="btn btn-gradient-success btn-fw" style=" position: absolute;
                margin: 10px 90px;">START</button>

                <footer class="footer">
                    <div class="container-fluid d-flex justify-content-between">
                        <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright ©
                            bootstrapdash.com
                            2021</span>
                        <span class="float-none float-sm-end mt-1 mt-sm-0 text-end"> Free <a
                                href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap
                                admin
                                template</a> from Bootstrapdash.com</span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- End custom js for this page -->
</body>