<div class="container">
    <h1 class="text-center">
        Questions
    </h1>
    <div class="col-8">
        <?php
include('./common/db.php');
$query = "select * from questions";
$result = $conn->query($query);

    foreach ($result as $row) {

        $title = $row['title'];
        $id = $row['id'];
        echo "<div class='row  question_list '>
        <h5><a href='?q-id=$id'>$title</a></h5>
        </div>";
    }


    ?>
    </div>
</div>