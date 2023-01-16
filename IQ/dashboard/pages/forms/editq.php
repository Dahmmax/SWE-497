<?php session_start();
include("../../../app/database/connect.php");
$userid = $_SESSION['id'];
$sql = "SELECT QuizId, QuizTitle, GradingType, QuizCode, created_at FROM quiz WHERE UserId='$userid' ";
$result = $conn->query($sql);

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
                                <div class="card-body" style="overflow: auto;">
                                    </p>
                                    <table class="table" >
                                        <thead>
                                            <tr>

                                                <th>
                                                    <Span
                                                        style="font-size:20px;font-family:monospace;font-weight:bold;">Quiz
                                                        Title</Span>
                                                </th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if ($result->num_rows > 0): ?>
                                            <?php
                                                while ($row = $result->fetch_assoc()) {
                                                    $quizcode = $row['QuizCode'];
                                                    echo " <tr>
                                                    <td>" .
                                                        $row['QuizTitle'] . "
                                                    </td>" . "";
                                                    echo "<td></td>";
                                                    echo "
                                                <td><button id='qStartl' type='button' class='btn white'>Start</button>
                                                </td>
                                                
                                                <td>
                                                <form action='QuizInfo.php' method='GET'>
                                                    <input hidden type='text' id='QuizId'  name='edit' value='".$row['QuizId']."' >
                                                    <button id='qEdit'  type='submit'   class='btn btn-gradient-primary btn-sm'>Edit</button>
                                                </form>
                                                </td>
                                                <td>
                                                <button name='QuizDelete' value='".$row['QuizId']."' type='button' class='btn btn-gradient-danger btn-sm'>Delete</button>
                                                </td>
                                            </tr>";

                                                }
                                                $conn->close();
                                            ?>
                                            <?php endif; ?>
                                        </tbody>

                                    </table> <br>
                                    <button type="button" onclick="location.href='CreateQuiz.php';" class="btn btn-gradient-light btn-rounded btn-fw">Add a new
                                        quiz</button>
                                </div>
                            </div>
                        </div>


                        <!-- content-wrapper ends -->
                        <!-- partial:../../partials/_footer.html -->
                        <footer class="footer">
                            <div class="container-fluid d-flex justify-content-between">
                                <span class="text-muted d-block text-center text-sm-start d-sm-inline-block"><button
                                        type="button"
                                        class="btn btn-gradient-primary btn-rounded btn-fw">Homepage</button></span>

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
<script>
$(document).ready(function() {


    $("button[name=QuizDelete]").click(function() {
        var QuizId = $(this).val();

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this Quiz!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                $.ajax({
                    url: 'DeleteQuiz.php',
                    method: 'POST',
                    data: {

                        QuizId: QuizId
                    },
                    success: function(response) {
                        console.log(response);
                        Swal.fire(
                            'Deleted!',
                            'Your quiz has been deleted.',
                            'success'
                        ).then((result) => {
                               window.location.reload();

                            })
                    }

                })

            }

        })

    });


});
</script>

</html>