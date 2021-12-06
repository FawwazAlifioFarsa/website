<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title></title>
</head>
<body>
  <div class="row" style="padding-top: 10px;padding-bottom:10px;">
      <div class="col-md-2">
        <form action="proses_register.php" method="post">
          <h1 align="center">Register</h1>
          <div class="form">
            Username
            <input type="text" name="username" class="form-control" style="margin-bottom: 12px;">
            Email
            <input type="text" name="email" class="form-control" style="margin-bottom: 12px;">
            Phone Number
            <input type="text" name="phone" class="form-control" style="margin-bottom: 12px;">
            Password
            <input type="text" name="password" class="form-control" style="margin-bottom: 12px;">
            Confirm Password
            <input type="text" name="confirm_password" class="form-control" style="margin-bottom: 21px;">
            <div class="submit">
              <input type="submit" name="login" class="button" value="REGISTER"><br>
            </div>
          </div>
        </form>
        <div class="account">
        Already have an account? <a href="login.php">Log in</a>
        </div>
      </div>
  </div>
</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</html>
