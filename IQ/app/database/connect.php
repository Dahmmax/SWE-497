<?php

 $conn = mysqli_connect('localhost', 'root', '', 'iq');

if ($conn->connect_error) {

    echo "Database connection error";

    die('Database connection error:' . $conn->connect_error);
}

?>