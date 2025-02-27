<div class="container">
  <h1 class="heading">
    Question
  </h1>
  <div class="col-8">
    <?php
    include("./common/db.php");

    $query = "select * from questions where id = $qid";
    $result = $conn->query($query);

    $row = $result->fetch_assoc();
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
</div>