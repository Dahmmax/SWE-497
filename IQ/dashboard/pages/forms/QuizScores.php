<?php
include("../../../app/database/connect.php");
session_start();
$userid = $_SESSION['id'];

$sql = "SELECT QuizId, QuizTitle, GradingType FROM quiz  WHERE UserId='$userid' ";
$result = $conn->query($sql);
?>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <style>
        @media print {



            .no-print {

                display: none !important;

            }



            .no-style {

                box-shadow: none;

            }

        }
    </style>

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
                        <h3 class="page-title"> <a href="../index.php">
                                <span class="page-title-icon bg-gradient-primary text-white me-2">
                                    <i class="mdi mdi-home"></i></span></a>
                            Quizzes Scorse
                        </h3>
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item active" aria-current="page">
                                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                                </li>
                            </ul>
                        </nav>
                    </div>
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
                                                    <th style="font-weight: bold;"> Show Scores </th>
                                                    <!-- <th style="font-weight: bold;"> Code </th>
                                                    <th style="font-weight: bold;"> Last Update </th> -->
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if ($result->num_rows > 0) : ?>
                                                    <?php
                                                    while ($row = $result->fetch_assoc()) {

                                                        echo " <tr>
                                                    <td>" .
                                                            $row['QuizTitle'] . "
                                                    </td>" . "

                                                    <td>" .
                                                            $row['GradingType'] . "
                                                    </td>
                                                    <td>
                                                    <form action='QuizScores.php' method='get'>
                                                    <input hidden type='text' id='QuizId'  name='QuizIdScore' value='" . $row['QuizId'] . "' >
                                                    <button type='submit' class='btn-sm btn-gradient-primary btn-icon-text'>
                            <i class='mdi mdi-file-check btn-icon-prepend'></i> Show </button>
                                                    </form>
                                                    </td>
                                                </tr>";
                                                    }

                                                    ?>

                                                <?php endif; ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php if (isset($_GET['QuizIdScore'])) : ?>
                        <?php
                        $QuizIdScore = $_GET['QuizIdScore'];
                        $sqlshow = "SELECT * FROM `participants` WHERE QuizId=$QuizIdScore ; ";
                        $resulthsow = $conn->query($sqlshow);
                        $conn->close();
                        $check;
                        $i = 1;
                        ?>
                        <div style="    display: flex;
    justify-content: flex-end;
    margin-top: -30px;
    margin-bottom: 10px;">
                            <button class="btn btn-outline-info btn-icon-text" onclick='printSchedule();'>
                                Print <i class="mdi mdi-printer btn-icon-append"></i></button>

                        </div>
                        <div id="print">
                            

                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Quiz Scores </h4>
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th> # </th>
                                                        <th> Participint Name </th>
                                                        <th> Total Score </th>
                                                        <th> Progress </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php while ($row = $resulthsow->fetch_assoc()) {

                                                        echo " 
                                    
                                        <tr>
                                            <td> " . $i . "</td>
                                            <td> " . $row['ParticipantsName'] . " </td>
                                            <td> " . $row['TotalScore'] . "%" . " </td>
                                            <td>
                                                <div class='progress'>
                                                    <div class='progress-bar bg-gradient-success' role='progressbar' style='width:" . $row['TotalScore'] . "%' aria-valuenow='25' aria-valuemin='0' aria-valuemax='100'></div>
                                                </div>
                                            </td>
                                        </tr>
                                
                                       ";
                                                        
                                                        $i = $i + 1;
                                                    };



                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                          
                        </div>

                    <?php endif; ?>


                </div>
            </div>

        </div>
    </div>


</body>
<script>
    function printSchedule() {

        printDiv = "#print"; // id of the div you want to print

        $("*").addClass("no-print");

        $(printDiv + " *").removeClass("no-print");

        $(printDiv).removeClass("no-print");

        $('.container-scroller').addClass('no-style');

        parent = $(printDiv).parent();

        while ($(parent).length) {

            $(parent).removeClass("no-print");

            parent = $(parent).parent();

        }

        $('.container-scroller').addClass('no-style');

        window.print();

    }
</script>

</html>