<div class="container">

    <div class="row">
    <div class="col-8">
        <h1 class="text-center">
            Questions
        </h1>
        <?php

include('./common/db.php');
if(isset($_GET['c-id'])){

    $query = "select * from questions where category_id = $cid";

}
else{
    echo "all quesion query is executed ";
    $query = "select * from questions";

}
// $query = "select * from questions";
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

    <div class="col-4">
        <?php include("categorylist.php");?>
    </div>
   </div>
</div>