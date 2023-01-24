<?php
session_start();
include("../../../app/database/connect.php");
$userid = $_SESSION['id'];
$GetQuizId = $_GET['edit'];
//echo $GetQuizId;

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

    <style>
        .radio-toolbar {
            background-color: white;
            width: max-content;
            padding: 10px 10px;
            position: relative;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            justify-content: space-around;
        }

        .radio-toolbar label {
            font-size: 1.2em;
        }




        .radio-toolbar {
            margin: 10px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            flex-grow: 2;
        }




        .radio-toolbar input[type="radio"] {
            visibility: hidden;
            display: none;
        }



        .radio-toolbar label {
            display: inline-block;
            background-color: white;
            padding: 10px 20px;
            font-family: sans-serif, Arial;
            font-size: 16px;
            border: 2px solid rgb(235, 119, 98);
            border-radius: 5px;
            cursor: pointer;
        }

        .radio-toolbar label:hover {
            background-color: rgb(235, 119, 98);
            color: white
        }

        .radio-toolbar input[type="radio"]:focus+label {
            border: 2px solid rgb(235, 119, 98);
        }

        .radio-toolbar input[type="radio"]:checked+label {
            background-color: rgb(250, 119, 98);
            color: white;
            border: 2px solid white;
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
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                            </ol>
                        </nav>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="form-group row" style=" margin: 0px;">
                                    <h6><label class="col-form-label"> Type of Question:
                                        </label></h6>
                                    <div class="col-sm-2">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" checked class="form-check-input" name="type" id="mcq" value="mcq" onclick="Question_mcq()">
                                                MCQ
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="type" id="tandf" value="tandf" onclick="Question_tandf()">
                                                True and False
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">

                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <form class="forms-sample">

                                                    <input hidden type="text" name="q" id="QuizId" value="<?php echo $GetQuizId; ?>">
                                                    <div class="form-group">

                                                        <label for="Question" style="font-size:20px;font-family:monospace;font-weight:bold;color:black;">Question</label>
                                                        <input type="text" class="form-control" id="createQuestion" placeholder="What is the answer?">
                                                    </div>
                                            <tr>
                                                <th>
                                                    <form class="forms-sample">
                                                        <div class="form-group">
                                                            <label for="QusetionInputA">A)</label>
                                                            <input type="text" required class="form-control" id="AnswerA" placeholder="Answer A">
                                                        </div>
                                                </th>
                                            </tr>
                                            <th>
                                                <form class="forms-sample">
                                                    <div class="form-group">
                                                        <label for="exampleInputName1">B)</label>
                                                        <input type="text" required class="form-control" id="AnswerB" placeholder="Answer B">
                                                    </div>
                                            </th>
                                            </tr>
                                            <th id="QC">
                                                <form class="forms-sample">
                                                    <div class="form-group">
                                                        <label for="exampleInputName1">C)</label>
                                                        <input type="text" required class="form-control" id="AnswerC" placeholder="Answer C">
                                                    </div>
                                            </th>
                                            </tr>

                                            <tr>
                                                <th id="QD">
                                                    <form class="forms-sample">
                                                        <div class="form-group">
                                                            <label for="exampleInputName1">D)</label>
                                                            <input type="text" required class="form-control" id="AnswerD" placeholder="Answer D">
                                                        </div>
                                                </th>
                                            </tr>

                                            <tr>
                                                <th>
                                                    <div class="template-demo">
                                                        <h4 class="card-title">Choose The Right Answer</h4>
                                                        <div class="radio-toolbar">

                                                            <input type="radio" id="A" name="val" value="A" required="required" />
                                                            <label for="A">A</label>


                                                            <input type="radio" id="B" name="val" value="B" />
                                                            <label for="B">B</label>
                                                            <div id="but-c">
                                                                <input type="radio" id="C" name="val" value="C" />
                                                                <label for="C">C</label>
                                                            </div>

                                                            <div id="but-d">
                                                                <input type="radio" id="D" name="val" value="D" />
                                                                <label for="D">D</label>

                                                            </div>

                                                        </div>


                                                    </div>
                                                </th>
                                            </tr>
                                        </thead>

                                    </table>
                                    <br>
                                    <div class="col-sm-10" style="margin-left: 0%;">

                                        <button style="margin-left: 15px;" class="btn btn-gradient-light btn-rounded btn-fw">Cancel</button>

                                        <button type="button" name="submit" id="update" class="btn btn-gradient-success btn-rounded btn-fw">
                                            <i class="mdi mdi-file-check btn-icon-prepend"></i>
                                            Submit</button>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <!-- content-wrapper ends -->
                        <!-- partial:../../partials/_footer.html -->
                        <footer class="footer">
                            <!-- <div class="container-fluid d-flex justify-content-between">
                                <span class="text-muted d-block text-center text-sm-start d-sm-inline-block"><button
                                        type="button"
                                        class="btn btn-gradient-primary btn-rounded btn-fw">Homepage</button></span>
                                <span class="float-none float-sm-end mt-1 mt-sm-0 text-end"><button type="button"
                                        class="btn btn-gradient-success btn-rounded btn-fw">Save</button></span> -->

                    </div>
                    <!-- <input type="radio" name="reason" value="Fit Description">Fit Description<br>
                            <input type="radio" name="reason" value="Suspicious Behavior">Suspicious Behavior<br>
                            <input type="radio" name="reason" value="No Reason Given">No Reason Given<br>
                            <input type="radio" name="reason" value="">Other <input type="text" name="other_reason" /> -->
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
    function Question_tandf() {
        document.getElementById('QC').style.display = 'none';
        document.getElementById('QD').style.display = 'none';
        document.getElementById('AnswerA').value = 'True';
        document.getElementById('AnswerB').value = 'False';

        document.getElementById('AnswerA').disabled = true;
        document.getElementById('AnswerB').disabled = true;

        document.getElementById('but-c').style.display = 'none';
        document.getElementById('but-d').style.display = 'none';
    };

    function Question_mcq() {
        document.getElementById('QC').style.display = '';
        document.getElementById('QD').style.display = '';
        document.getElementById('AnswerA').value = '';
        document.getElementById('AnswerB').value = '';

        document.getElementById('AnswerA').disabled = false;
        document.getElementById('AnswerB').disabled = false;

        document.getElementById('but-c').style.display = '';
        document.getElementById('but-d').style.display = '';
    };
