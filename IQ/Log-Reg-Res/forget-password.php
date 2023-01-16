<?php 
require_once "controllerUserData.php"; ?>

<!DOCTYPE html>

<html>
<?php include "../nav-login.php";?>


<head>

    <title>Forgot Password</title>





    <link rel="stylesheet" href="../css/style.css">

</head>



<body>

    <section class="form-main">

        <div class="form-content">

            <div class="circle-1"></div>

            <div class="circle-2"></div>

            <div class="circle-3"></div>

            <div class="box">

                <h3 style="color: #111111 ;">Forgot Password</h3>

                <!--  -->

                <form action="" method="POST">

                    <?php

                    if (count($errors) > 0) {

                    ?>

                    <div class="alert alert-danger text-center">

                        <?php

                            foreach ($errors as $error) {

                                echo $error;
                            }

                            ?>

                    </div>

                    <?php

                    }

                    ?>

                    <div class="input-box">

                        <input type="email" placeholder="Email" name="email" class="input-control">

                    </div>

                    <button type="submit" class="btn" type="submit" name="check-email" value="Continue">Send Reset

                        Link</button>

                </form>

                <p>Don't have an account? <a href="signup.php" class="gardient-text">Sign Up</a></p>

            </div>

        </div>

    </section>

</body>



</html>