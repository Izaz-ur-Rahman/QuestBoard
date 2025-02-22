<div class="container">
  <h1 class="heading">Login form</h1>
  <form action="../server/requests.php" method="post">


    <div class="form-group col-6 offset-sm-3">
      <label for="email">User Email</label>
      <input type="email" name="email" class="form-control" id="email" placeholder="Enter User email">

    </div>
    <div class="form-group col-6 offset-sm-3">
      <label for="pass">Password</label>
      <input type="password" name="password" class="form-control" id="pass" placeholder="Enter Password">

    </div>

    <div class="col-6 offset-sm-3">
      <button type="submit" name="login" class="btn btn-primary">Login</button>

    </div>
  </form>
</div>