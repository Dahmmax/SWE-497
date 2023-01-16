<?php session_start();
include("../../../app/database/connect.php");

//if (isset($Get[''])) {

$GetQuizId = $_GET['edit'];

$sql = "SELECT QuizId, QuizTitle,Duration, GradingType, QuizCode, created_at FROM quiz WHERE QuizId = $GetQuizId  ";

$result = $conn->query($sql);
$GetQuizTitle;
while ($row = $result->fetch_assoc()) {
    $GetQuizTitle = $row['QuizTitle'];
    $GetQuizDuration = $row['Duration'];
}
//}
//answers

$sqlA = "SELECT Head, Score, Question_Id FROM question WHERE QuizId = $GetQuizId  ";

$resultA = $conn->query($sqlA);
//$GetQuizTitle;






?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                            </ol>
                        </nav>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    </p>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <!-- <form class="form-sample" action="#" method="post"> -->
                                                <p class="card-description"
                                                    style="font-size:20px;font-family:monospace;font-weight:bold;color:black;">
                                                    Quiz info </p>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <input type="text" hidden name="QuizId" id="QuizId"
                                                                value="<?php echo $GetQuizId; ?>">
                                                            <label class="col-sm-3 col-form-label">Quiz Title</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control"
                                                                    id="inputQuizTitle"
                                                                    value="<?php echo $GetQuizTitle; ?>" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">‎Quiz
                                                                duration</label>


                                                            <div class="col-sm-9">
                                                                <input type="number" class="form-control"
                                                                    id="inputQuizDuration"
                                                                    value="<?php echo $GetQuizDuration; ?>" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-5" style="margin-left: 0%;">

                                                        <button style="margin-left: 15px;"
                                                            class="btn btn-gradient-light btn-rounded btn-fw">Cancel</button>
                                                        <button type="submit" name="submit" id="update"
                                                            class="btn btn-gradient-success btn-rounded btn-fw">
                                                            <i class="mdi mdi-file-check btn-icon-prepend"></i>
                                                            Submit</button>
                                                    </div>
                                                </div>
                                                <br><br>
                                                <th><Span
                                                        style="font-size:20px;font-family:monospace;font-weight:bold;">Questions</Span>
                                                </th>
                                                <th></th><th></th><th></th>
                                   

                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php if ($resultA->num_rows > 0): ?>
                                            <?php
                                                while ($row = $resultA->fetch_assoc()) {
                                                    $Question_Id = $row['Question_Id'];
                                                    echo " <tr>
                                                    <td>" .
                                                        $row['Head'] . "
                                                    </td>" . "";
                                                    echo "<td></td>";
                                                    echo "
                                                    <td><button id='qStartl' type='button' class='btn white'>Start</button>
                                                    </td>
    
                                                    <td>
                                                    <form action='EditQuestion.php' method='GET'>
                                                    <input hidden type='text'  name='edit' value='".$row['Question_Id']."' >
                                                    <input hidden type='text'  name='quiz' value='".$GetQuizId."' >
                                                    <button id='qEdit'  type='submit'  class='btn btn-gradient-primary btn-sm'>Edit</button>
                                                        </form>
                                                    </td>
                                                     
                                                    <td><button id='qDelete' type='button' name='deleteQus' value='".$row['Question_Id']."' class='btn btn-gradient-danger btn-sm'>Delete</button>
                                                    </td>
                                                </tr>";

                                                }
                                                $conn->close();
                                            ?>
                                            <?php endif; ?>
                                            <tr>
                                                <td>
                                                    <form action='NewQuestion.php' method='GET'>
                                                        <input hidden type='text' name='edit' value='<?php echo $GetQuizId; ?>'>
                                                        <?php if ($resultA->num_rows == 0): ?>
                                                            <h6>The Quiz have no Questions</h6>
                                                            <br>
                                                            <?php endif; ?>
                                                        <a href="NewQuestion.php"><button type="submit"
                                                                class="btn btn-gradient-light btn-rounded btn-fw">Add a
                                                                new
                                                                question</button></a>
                                                </td>
                                                </form>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                        <!-- content-wrapper ends -->
                        <!-- partial:../../partials/_footer.html -->
                        <footer class="footer">
                            <div class="container-fluid d-flex justify-content-between">
                                <!-- <span class="text-muted d-block text-center text-sm-start d-sm-inline-block"><button
                                        type="button"
                                        class="btn btn-gradient-primary btn-rounded btn-fw">Homepage</button></span>
                                <span class="float-none float-sm-end mt-1 mt-sm-0 text-end"><button type="button"
                                        class="btn btn-gradient-success btn-rounded btn-fw">Save</button></span> -->

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
            <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
            <!-- endinject -->
            <!-- Plugin js for this page -->
            <!-- End plugin js for this page -->
            <!-- inject:js -->
            <script src="../../assets/js/off-canvas.js"></script>
            <script src="../../assets/js/hoverable-collapse.js"></script>
            <script src="../../assets/js/misc.js"></script>
            <!-- endinject -->
            <!-- Custom js for this page -->
            <!-- End custom js for this page -->
</body>

</html>

<script>
    $(document).ready(function () {
     

        $("#update").click(function () {
            var QuizTitle = $("#inputQuizTitle").val();
            var QuizDuration = $("#inputQuizDuration").val();
            var QuizId = $("#QuizId").val();

            Swal.fire({
                title: 'Do you want to save the changes?',
                showDenyButton: true,
                showCancelButton: true,
                confirmButtonText: 'Save',
                denyButtonText: `Don't save`,
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    $.ajax({
                        url: 'UpdateQuiz.php',
                        method: 'POST',
                        data: {
                            QuizTitle: QuizTitle,
                            QuizDuration: QuizDuration,
                            QuizId: QuizId
                        },
                        success: function (response) {
                            console.log(response);
                            Swal.fire('Saved!', '', 'success').then((result) => {
                                location.href = 'editq.php';
                            })

                        }

                    })

                } else if (result.isDenied) {
                    Swal.fire('Changes are not saved', '', 'info')
                }
            })

        });



        
    });
</script>

<script>

 $("[name=deleteQus]").click(function () {
            var QuestionId = $(this).val();
            

            Swal.fire({
                title: 'Do you want to save the changes?',
                showDenyButton: true,
                showCancelButton: true,
                confirmButtonText: 'Save',
                denyButtonText: 'Dont save',
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    $.ajax({
                        url: 'DeleteQuestion.php',
                        method: 'POST',
                        data: {
                            QuestionId: QuestionId
                        },
                        success: function (response) {
                            console.log(response);
                            Swal.fire('Saved!', '', 'success').then((result) => {
                               window.location.reload();

                            })

                        }

                    })

                } else if (result.isDenied) {
                    Swal.fire('Changes are not saved', '', 'info')
                }
            })

        });
</script>
