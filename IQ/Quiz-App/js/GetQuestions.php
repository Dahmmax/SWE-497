<?php
include('../../app/database/connect.php');

$QuizId;
if (isset($_GET['Qid']) ) {

    $QuizId = $_GET['Qid'];
    
}


$userid = 2;

$sql = "SELECT * FROM question , answers WHERE question.QuizId=".$QuizId." AND question.Question_Id=answers.Question_id ORDER BY `question`.`Question_Id` ASC";
$result=mysqli_query($conn,$sql);

$records = [];

while( $row = mysqli_fetch_row( $result ) ){
    array_push( $records, $row );
}

echo json_encode( $records );
mysqli_close($conn);







?>