</script>
<script>
    $(document).ready(function() {



        $("#update").click(function() {
            //

            //
            var QuestionHead = $("#createQuestion").val();
            // val answers
            var AnswerA = $("#AnswerA").val();
            var AnswerB = $("#AnswerB").val();
            var AnswerC = $("#AnswerC").val();
            var AnswerD = $("#AnswerD").val();
            var type = document.querySelector('input[name="type"]:checked').value;
            
            // correct Answer
            if ($("input[name='val']:checked").length > 0) {
                var iscorrect = document.querySelector('input[name="val"]:checked').value;
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Please make sure you have choose the correct answer and fill all the answers. !'
                    

                })
                return;
            }

            var QuizId = $("#QuizId").val();


            
                if (AnswerA != "" && AnswerB != "" && AnswerC != "" && AnswerD != "" && QuestionHead !="" || type=="tandf" && QuestionHead !="") {
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
                                url: 'SaveNewQuestion.php',
                                method: 'POST',
                                data: {
                                    QuestionHead: QuestionHead,
                                    Score: 2,
                                    iscorrect: iscorrect,
                                    QuizId: QuizId,
                                    AnswerA: AnswerA,
                                    AnswerB: AnswerB,
                                    AnswerC: AnswerC,
                                    AnswerD: AnswerD
                                },
                                success: function(response) {
                                    console.log(response);
                                    Swal.fire('Saved!', '', 'success').then((result) => {
                                        location.href = 'QuizInfo.php?edit=' + QuizId;
                                    })

                                }

                            })

                        } else if (result.isDenied) {
                            Swal.fire('Changes are not saved', '', 'info')
                        }
                    })
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Please make sure you have fill all the answers and choose the correct answer!',
                        footer: '<a href="">Why do I have this issue?</a>'
                    })
                }
            
        });

    });
</script>

</html>