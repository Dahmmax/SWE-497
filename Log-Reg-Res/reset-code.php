<?php require_once "controllerUserData.php"; ?>



<!DOCTYPE html>

<html>
<?php include "../nav-login.php";?>


<head>

    <title>ScheduleUp - Forgot Password</title>


    <link rel="stylesheet" href="../css/style.css">

</head>



<body>

    <section class="form-main">

        <div class="form-content">

            <div class="circle-1"></div>

            <div class="circle-2"></div>

            <div class="circle-3"></div>

            <div class="box">

                <h3 style="color: #111111 ;">Code Verification</h3>

                <?php if(isset($_SESSION['info']) && count($errors) <= 0 ) : ?>

                <!-- if (isset($_SESSION['info'])) {

                ?> -->

                <div class="alert alert-success text-center" style="padding: 0.4rem 0.4rem">

                    <?php echo $_SESSION['info']; ?>

                </div>

                <?php endif ?>

            

                

                <?php

                if (count($errors) > 0) {

                ?>

                <div class="alert alert-danger text-center">

                    <?php

                        foreach ($errors as $showerror) {

                            echo $showerror;

                        }

                        ?>

                </div>

                <?php

                }

                ?>



                <!--  -->

                <form action="" method="POST">
<!-- 
                    <

                   // if (count($errors) > 0) {

                    // 

                    // <div class="alert alert-danger text-center">

                    //     

                    //         foreach ($errors as $error) {

                    //             echo $error;

                    //         }

                    //         

                    // </div>

                    // 

                    // }

                    ?> -->

                    <div class="input-box">

                        <input type="number" name="otp" placeholder="Enter code" required class="input-control">

                    </div>

                    <button type="submit" class="btn" type="submit" name="check-reset-otp"

                        value="Submit">Submit</button>

                </form>

                <p>Don't have an account? <a href="signup.php" class="gardient-text">Sign Up</a></p>

            </div>

        </div>

    </section>

</body>



</html>