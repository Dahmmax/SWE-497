<?php
include("../app/database/connect.php");

if (isset($_POST['parName']) && !empty($_POST['quizCode'])) {

    $parName = $_POST['parName'];
    $quizCode = $_POST['quizCode'];

    $sql = "SELECT * FROM quiz WHERE QuizCode = '$quizCode' ";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        $rowSelect = $result->fetch_assoc();
        $getQuizId = $rowSelect['QuizId'];


        $sqlInsert = "INSERT INTO participants (ParticipantsName,QuizId,QuizCode) VALUES ('$parName', '$getQuizId','$quizCode')";
        $resultInsert = $conn->query($sqlInsert);
        echo "Code is true and user inserted";
        mysqli_close($conn);

    
    }else{
        echo "error quiz 404";
    }
}
