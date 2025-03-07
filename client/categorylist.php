<div>
    <h1 class="text-center">Category</h1>
    <?php
    include("./common/db.php");
    $query = "select * from categories";
$result = $conn->query($query);

    foreach ($result as $row) {

        $name = ucfirst($row['name']);
        $id = $row['id'];
        echo "<div class='row  question_list '>
        <h5><a href='?c-id=$id'>$name</a></h5>
        </div>";
    }

    ?>
</div>