<?php session_start();
include("../app/database/connect.php");
$userid = $_SESSION['id'];

$sql = "SELECT QuizTitle, GradingType, QuizCode, created_at FROM quiz  WHERE UserId='$userid' ";
$result = $conn->query($sql);
//mysqli_close($conn);
///
function countQuiz()
{
    include("../app/database/connect.php");
    $userid = $_SESSION['id'];

    $sql = "SELECT COUNT(QuizId) FROM `quiz` WHERE UserID=' $userid';";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    mysqli_close($conn);
    return $row[0];
}

function countQuestions()
{
    include("../app/database/connect.php");
    $userid = $_SESSION['id'];

    $sql = "SELECT COUNT(Question_Id) FROM `question` WHERE UserID=' $userid';";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    mysqli_close($conn);
    return $row[0];
}
function TotalParti()
{
    include("../app/database/connect.php");
    $userid = $_SESSION['id'];

    $sql = "SELECT COUNT(participants.ParticipantsId) FROM `participants` , quiz WHERE quiz.QuizId = participants.QuizId AND quiz.UserID= $userid;";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    mysqli_close($conn);
    return $row[0];
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
    
</head>

<body class="darkmode-activated">
    <div class="container-scroller">

        <!-- partial:partials/_navbar.html -->
        <?php include("nav.php") ?>
        <!-- NAV ENDING -->
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <?php include("sidebar.php") ?>

            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title"> <a href="../index.php">
                                <span class="page-title-icon bg-gradient-primary text-white me-2">
                                    <i class="mdi mdi-home"></i></a>
                            </span> Dashboard
                        </h3>
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item active" aria-current="page">
                                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!--  -->
                    <div class="row">
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">My Quizzes</h4>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th style="font-weight: bold;"> Title </th>
                                                    <th style="font-weight: bold;"> Grading Mechanism </th>
                                                    <th style="font-weight: bold;"> Status </th>
                                                    <th style="font-weight: bold;"> Code </th>
                                                    <th style="font-weight: bold;"> Last Update </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if ($result->num_rows > 0) : ?>
                                                    <?php
                                                    while ($row = $result->fetch_assoc()) {
                                                        $quizcode = $row['QuizCode'];
                                                        echo " <tr>
                                                    <td>" .
                                                            $row['QuizTitle'] . "
                                                    </td>" . "

                                                    <td>" .
                                                            $row['GradingType'] . "
                                                    </td>" . "";

                                                        if ($quizcode == 0) {
                                                            echo "
                                                        <td>
                                                            <label class='badge badge-danger'>Not Active</label>
                                                        </td> 
                                                        <td>
                                                        --------------
                                                        </td>
                                                            ";
                                                        } else {
                                                            echo "
                                                        <td>
                                                            <label style='padding-left: 20px;
                                                            padding-right: 20px;' class='badge badge-success'> Active </label>
                                                        </td> <td>" .
                                                                $row['QuizCode'] . "
                                                        </td>" . "
                                                            ";
                                                        };
                                                        echo "
                                                    <td>" . $row["created_at"] . "  </td>
                                                </tr>";
                                                    }
                                                    $conn->close();
                                                    ?>

                                                <?php endif; ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 stretch-card grid-margin">
                            <div class="card bg-gradient-danger card-img-holder text-white">
                                <div class="card-body">
                                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                                    <h4 class="font-weight-normal mb-3">Number of Quizzes <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                                    </h4>

                                    <h2 class="mb-5"><?php echo countQuiz(); ?></h2>
                                    <!-- <h6 class="card-text"> </h6> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 stretch-card grid-margin">
                            <div class="card bg-gradient-info card-img-holder text-white">
                                <div class="card-body">
                                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                                    <h4 class="font-weight-normal mb-3">Number Of Questions <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                                    </h4>
                                    <h2 class="mb-5"><?php echo countQuestions(); ?></h2>
                                    <!-- <h6 class="card-text">Decreased by 10%</h6> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 stretch-card grid-margin">
                            <div class="card bg-gradient-success card-img-holder text-white">
                                <div class="card-body">
                                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                                    <h4 class="font-weight-normal mb-3">Participants In Your Quizzes <i class="mdi mdi-diamond mdi-24px float-right"></i>
                                    </h4>
                                    <h2 class="mb-5"><?php echo TotalParti();  ?></h2>
                                    <!-- <h6 class="card-text">Increased by 5%</h6> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-7 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="chartjs-size-monitor">
                                        <div class="chartjs-size-monitor-expand">
                                            <div class=""></div>
                                        </div>
                                        <div class="chartjs-size-monitor-shrink">
                                            <div class=""></div>
                                        </div>
                                    </div>
                                    <h4 class="card-title">last's 5 Quizzes Average Scores</h4>
                                    <canvas id="doughnutChart" style="height: 190px; display: block; width: 380px;" width="380" height="190" class="chartjs-render-monitor"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title text-black">To do List</h4>
                                    <div class="add-items d-flex">
                                        <input type="text" class="form-control todo-list-input" placeholder="What do you need to do today?">
                                        <button class="add btn btn-gradient-primary font-weight-bold todo-list-add-btn" id="add-task">Add</button>
                                    </div>
                                    <div class="list-wrapper">
                                        <ul class="d-flex flex-column-reverse todo-list todo-list-custom">
                                            <li>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="checkbox" type="checkbox"> Meeting with Alisa
                                                    </label>
                                                </div>
                                                <i class="remove mdi mdi-close-circle-outline"></i>
                                            </li>
                                            <li class="completed">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="checkbox" type="checkbox" checked> Call John
                                                    </label>
                                                </div>
                                                <i class="remove mdi mdi-close-circle-outline"></i>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="checkbox" type="checkbox"> Create invoice </label>
                                                </div>
                                                <i class="remove mdi mdi-close-circle-outline"></i>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="checkbox" type="checkbox"> Print Statements
                                                    </label>
                                                </div>
                                                <i class="remove mdi mdi-close-circle-outline"></i>
                                            </li>
                                            <li class="completed">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="checkbox" type="checkbox" checked> Prepare for
                                                        presentation </label>
                                                </div>
                                                <i class="remove mdi mdi-close-circle-outline"></i>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="checkbox" type="checkbox"> Pick up kids from
                                                        school </label>
                                                </div>
                                                <i class="remove mdi mdi-close-circle-outline"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="container-fluid d-flex justify-content-between">
                        <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright ??
                            bootstrapdash.com
                            2021</span>
                        <span class="float-none float-sm-end mt-1 mt-sm-0 text-end"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap
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

</html>
<!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->