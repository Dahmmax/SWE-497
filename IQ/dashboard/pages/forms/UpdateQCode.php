<?php
include('../../../app/database/connect.php');


session_start();
$userid = $_SESSION['id'];

$IsTrueAndFalseQ = false;
$QuestionId;

 function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrs092u3tuvwxyzaskdhfhf9882323ABCDEFGHIJKLMNksadf9044OPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

if (isset($_POST['QuizId'])) {
    $NewCodeToQuiz= generateRandomString();

    
    $QuizId = $_POST["QuizId"];
    $sql = "UPDATE `quiz` SET `QuizCode` = '$NewCodeToQuiz'  WHERE QuizId = '$QuizId';";
    $sql .= "INSERT INTO rooms (Quiz_Id,Quiz_Code) VALUES ('$QuizId', '$NewCodeToQuiz');";
    if ($conn->multi_query($sql) === TRUE) {
        echo json_encode(array("QuizId"=>$QuizId,"QuizCode"=>$NewCodeToQuiz));
        
    } else {
        echo "error: generet Quiz code ";
        header('/pages/forms/editq.php');
    
    }
    $conn->close();
}



 ?>