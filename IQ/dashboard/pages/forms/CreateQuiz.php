<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Create Quiz</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/images/favicon.ico" />


</head>

<body>
    <div class="container-scroller">
        <!-- partial:../../partials/_navbar.html -->
        <?php include("nav.php") ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:../../partials/_sidebar.html -->
            <?php include("sidebar.php") ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title"> Create a Quiz </h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">My Quizs</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Create Quiz</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="row" style="justify-content: center;">
                        <div class="col-md-6 grid-margin stretch-card" style="width: 70%;">
                            <div class="card">
                                <div class="card-body">
                                    <!-- <h4 class="card-title">Default form</h4> -->
                                    <p class="card-description"> After you creating the quiz, the system will
                                        automatically
                                        generate the code to join the quiz,
                                        and you can get it and share it in the Quiz Start field. </p>
                                    <!--FORM STARTS HERE  -->
                                    <form class="forms-sample" method="POST" action="SaveNewQuiz.php">
                                        <div class="form-group">
                                            <i class="mdi mdi-border-color"></i>
                                            <label for="exampleInputUsername1">Quiz Title</label>
                                            <input type="text" required name="QuizTitle" class="form-control"
                                                id="exampleInputUsername1" placeholder="Quiz Title">
                                        </div>
                                        <div class="form-group">
                                            <i class="mdi mdi-alarm"></i>
                                            <label for="exampleInputEmail1">Quiz duration in minutes</label>
                                            <input type="number" required name="QuizDuration" class="form-control"
                                                id="exampleInputEmail1" placeholder="Ex: 10">
                                        </div>
                                        <div class="form-group row">
                                            <label style="width: 100%;" class="col-sm-3 col-form-label"><i
                                                    class="mdi mdi-chart-line"> </i> Quiz Grading Mechanism </label>
                                            <div class="col-sm-4">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="radio" required class="form-check-input"
                                                            name="GradingType" id="membershipRadios1" value="Normal">
                                                        Normal Grading <i class="input-helper"></i></label>
                                                </div>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="radio" required class="form-check-input"
                                                            name="GradingType" id="membershipRadios2" value="Lienr">
                                                        Lienr Grading <i class="input-helper"></i></label>
                                                </div>
                                            </div>
                                        </div>

                                        <button type="submit" name="submit" id="submit"
                                            class="btn btn-gradient-success btn-rounded btn-fw">
                                            <i class="mdi mdi-file-check btn-icon-prepend"></i>
                                            Submit</button>
                                        <button style="margin-left: 15px;"
                                            class="btn btn-gradient-light btn-rounded btn-fw">Cancel</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- content-wrapper ends -->
                        <!-- partial:../../partials/_footer.html -->
                        <footer class="footer">
                            <div class="container-fluid d-flex justify-content-between">
                                <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright ©
                                    bootstrapdash.com 2021</span>
                                <span class="float-none float-sm-end mt-1 mt-sm-0 text-end"> Free <a
                                        href="https://www.bootstrapdash.com/bootstrap-admin-template/"
                                        target="_blank">Bootstrap admin
                                        template</a> from Bootstrapdash.com</span>
                            </div>

                            <!--  -->
                        </footer>
                        <!-- partial -->
                    </div>
                    <!-- main-panel ends -->
                </div>
            </div>

            <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
        <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="../../assets/js/jquery.cookie.js"></script>
        <script src="../../assets/js/off-canvas.js"></script>
        <script src="../../assets/js/hoverable-collapse.js"></script>
        <script src="../../assets/js/misc.js"></script>
        <!-- endinject -->
        <!-- Custom js for this page -->


        <script src="../../assets/js/file-upload.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>




        <!-- End custom js for this page -->
</body>

</html>

<script>
//window.addEventListener('load', start);
// function alertswet() {
//     Swal.fire(
//         'Good job!',
//         'You clicked the button!',
//         'success'
//     );
// }


// $("#submit").click(function() {

//     var QuizTitle = document.getElementById('exampleInputUsername1').value;
//     var QuizDuration = document.getElementById('exampleInputEmail1').value;

//     $.post("SaveNewQuiz.php", {
//         QuizTitle: QuizTitle,
//         QuizDuration: QuizDuration,

//     });

// });
</script>