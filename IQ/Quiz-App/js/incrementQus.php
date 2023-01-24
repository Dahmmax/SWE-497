<?php 
include('../../app/database/connect.php');


if (isset($_POST['Qid'])) {

    $QuizId = $_POST['Qid'];



    $sql = "UPDATE `rooms` SET QuesIndex = QuesIndex + 1 WHERE `rooms`.`Quiz_Id` = $QuizId ;";

    $result = mysqli_query($conn, $sql);
    if (mysqli_affected_rows($conn) == 1) {
        echo "incremented";
    }else{
        echo "erorr at incerement";
    }
}
?>