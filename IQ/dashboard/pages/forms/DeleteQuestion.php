<?php
include('../../../app/database/connect.php');
session_start();

$QuestionId = $_POST["QuestionId"];





$sql = "DELETE FROM question WHERE Question_Id = $QuestionId";
if ($conn->query($sql) === TRUE) {
    echo "DATA Deleted";
} else {

$conn->close();
}
?>