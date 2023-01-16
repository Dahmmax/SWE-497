<?php
session_start();
include("../../../app/database/connect.php");


if (isset($_POST['QuestionHead'])) {
    $QuestionHead = $_POST["QuestionHead"];
    $Score = $_POST["Score"];
    $iscorrect = $_POST["iscorrect"];
    $QuestionId = $_POST["QuestionId"];
    $QuizId= $_POST["QuizId"];
    $userid = $_SESSION['id'];
   
    ///
    $AnswerA = $_POST["AnswerA"];
    $AnswerB = $_POST["AnswerB"];
    @$AnswerC = $_POST["AnswerC"];
    @$AnswerD = $_POST["AnswerD"];
    //
    $sqlUpdate = "UPDATE `question` SET `Head` = '$QuestionHead' , CorrectAnswer='$iscorrect' WHERE `question`.`Question_Id` = '$QuestionId'";
    if ($conn->query($sqlUpdate) === TRUE) {
        echo "Question is updated ";

    }

    //
    $sqlDeleteAns = "DELETE FROM answers WHERE Question_Id = $QuestionId";
    if ($conn->query($sqlDeleteAns) === TRUE) {
        echo "old answers is delted ";

    }

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
        echo "Error: " . $sqll . "<br>" . $conn;
      }
      
      $conn->close();
}

?>