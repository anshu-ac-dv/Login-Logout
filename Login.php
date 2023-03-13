<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <?php

    // Start the session for user login.
      session_start();
    // Check user click on login button.
      if (isset($_POST['login'])) {
        // Connect database.
        include 'dbcon.php';
        // Set variable for Username and password.
        $username = $_POST['username'];
        $password = $_POST['password'];
        // Fatch the record into the database.
        $sql = "SELECT * FROM registration WHERE Email ='$username' AND Password='$password'";
        // Execute the query.
        $r = mysqli_query($conn, $sql);
        // Fatch the quesry.
        $row = mysqli_fetch_assoc($r);
        // Check email and password is same as it is in the database.
        if ($row['Email'] === $username && $row['Password'] === $password) {
              header("Location: Dashboard.php");
            exit();
          }
          else{
            echo "<script>alert('Please enter username and password.');</script>";
          }
        }

    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <div class="container">
      <form class="p-5 shadow bg-info" action="Login.php" method="post">
        <center><h3>Login Now</h3></center>
        <div class="row g-3">
          <div class="col mb-3 mt-5">
            <label class="form-label">Enter Email</label>
            <input type="email" class="form-control" name="username">
          </div>
          <div class="col mb-3 mt-5">
            <label class="form-label">Enter Password</label>
            <input type="password" class="form-control" name="password">
          </div>
        </div>
        <button type="submit" name="login" class="btn btn-primary">Login Now</button>
      </form>
    </div>
  </body>
</html>