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
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <?php
      // ini_set( 'error_reporting', E_ALL );
      // ini_set( 'display_errors', true );
      include("nav.php");
      ?>
        <!-- NAV ENDING -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <?php include("sidebar.php") ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title"> Leaderboards </h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Tables</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <!-- <h4 class="card-title">Basic Table</h4>
                     <p class="card-description"> Add class <code>.table</code>
                     </p> -->
                                    <!-- <form action="/action_page.php"> -->
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Leaderboards</th>
                                                <th>Quiz Title</th>
                                                <th>Retrieval</th>
                                                <!-- <th>Status</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Jacob</td>
                                                <td>53275531</td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-gradient-primary btn-sm">Retrieve</button>
                                                </td>
                                                <!-- <td><label class="badge badge-danger">Pending</label></td> -->
                                            </tr>
                                            <tr>
                                                <td>Messsy</td>
                                                <td>53275532</td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-gradient-primary btn-sm">Retrieve</button>
                                                </td>
                                                <!-- <td><label class="badge badge-warning">In progress</label></td> -->
                                            </tr>
                                            <tr>
                                                <td>John</td>
                                                <td>53275533</td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-gradient-primary btn-sm">Retrieve</button>
                                                </td>
                                                <!-- <td><label class="badge badge-info">Fixed</label></td> -->
                                            </tr>
                                            <tr>
                                                <td>Peter</td>
                                                <td>53275534</td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-gradient-primary btn-sm">Retrieve</button>
                                                </td>
                                                <!-- <td><label class="badge badge-success">Completed</label></td> -->
                                            </tr>
                                            <tr>
                                                <td>Dave</td>
                                                <td>53275535</td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-gradient-primary btn-sm">Retrieve</button>
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
                </div>

                <!-- content-wrapper ends -->
                <!-- partial:../../partials/_footer.html -->
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

</html>