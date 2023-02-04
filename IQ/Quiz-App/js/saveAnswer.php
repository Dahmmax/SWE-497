<?php 
include('../../app/database/connect.php');


if (isset($_POST['Qid'])) {

    $QuizId = $_POST['Qid'];
    $userAns = $_POST['userAns'];



    $sql = "UPDATE `rooms` SET $userAns = $userAns + 1 WHERE `rooms`.`Quiz_Id` = $QuizId ;";

    $result = mysqli_query($conn, $sql);
    if (mysqli_affected_rows($conn) == 1) {
        echo " answer incremented";
    }else{
        echo "answer erorr at incerement";
    }
}
?>