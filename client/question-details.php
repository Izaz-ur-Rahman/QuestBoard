<div class="container">
  <h1 class="heading" style="text-align: left;">
    Question
  </h1>
  <div class="row">
    <div class="col-8">
      <?php
      include("./common/db.php");
      $query = "select * from questions where id = $qid";
      $result = $conn->query($query);

      $row = $result->fetch_assoc();
      $cid = $row['category_id'];
      echo "<h5 class='question_title'> Question: " . $row['title'] . "</h5>
            <p>" . $row['description'] . "</p>";
      include("./client/answers.php");

      ?>
      <form action="../server/requests.php" method="post">
        <input type="hidden" name="question_id" value="<?php echo isset($qid) ? $qid : ''; ?>">
        <textarea name="answer" class="form-control" placeholder="Your Answer..."></textarea>
        <button class="btn btn-success my-2" type="submit">Write Your Answer</button>
      </form>

    </div>
    <div class="col-4">
      <?php
      $categoryquery = "select * from categories where id = $cid";
      $categoryResult = $conn->query($categoryquery);
      $categoryRow = $categoryResult->fetch_assoc();
      echo "<h5>" . $categoryRow['name'] . "</h5>";

      $query = "select * from questions where category_id = $cid ";
      $result = $conn->query($query);
      foreach ($result as $row) {
        $id = $row['id'];
        $title = $row['title'];
        echo "
        <div class='question_list'><h5 class='question_title'><a href=?q-id= $id>$title</a></h5></div>";
      }
      ?>
    </div>
  </div>
</div>