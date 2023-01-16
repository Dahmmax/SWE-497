<?php

@include '../app/database/connect.php';











if (isset($_POST['submit'])) {



  $username = $_POST['username'];

  $email = strtolower($_POST['email']);

  $pass = md5($_POST['password']);

  $cpass = md5($_POST['cpassword']);

  $good = false;

  $domain = substr($email, strpos($email, '@') + 1);

  if (strlen($username) == 0 || !preg_match("/^([a-zA-Z' ]+)$/", $username) || strlen($username) > 32) {

    $error[] = 'invalid name, length btween 1 and 32 and can only contain (letters \' SPACE).';

  } else {

    if (strlen($_POST['password']) < 8 || strlen($_POST['password']) > 32) {

      $error[] = 'password must be between 8 and 32';

    } else {

      if ($pass != $cpass) {

        $error[] = 'Password not matched!';

      } else {

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

          // invalid emailaddress

          $error[] = 'please enter a valid email';

        } else {

          if (!checkdnsrr($domain, 'MX')) {

            // domain is not valid

            $error[] = 'email domain doesn\'t exist';

          } else {

            $good = true;

        }

      }

      }

    }

  }

  if ($good) {

    $select = " SELECT * FROM users 

    WHERE email = ? && password = ? ";





    if ($stmt = mysqli_prepare($conn, $select)) {

      // We do not want to expose passwords in our database, so hash the password and use password_verify when a user logs in.

      mysqli_stmt_bind_param($stmt, 'ss', $email, $pass);

      mysqli_stmt_execute($stmt);

      mysqli_stmt_store_result($stmt);



      if (mysqli_stmt_num_rows($stmt) > 0) {



        $error[] = 'user already exist ! ';

      } else {

        $insert = "INSERT INTO users(username,email, password) VALUES (?, ?, ?) ";

        if ($stmt = mysqli_prepare($conn, $insert)) {

          // We do not want to expose passwords in our database, so hash the password and use password_verify when a user logs in.

          mysqli_stmt_bind_param($stmt, 'sss', $username, $email, $pass);

          mysqli_stmt_execute($stmt);

          header('location: login.php');

        } else {

          $error[] = 'insertion failed! ';

          // Something is wrong with the sql statement, check to make sure accounts table exists with all 3 fields.

        }

      };

    } else {

      // Something is wrong with the sql statement, check to make sure accounts table exists with all 3 fields.

      $error[] = 'sorry! there\'s database error!';

    }

  };

}









include "../nav-login.php";

?>





<!DOCTYPE html>

<html>



<head>

  <title>ScheduleUp - Sign Up</title>

  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">

  <link rel="icon" href="/favicon.ico" type="image/x-icon">

  <link rel="stylesheet" href="../css/style.css">

</head>



<body>

  <section class="form-main">

    <div class="form-content">

      <div class="circle-1"></div>



      <div class="circle-2"></div>

      <div class="circle-3"></div>

      <div class="box">

        <h3 style="color:#111111 ;">Create Account</h3>

        <?php

        if (isset($error)) {

          foreach (@$error as $error) {

            echo '<span class="error-msg" id="error-msg" >' . @$error . '</span>';

          };

        };

        ?>

        <!--  -->

        <form action="" method="POST">

          <div class="input-box">

            <input type="text" name="username" placeholder="Full Name" class="input-control" maxlength="32" required>

          </div>

          <div class="input-box">

            <input type="text" name="email" placeholder="Email" class="input-control" maxlength="50" required>

          </div>

          <div class="input-box">

            <input type="password" name="password" placeholder="password" class="input-control" maxlength="32" required>



          </div>

          <div class="input-box">

            <input type="password" name="cpassword" placeholder="re-enter password" class="input-control" maxlength="32">



          </div>

          <button type="submit" name="submit" class="btn">Sign up</button>

        </form>

        <p>Already have an account? <a href="login.php" class="gardient-text">Log In</a></p>

      </div>

    </div>

  </section>

</body>



</html>