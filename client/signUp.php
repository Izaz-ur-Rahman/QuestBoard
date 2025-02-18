<div class="container">
    <h1 class="heading">SignUp form</h1>
    <form method="post" action="/server/requests.php">
        <div class="form-group col-6 offset-sm-3">
          <label for="username">User Name</label>
          <input type="text" name="username" class="form-control" id="username"  placeholder="Enter User Name">

        </div>

        <div class="form-group col-6 offset-sm-3">
            <label for="email">User Email</label>
            <input type="email" name="email" class="form-control" id="email"  placeholder="Enter User email">

          </div>
          <div class="form-group col-6 offset-sm-3">
            <label for="pass">Password</label>
            <input type="password" name="password" class="form-control" id="pass"  placeholder="Enter Password">

          </div>
          <div class="form-group col-6 offset-sm-3">
            <label for="address">User Address</label>
            <input type="text" name="address" class="form-control" id="address"  placeholder="Enter Address">

          </div>
          <div class="col-6 offset-sm-3">
            <button type="submit" name="SignUp" class="btn btn-primary">SignUp</button>

          </div>
      </form>
</div>