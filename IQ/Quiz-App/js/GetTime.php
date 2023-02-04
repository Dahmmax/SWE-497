<?php 
include('../../app/database/connect.php');


if (isset($_POST['Qid'])) {

    $QuizId = $_POST['Qid'];



    $sql = "SELECT Duration, QuizTitle,GradingType FROM quiz WHERE QuizId=$QuizId";

    $result = mysqli_query($conn, $sql);
    $info = [];

    while( $row = mysqli_fetch_row( $result ) ){
        array_push( $info, $row );
    }
    
    echo json_encode( $info );
    mysqli_close($conn);
}
?>