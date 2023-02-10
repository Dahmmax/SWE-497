<?php
include("../app/database/connect.php");

if (isset($_POST['QuizId']) && !empty($_POST['QuizCode'])) {

    $QuizId = $_POST['QuizId'];
    $QuizCode = $_POST['QuizCode'];

    $sql = "DELETE FROM rooms WHERE Quiz_id ='$QuizId' AND Quiz_Code='$QuizCode'; ";
    $sql .= "UPDATE `quiz` SET `QuizCode` = NULL WHERE `quiz`.`QuizId` = '$QuizId'; ";

    if ($conn->multi_query($sql) === TRUE) {
        echo "delete The code and set to null";
      } else {
        echo "Error: " . $sql . "<br>" . $conn;
      }
      
      $conn->close();
}



?>