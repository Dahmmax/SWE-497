<?php
include("../app/database/connect.php");
session_start();

$userid = $_SESSION['id'];
if (isset($_GET['Qid']) && !empty($_GET['QuizCode'])) {

    $QuizId = $_GET['Qid'];
    $QuizCode = $_GET['QuizCode'];
}


?>

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body onload="table();">
    <div class="container-scroller">
        <?php include('nav.php') ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div class="main-panel" style="width: 100%;">
                <div class="content-wrapper" style="padding-left: 0.25rem;
    padding-right: 0px;">
                    <div class="card-body">
                        <h2 class="display-4" style="color:#9a55ff;position: inherit;">Quiz Code</h2>
                        <input class="btn btn-block btn-lg btn-gradient-primary mt-4" style="position: inherit;
                padding: 0 0;
                height: 40px;" type="text" id="code" name="country" value="<?php echo $QuizCode; ?>" readonly>
                        <br><br>

                        <button style="border: none;
                   /* position: absolute;
                   width: 40px;
                   height: 41.33px;  */" onclick="myFunction()"><i class="mdi mdi-content-copy" style="
                   
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
                                navigator.clipboard.writeText('http://localhost/iq/index.php?QuizCode=' + copyText.value); // put the url for the participant to start quiz
                            }
                        </script>
                        <script type="text/javascript">
                            const Qid = new URLSearchParams(window.location.search).get('Qid');
                            const Qcode = new URLSearchParams(window.location.search).get('QuizCode');

                            

                            function table() {
                                const xhttp = new XMLHttpRequest();
                                xhttp.onload = function() {
                                    document.getElementById("Tablebody").innerHTML = this.responseText;
                                }
                                xhttp.open("GET", "waitingparticipants.php?QuizId=" + Qid + "&QuizCode=" + Qcode);
                                xhttp.send();

                                console.log(xhttp.response);
                            }

                            setInterval(function() {
                                table();
                            }, 2000);
                        </script>

                        <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                        <div class="row">
                            <div class="col-lg-12 grid-margin stretch-card" >
                                <div class="card">
                                    <div class="card-body" style="overflow: auto;">
                                        <h4 class="card-title">the joining participants</h4>
                                        <!-- <p class="card-description"> Add class <code>.table-striped</code>
                                </p> -->
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th> User </th>
                                                    <th> First name </th>
                                                    <th> Progress </th>
                                                    <!-- <th> Amount </th>
                                            <th> Deadline </th> -->
                                                </tr>
                                            </thead>
                                            <tbody id="Tablebody">


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                        <div class="col-lg-12 grid-margin stretch-card " style="display: flex;
    align-content: center;
    justify-content: space-between;
    align-items: center;
    flex-wrap: nowrap;
    flex-direction: row;
    width: max-content;">
                            <button type="button" id="endQuiz" class="btn btn-gradient-danger btn-fw" style="margin-right: 15px;">END</button>
                            <button type="button" id="startQuiz" class="btn btn-gradient-success btn-fw">START</button>
                        </div>

                        <footer class="footer">
                            <div class="container-fluid d-flex justify-content-between">
                                <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright ©
                                    bootstrapdash.com
                                    2021</span>
                                <span class="float-none float-sm-end mt-1 mt-sm-0 text-end"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap
                                        admin
                                        template</a> from Bootstrapdash.com</span>
                            </div>
                        </footer>
                        <!-- partial -->
                    </div>
                </div>
                <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
    </div>
</body>
<script>
    $("#endQuiz").click(function() {
            Swal.fire({
                title: 'Do you want to End the Quiz?  ',
                showDenyButton: true,
                showCancelButton: false,
                confirmButtonText: 'End',
                denyButtonText: `Don't End`,
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {

                    $.ajax({
                        url: 'EndQuiz.php',
                        method: 'POST',
                        data: {
                            QuizId: Qid,
                            QuizCode: Qcode
                        },
                        
                        success: function(response) {
                            console.log("QuizId=" + response);

                            Swal.fire('Your Quiz is Deactiveted, you will be directed to the homepage', '', 'success').then((result) => {

                                window.location.href = "index.php";
                            })
                        }

                    })

                } else if (result.isDenied) {
                    Swal.fire('Changes are not saved', '', 'info')
                }
            })


        });



</script>
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

</html>