<?php

session_start();
@$errors = array();
@include '../app/database/connect.php';

if (isset($_POST['submit'])) {
  //@$name = mysqli_real_escape_string($conn, $_POST['username']);

  //@$email = mysqli_real_escape_string($conn, $_POST['email']);

  @$email = strtolower($_POST['email']);

  @$pass = md5($_POST['pass']);

  $select = " SELECT username, email, id FROM users  WHERE email = ? && password = ? ";

  if ($stmt = mysqli_prepare($conn, $select)) {

    // We do not want to expose passwords in our database, so hash the password and use password_verify when a user logs in.

    mysqli_stmt_bind_param($stmt, 'ss', $email, $pass);

    mysqli_stmt_execute($stmt);

    mysqli_stmt_bind_result($stmt, $_SESSION['username'], $_SESSION['email'], $_SESSION['id']);


    if (mysqli_stmt_fetch($stmt)) {

      header('Location: ../dashboard');
    } else {

      $error[] = 'incorrect email or password!';
    }
  }
}

include "../nav-login.php";
?>



<!DOCTYPE html>

<html>



<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Interactive Quiz - Log In</title>

    <link rel="stylesheet" href="../css/style.css">

</head>





<body>

    <section class="form-main">

        <div class="form-content">

            <div class="circle-1"></div>

            <div class="circle-2"></div>

            <div class="circle-3"></div>

            <div class="box">

                <h3 style="color: #111111;">Welcome</h3>

                <?php

        if (isset($error)) {

          foreach (@$error as $error) {

            echo '<span class="error-msg" id="error-msg" style="margin-left: 15%;">' . @$error . '</span>';
          };
        };

        ?>

                <!--  -->

                <form action="" method="POST">

                    <div class="input-box">

                        <input type="text" placeholder="Email" name="email" class="input-control">

                    </div>

                    <div class="input-box">

                        <input type="password" placeholder="password" name="pass" class="input-control">



                    </div>

                    <button type="submit" name="submit" class="btn">Log in</button>

                </form>



                <p>Don't have an account? <a href="signup.php" class="gardient-text">Sign Up</a></p>

                <div class="input-link">

                    <a href="forget-password.php" class="gardient-text" style="margin-right: 30% ;">Forgot Password?

                    </a>

                </div>

            </div>



        </div>

    </section>

</body>



</html>