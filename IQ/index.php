<?php
session_start();
include("app/database/connect.php");
// $schedules = array();
// $numOfSchedules = 0;
// function executeQuery($sql, $data)
// {
//     global $conn;
//     $stmt = $conn->prepare($sql);
//     $values = array_values($data);
//     $types = str_repeat('s', count($values));
//     $stmt->bind_param($types, ...$values);
//     $stmt->execute();
//     return $stmt;
// }
// function getSavedSchedules()
// {
//     global $conn;
//     $sql = "SELECT * FROM schedules WHERE user_id = ? ";

//     $stmt = executeQuery($sql, ['user_id' => $_SESSION['id']]);
//     $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
//     return $records;
// }
// function NumberOfSavedSchedules()
// {
//     global $conn;
//     $sql = "SELECT COUNT(schedule_id) AS Num FROM schedules WHERE user_id  = " . $_SESSION['id'] . "  ";
//     $result = mysqli_query($conn, $sql);
//     $data = mysqli_fetch_assoc($result);
//     $record = $data['Num'];
//     return $record;
// }
// if (isset($_SESSION['id'])) {
//     $schedules = getSavedSchedules();
//     $numOfSchedules = NumberOfSavedSchedules();
// }

// 
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>Interactive Quiz - Homepage</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="vendors/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/css/owl.theme.default.css">
    <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/aos/css/aos.css">
    <link rel="stylesheet" href="css/style.min.css">

</head>
<style>
    .scheduleUp {
        color: #8549db;
    }

    .quizCode {
        border: 2px solid #b7eddd;
        height: 44px;
        /* margin-right: -28px; */
        border-radius: 3px;
        margin-top: 21px;
    }
</style>

