<?php 
include('../../app/database/connect.php');


if (isset($_POST['pid'])) {

    $pid = $_POST['pid'];
    $userScore = $_POST['userScore'];





    $sql = "UPDATE  participants SET TotalScore =$userScore WHERE participants.ParticipantsId=$pid ;";

    $result = mysqli_query($conn, $sql);
    if ($result === TRUE) {
        echo " score is saved ";
    }else{
        echo "error at saving score";
    }
}
?>