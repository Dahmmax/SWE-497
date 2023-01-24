<?php
include("../app/database/connect.php");

if (isset($_POST['parName']) && !empty($_POST['quizCode'])) {

    $parName = $_POST['parName'];
    $quizCode = $_POST['quizCode'];

    $sql = "SELECT * FROM rooms WHERE Quiz_Code = '$quizCode' AND QuesIndex =-1 ";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        $rowSelect = $result->fetch_assoc();
        $getQuizId = $rowSelect['Quiz_Id'];


        $sqlInsert = "INSERT INTO participants (ParticipantsName,QuizId,QuizCode) VALUES ('$parName', '$getQuizId','$quizCode')";
        $resultInsert = $conn->query($sqlInsert);
        echo $getQuizId;
        mysqli_close($conn);

    
    }else{
        echo "error quiz 404";
    }
}