<body id="body" data-spy="scroll" data-target=".navbar" data-offset="100">
    <header id="header-section">
        <nav class="navbar navbar-expand-lg pl-3 pl-sm-0" id="navbar">
            <div class="container">
                <div class="navbar-brand-wrapper d-flex w-100">
                    <img src="dashboard/assets/images/logo2.svg" height="70px" width="200px" alt="logo">
                    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="mdi mdi-menu navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse navbar-menu-wrapper" id="navbarSupportedContent">
                    <ul class="navbar-nav align-items-lg-center align-items-start ml-auto">
                        <li class="d-flex align-items-center justify-content-between pl-4 pl-lg-0">
                            <div class="navbar-collapse-logo">
                                <img src="images/Group2.svg" alt="">
                            </div>
                            <button class="navbar-toggler close-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="mdi mdi-close navbar-toggler-icon pl-5"></span>
                            </button>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#header-section">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#features-section">About</a>
                        </li>
                        <?php if (isset($_SESSION['username'])) : ?>
                            <li class="nav-item">
                                <a class="nav-link" href="dashboard/index.php">Dashboard</a>
                            </li>
                        <?php endif; ?>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#case-studies-section">My Saved Schedules</a>
                        </li> -->
                        <?php if (!isset($_SESSION['username'])) : ?>
                            <li class="nav-item btn-contact-us pl-4 pl-lg-0">
                                <button class="btn btn-info" onclick="location.href='Log-Reg-Res/login.php';">Login
                                </button>
                            </li>
                        <?php endif; ?>
                        <?php if (isset($_SESSION['username'])) : ?>
                            <li class="nav-item btn-contact-us pl-4 pl-lg-0">
                                <button class="btn btn-opacity-light mr-1" onclick="location.href='Log-Reg-Res/logout.php';">logout
                                </button>
                            </li>
                        <?php endif; ?>

                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="banner">
        <div class="container">
            <h1 class="font-weight-semibold"><span class="scheduleUp">Interactive Quiz</span><br>Best Online
                Quiz Maker
            </h1>
            <h6 class="font-weight-normal text-muted pb-3">Simple, Fast, Interactive And No Account required to join!
            </h6>
            <div>
                
                    <!-- <button class="btn btn-opacity-light mr-1">Get started</button> -->
                    <!-- <input class="quizCode" type="text" name="" placeholder="Enter quiz code"> -->
                    <button class="btn btn-opacity-success ml-1" id="joinQuiz">Join
                        Quiz<?php if (isset($_SESSION['username'])) echo ", " . $_SESSION['username']; ?></button>
                
            </div>
            <img src="images/HomepagePic.svg" alt="" class="img-fluid">
        </div>
    </div>

    <div class="content-wrapper">
        <div class="container">
            <section class="features-overview" id="features-section">
                <div class="content-header">
                    <h2>What can you do?</h2>
                    <h6 class="section-subtitle text-muted">
                        Interactive Quiz serves as an easy-to-use schedule maker<br />that
                        meets user's needs.
                    </h6>
                </div>
                <div class="d-md-flex justify-content-between">
                    <div class="grid-margin d-flex justify-content-start">
                        <div class="features-width">
                            <img src="images/Timer.svg" alt="" class="img-icons" />
                            <h5 class="py-3">Simple &<br />Efficient</h5>
                            <p class="text-muted">
                                Get ready to create your schedule within 1 click
                            </p>
                            <a href="#">
                            </a>
                        </div>
                    </div>
                    <div class="grid-margin d-flex justify-content-center">
                        <div class="features-width">
                            <img src="images/PdfIconBlackAndWhite.svg" alt="" class="img-icons" />
                            <h5 class="py-3">Export As<br />PDF</h5>
                            <p class="text-muted">Export your schedule in PDF format</p>
                            <a href="#">
                            </a>
                        </div>
                    </div>
                    <div class="grid-margin d-flex justify-content-end">
                        <div class="features-width">
                            <img src="images/shareE.svg" alt="" class="img-icons" />
                            <h5 class="py-3">Share Your<br />Schedule</h5>
                            <p class="text-muted">
                                You can copy the link and share it with others
                            </p>
                            <a href="#">
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="digital-marketing-service" id="digital-marketing-section">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-7 grid-margin grid-margin-lg-0" data-aos="fade-right">
                        <h3 class="m-0">Take Your Schedule Everywhere!<br>Just Save it!</h3>
                        <div class="col-lg-7 col-xl-6 p-0">
                            <p class="py-4 m-0 text-muted">You Can Save Up To 3 Scheudles for free!</p>
                            <p class="font-weight-medium text-muted">All you need is to create an account, it's simple!
                                just click <a href="Log-Reg-Res/login.php">here!</a></p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5 p-0 img-digital grid-margin grid-margin-lg-0" data-aos="fade-left">
                        <img src="images/saveDisplay.png" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-12 col-lg-7 text-center flex-item grid-margin" data-aos="fade-right">
                        <img src="images/dragDisplayMain.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 col-lg-5 flex-item grid-margin" data-aos="fade-left">
                        <h3 class="m-0">Don't Like It?<br>Just Drag it!.</h3>
                        <div class="col-lg-9 col-xl-8 p-0">
                            <p class="py-4 m-0 text-muted">SchedueUp is all about simplicity</p>
                            <p class="pb-2 font-weight-medium text-muted">with powrful drag and drop features you can
                                manipulate activities as you wish!</p>
                        </div>
                    </div>
                </div>
            </section>
            <!--  -->
            <section class="case-studies" id="case-studies-section">
                <div class="row grid-margin">
                    <div class="col-12 text-center pb-5">
                        <h2>Create New Quiz?</h2>

                        <h6 class="section-subtitle text-muted">You have to login to Create a quiz <br><br>
                            <button class="btn btn-opacity-success ml-1" onclick="location.href='Log-Reg-Res/login.php';">Create
                                New Quiz</button>
                        </h6>
                    </div>
                </div>
            </section>
            <?php if (!isset($_SESSION['username'])) : ?>
                <section class="contact-us" id="contact-section">
                    <div class="contact-us-bgimage grid-margin">
                        <div class="pb-4">
                            <h4 class="px-3 px-md-0 m-0" data-aos="fade-down">Login First To See Your </h4>
                            <h4 class="pt-1" data-aos="fade-down">Saved Schedules</h4>

                        </div>
                        <div data-aos="fade-up">
                            <button class="btn btn-rounded btn-outline-danger"><a href="Log-Reg-Res/login.php">Login</a></button>
                        </div>
                    </div>
                </section>


            <?php endif ?>

            <section class="contact-us" id="contact-section">
                <div class="contact-us-bgimage grid-margin">
                    <div class="pb-4">
                        <h4 class="px-3 px-md-0 m-0" data-aos="fade-down">Do you have somtething to say?</h4>
                        <h4 class="pt-1" data-aos="fade-down">Contact us</h4>

                    </div>
                    <div data-aos="fade-up">
                        <button class="btn btn-rounded btn-outline-danger"><a href="mailto: contact@scheup.com">Contact
                                us</a></button>
                    </div>
                </div>
            </section>
            <section class="contact-details" id="contact-details-section">
                <div class="row text-center text-md-left">
                    <div class="col-12 col-md-6 col-lg-3 grid-margin">
                        <img src="images/Group2.svg" alt="" class="pb-2">
                        <div class="pt-2">
                            <p class="text-muted m-0">info@scheup.com</p>
                            <p class="text-muted m-0">contact@scheup.com</p>
                            <p class="text-muted m-0">support@scheup.com</p>
                            <p class="text-muted m-0"></p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 grid-margin">
                        <h5 class="pb-2">Get in Touch</h5>
                        <p class="text-muted">Don’t miss any updates to our website!</p>
                        <form>
                            <input type="text" class="form-control" id="Email" placeholder="Email id">
                        </form>
                        <div class="pt-3">
                            <button class="btn btn-dark" id="sub-button">Subscribe</button>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 grid-margin">
                        <h5 class="pb-2">Team Members</h5>

                        <p class="m-0 pb-2">Mohammed Alharbi </p>


                        <p class="m-0 pt-1 pb-2">Turki Almahamid </p>



                        <p class="m-0 pt-1 pb-2">Khalid Almasoud </p>

                        <!-- <a href="#">
                            <p class="m-0 pt-1">Discover</p>
                        </a> -->
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 grid-margin">
                        <h5 class="pb-2">Special Thanks</h5>
                        <p class="text-muted">CCIS, our adivsor<br>Dr. Fazal-e-Amin</p>
                        <div class="d-flex justify-content-center justify-content-md-start">
                        </div>
                    </div>
                </div>
            </section>
            <footer class="border-top">
                <p class="text-center text-muted pt-4">Copyright © 2022<a href="https://scheup.com" class="px-1">ScheduleUp.</a>All rights reserved.</p>
            </footer>
        </div>
    </div>
    <script src="vendors/jquery/jquery.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/owl-carousel/js/owl.carousel.min.js"></script>
    <script src="vendors/aos/js/aos.js"></script>
    <script src="js/landingpage.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>
