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
                <h1 class="display-4" style="color:#9a55ff;position: inherit;margin: -15px 339px;">Testing the limits of how long can the question be before it breaks the display is this long enough or no?</h1>
                <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                <div class="row">
                    <div class="col-lg-6 grid-margin stretch-card" style="
                    position: inherit;
                    width: 405px;
                    margin: 42px 500px;
                    padding: 20px 0px;">
                        <div class="card">
                            <div class="card-body">
                            <div style="font-weight: 300;
  line-height: 1.2;">
                    <span style="margin-right: 0px; float:left; display:inline; width: 49%;">
                        Participants remaining: XX
                    </span>
                <div id="clockdiv" style="margin-left: 0px; margin-right: 0px; float:left; display:inline; width: 49%;">
   <span class="title">Time Remaining</span>
   <div class="sq">
      <span class="minutes bord">57</span> <span class="smalltext">Mins</span>
   </div>
   <div class="sq">
      <span class="seconds bord">37</span> <span class="smalltext">Secs</span>
   </div>
</div>
                            <button type="button" class="btn btn-fw btn-gradient-info" style="position: inherit; margin: 10px;">T</button>
                            <button type="button" class="btn btn-fw btn-gradient-success" style="position: inherit; margin: 10px;">Answer 2</button>
                            <button type="button" class="btn btn-fw btn-gradient-warning" style="position: inherit; margin: 10px;">Answer 3</button>
                            <button type="button" class="btn btn-fw btn-gradient-primary" style="position: inherit; margin: 10px;">Overly Long Answer that Breaks The App</button>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <script type="text/javascript">//<![CDATA[


function getTimeRemaining(endtime) {
  var t = Date.parse(endtime) - Date.parse(new Date());
  if (t<0) { return false; }
  var seconds = Math.floor((t / 1000) % 60);
  var minutes = Math.floor((t / 1000 / 60) % 60);
  return {
    'total': t,
    'minutes': minutes,
    'seconds': seconds
  };
}
function initializeClock(id, endtime) {
  var clock = document.getElementById(id);
  var minutesSpan = clock.querySelector('.minutes');
  var secondsSpan = clock.querySelector('.seconds');
  function updateClock() {
    var t = getTimeRemaining(endtime);
    if (t) {
      minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
      secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);
    } else {
      clearInterval(timeinterval);
    }
  }
 
  updateClock();
  var timeinterval = setInterval(updateClock, 1000);
}
var deadline = new Date(); //today
deadline.setTime(deadline.getTime() + 120000);
initializeClock('clockdiv', deadline);


  //]]></script>
                <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<button type="button" class="btn btn-gradient-danger btn-fw" style=" position: inherit;
                margin: 10px 90px 10px 750px;">NEXT</button>
                

                <footer class="footer">
                    <div class="container-fluid d-flex justify-content-between">
                        <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright ??
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
    <script src="assets/js/chart.js"></script>
    <!-- End custom js for this page -->
</body>