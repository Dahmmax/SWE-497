<?php session_start();
include("../../../app/database/connect.php");
$userid = $_SESSION['id'];

$sql = "SELECT quiz.QuizTitle, ROUND(AVG(participants.TotalScore),2)  FROM `participants`, quiz WHERE quiz.UserID=$userid  AND 
quiz.QuizId = participants.QuizId GROUP BY quiz.QuizId ORDER BY quiz.QuizId DESC LIMIT 5;";
$result = $conn->query($sql);
//mysqli_close($conn);


$records = [];

while( $row = mysqli_fetch_row( $result ) ){
    array_push( $records, $row );
}

echo json_encode( $records );
mysqli_close($conn);
