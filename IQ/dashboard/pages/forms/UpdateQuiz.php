<?php
include('../../../app/database/connect.php');


$QuizTitle=$_POST["QuizTitle"];
$QuizDuration=$_POST["QuizDuration"];
$QuizId=$_POST["QuizId"];

$sql="UPDATE quiz set QuizTitle='$QuizTitle', Duration='$QuizDuration' where QuizId ='$QuizId'";
if ($conn->query($sql) === TRUE) {
    echo "DATA updated";
}
?>