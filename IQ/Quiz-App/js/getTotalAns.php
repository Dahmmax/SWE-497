<?php 
include('../../app/database/connect.php');


if (isset($_POST['QuizId'])) {

    $QuizId = $_POST['QuizId'];
    $QuizCode = $_POST['QuizCode'];



    $sql = "SELECT A,B,C,D FROM rooms WHERE Quiz_Id=$QuizId ;";

    $result = mysqli_query($conn, $sql);
    $TotalAns = [];

    while ($row = mysqli_fetch_row($result)) {
        array_push($TotalAns, $row);
    }
    echo json_encode($TotalAns);

    $sqlUpdate = "UPDATE `rooms` SET A = 0 , B =0, C=0 ,D =0  WHERE `rooms`.`Quiz_Id` = $QuizId ;";
    $resultUpdate = mysqli_query($conn, $sqlUpdate);
    


    mysqli_close($conn);
}

?>