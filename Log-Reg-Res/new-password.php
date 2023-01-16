<?php require_once "controllerUserData.php"; ?>

<!DOCTYPE html>
<html>

<head>
    <title>ScheduleUp - New Password</title>
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
                <h3 style="color: #111111 ;">New Password</h3>
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
                    <div class="input-box">
                        <input type="password" name="password" placeholder="Create new password" required
                            class="input-control">
                    </div>
                    <!-- // -->
                    <div class="input-box">
                        <input type="password" name="cpassword" placeholder="Confirm your password" required
                            class="input-control">
                    </div>
                    <button type="submit" class="btn" type="submit" name="change-password"
                        value="Change">Change</button>
                </form>
                <p>Don't have an account? <a href="signup.php" class="gardient-text">Sign Up</a></p>
            </div>
        </div>
    </section>
</body>

</html>