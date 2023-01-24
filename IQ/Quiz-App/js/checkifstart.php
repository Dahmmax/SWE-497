<?php 
include('../../app/database/connect.php');


if (isset($_GET['Qid'])) {

    $QuizId = $_GET['Qid'];



    $sql = "SELECT * FROM rooms WHERE Quiz_Id=$QuizId";
    $result = mysqli_query($conn, $sql);
    $row = $result->fetch_assoc();
    $value = $row['QuesIndex'];
    if ($value == 0) {
        echo "T";
    }
    elseif($value == -1){
        echo "F";
    }else{
        echo $value;
    }




}
?>