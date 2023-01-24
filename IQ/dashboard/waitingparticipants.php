<?php
include('../app/database/connect.php');
if (isset($_GET['QuizId']) && !empty($_GET['QuizCode'])) {
    $QuizId = $_GET['QuizId'];
    $QuizCode = $_GET['QuizCode'];

    $rows = mysqli_query($conn, "SELECT * FROM participants where Quizid= '$QuizId' And QuizCode='$QuizCode';");

?>


    <?php $i = 1; ?>
    <?php if ($rows->num_rows > 0) : ?>

    <?php foreach ($rows as $row) : ?>
        <tr>
            <td class="py-1">
                <img src="assets/images/faces-clipart/pic-1.png" alt="image">
            </td>
            <td> <?php echo $row['ParticipantsName'] ?> </td>
            <td>
                <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </td>
            
        </tr>
    
<?php endforeach; ?>
<?php else: ?>
<tr>
    No one Join the quiz yet
</tr>
 <?php endif; }?>