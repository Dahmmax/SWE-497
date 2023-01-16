<?php
include('../../../app/database/connect.php');
session_start();

$QuizId = $_POST["QuizId"];
$UserId=$_SESSION['id'];

$sql = "DELETE FROM quiz WHERE QuizId = $QuizId and UserId= $UserId ";
if ($conn->query($sql) === TRUE) {
    echo "Quiz Deleted";
} else {

$conn->close();
}
?>