</body>
<script>
    $(document).ready(function() {
        
        let Qcode = new URLSearchParams(window.location.search).get('QuizCode');
        if(Qcode==null){
            Qcode="";
        }

        
        
        $("#joinQuiz").click(async function() {
            const {
                value: formValues
            } = await Swal.fire({
                title: 'Multiple inputs',
                html: '<input id="par-name" placeholder="Your Name" class="swal2-input">' +
                    '<input id="QuizCode" value="'+Qcode+'" placeholder="Quiz Code" class="swal2-input">',
                focusConfirm: false,
                preConfirm: () => {
                    
                        parName =document.getElementById('par-name').value;
                        quizCode =document.getElementById('QuizCode').value;
                        
                    
                }
            })

            if (parName!="" && quizCode!="") {
                //Swal.fire(JSON.stringify(parName+quizCode))
                $.ajax({
                        url: 'Quiz-App/PartJoinQuiz.php',
                        method: 'POST',
                        data: {
                            parName: parName,
                            quizCode: quizCode
                        },
                        
                        success: function(data) {
                            
                            // console.log("QuizCode="+response.QuizCode);
                            if(data != "error quiz 404"){
                                console.log(data)
                            Swal.fire('You have been joined to the quiz', '', 'success'
                            ).then((result) => {
                            
                                window.location.href = "Quiz-App/indexp.html?Qid="+data;
                            })
                        }else{
                            Swal.fire('The Quiz is not active or the code is wrong', '', 'error'
                            ) 
                        }
                    }
                    })
            }
        });

            
    });
</script>

</html>