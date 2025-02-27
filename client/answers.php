<div class="container">
    <h5>Answers:</h5>

    <?php
    include("./common/db.php");
    $question_id =
        $query = "select * from answers where question_id = $qid";
        $result = $conn->query($query);
        foreach ($result as $row) {
            # code...
            $answer = $row['answer'];
            echo "<div class='row'>
                <p>
                    $answer
                </p>
            </div>";
        }
    ?>
</div>