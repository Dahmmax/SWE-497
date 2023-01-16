<?php
include('../../../app/database/connect.php');
session_start();

$QuestionHead = $_POST["QuestionHead"];
$Score = $_POST["Score"];
$iscorrect = $_POST["iscorrect"];
$QuizId = $_POST["QuizId"];
$userid = $_SESSION['id'];
///
$AnswerA = $_POST["AnswerA"];
$AnswerB = $_POST["AnswerB"];
$AnswerC = $_POST["AnswerC"];
$AnswerD = $_POST["AnswerD"];




$sql = "INSERT INTO question (Head, Score, CorrectAnswer,QuizId, UserId) VALUES('$QuestionHead','$Score','$iscorrect','$QuizId','$userid')";
if ($conn->query($sql) === TRUE) {
    echo "DATA updated ". $conn->insert_id;
  $QuestionId = $conn->insert_id;

   
  
//mcq ot true and false Q
  if (!empty($AnswerA) && !empty($AnswerB) && !empty($AnswerC) && !empty($AnswerD)) {
    $sqll = "INSERT INTO answers (Head,Question_id)
VALUES ('$AnswerA', '$QuestionId');";
    $sqll .= "INSERT INTO answers (Head,Question_id)
VALUES ('$AnswerB', '$QuestionId');";
    $sqll .= "INSERT INTO answers (Head,Question_id)
VALUES ('$AnswerC', '$QuestionId');";
    $sqll .= "INSERT INTO answers (Head,Question_id)
VALUES ('$AnswerD', '$QuestionId');";
  }
  elseif(empty($AnswerC) && empty($AnswerD) && !empty($AnswerA) && !empty($AnswerB)){
    $sqll = "INSERT INTO answers (Head,Question_id)
VALUES ('$AnswerA', '$QuestionId');";
    $sqll .= "INSERT INTO answers (Head,Question_id)
VALUES ('$AnswerB', '$QuestionId');";
  }


if ($conn->multi_query($sqll) === TRUE) {
  echo "++ New ANSWERS are created successfully";
} else {
  echo "Error: " . $sqll . "<br>" . $conn->error;
}

$conn->close();
}
?>