<?php
require_once('../../../app/database/connect.php');
session_start();

if (isset($_POST['submit'])) {

    $QuizTitle = $_POST['QuizTitle'];
    $QuizDuration = $_POST['QuizDuration'];
    $UserId = $_SESSION['id'];
    $Quizcode = 0;

    $insert = "INSERT INTO quiz(QuizTitle, Duration, Quizcode, UserId) VALUES (?, ?, ?, ?) ";

    if ($stmt = mysqli_prepare($conn, $insert)) {


        mysqli_stmt_bind_param($stmt, 'sddd', $QuizTitle, $QuizDuration, $Quizcode, $UserId);

        mysqli_stmt_execute($stmt);

        header('location: ../../index.php');
        // $_SESSION['swetalert'] = "
        // <script>
        //  Swal.fire(
        //     'Good job!',
        //     'You clicked the button!',
        //     'success'
        //   )
        //   </script>";
    } else {

        $error[] = 'insertion failed! ';

        // Something is wrong with the sql statement, check to make sure accounts table exists with all 3 fields.

    };
}