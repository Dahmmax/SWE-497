<?php require_once "controllerUserData.php"; ?>
<?php
if ($_SESSION['info'] == false) {
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Go to login Now</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <section class="form-main">
        <div class="form-content">
            <div class="circle-1"></div>
            <div class="circle-2"></div>
            <div class="circle-3"></div>
            <div class="box">
                <h3 style="color: #111111 ;">Your Password has been change!</h3>
                <!--  -->
                <form action="" method="POST">
                    <?php
                    if (isset($_SESSION['info'])) {
                    ?>
                    <div class="alert alert-success text-center">
                        <?php echo $_SESSION['info']; ?>
                    </div>
                    <?php
                    }
                    ?>
                    <!-- <div class="input-box">
                        <input type="email" placeholder="Email" name="email" class="input-control">
                    </div> -->
                    <button type="submit" class="btn" type="submit" type="submit" name="login-now"
                        value="Login Now">Login Now</button>
                </form>
                <!-- <p>Don't have an account? <a href="signup.php" class="gardient-text">Sign Up</a></p> -->
            </div>
        </div>
    </section>
</body>

</html>