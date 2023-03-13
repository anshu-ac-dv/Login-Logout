<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Regsiter User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
  <?php
    // Check user click on Register now button if click then go into the body of if statement.
    if (isset($_POST['submit'])) {
      // Connect the database and table in database.
        include 'dbcon.php';
        // Set variables for input feilds.
        $dob = $_POST['dob'];
        $mat = $_POST['mat'];
        $mar = $_POST['mar'];
        $qual = $_POST['qual'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $pname = $_POST['pname'];
        $mname = $_POST['mname'];
        $marks = $_POST['marks'];
        $email = $_POST['email'];
        $password = $_POST['pass'];
        $gander = $_POST['gander'];
        // Insert the data into the database using insert query.
        $sql = "INSERT INTO `registration`(`First Name`, `Last Name`, `Father Name`, `Mother Name`, `Date Of Birth`, `Gander`, `10th Roll Number`, `Mark`, `High Qualification`, `Marks`, `Email`, `Password`) 
                VALUES ('$fname','$lname','$pname','$mname','$dob','$gander','$mat','$mar','$qual','$marks','$email','$password')";
        // Execute the query.
        $r = mysqli_query($conn,$sql);
        // Check query execution is scuess or not if scuess the execute if body otherwise execute else body.
        if ($r==true) {
            // Shhow alert to scuessfull regsitration. 
            echo "<script>alert('Your account is sucessfully created.');</script>";
        }
        else {
            // Else show Error into the body in regsitration page.
            echo "Error";
         }
      }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
      <form class="form container mt-0 shadow p-5 bg-info" action="Register.php" method="POST">
        <center><h3>Registration Form</h3></center>
        <div class="row g-3">
          <div class="col mb-3 mt-5">
            <label class="form-label">First Name</label>
            <input type="text" class="form-control" require aria-label="First name" name="fname">
          </div>
          <div class="col mb-3 mt-5">
            <label class="form-label">Last Name</label>
            <input type="text" class="form-control" aria-label="Last name" name="lname">
          </div>
        </div>
        <div class="row g-3">
          <div class="col mb-3">
            <label class="form-label">Father's Name</label>
            <input type="text" class="form-control" name="pname">
          </div>
          <div class="col mb-3">
            <label class="form-label">Mother's Name</label>
            <input type="text" class="form-control" name="mname">
          </div>
        </div>
        <div class="row g-3">
          <div class="col mb-3">
            <label class="form-label">Date of Birth</label>
            <input type="date" class="form-control" name="dob">
          </div>
          <div class="col mb-3">
            <label class="form-label">Gander</label>
            <select class="form-select" aria-label="Default select example" name="gander">
              <option>Chhose any option</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
              <option value="Others">Others</option>
          </select>
          </div>
        </div>
        <div class="row g-3">
          <div class="col mb-3">
            <label class="form-label">10th Roll Number</label>
            <input type="number" class="form-control" name="mat">
          </div>
          <div class="col mb-3">
            <label class="form-label">Marks</label>
            <input type="number" class="form-control" name="mar">
          </div>
        </div>
        <div class="row g-3">
        <div class="col mb-3">
            <label class="form-label">Higest Qualification</label>
            <select class="form-select" aria-label="Default select example" name="qual">
              <option selected>Chhose any option</option>
              <option value="Matric">10th</option>
              <option value="Inter">12th</option>
              <option value="Diploma">Diploma</option>
              <option value="Batchlors of Technology">B.tech</option>
              <option value="BCA">BCA</option>
              <option value="BA">BA(Hons.)</option>
          </select>
          </div>
          <div class="col mb-3">
            <label class="form-label">Marks</label>
            <input type="number" class="form-control" name="marks" id="">
          </div>
        </div>
        <div class="mb-3">
          <label class="form-label">Email address</label>
          <input type="email" class="form-control" name="email">
        </div>
        <div class="mb-3">
          <label fo class="form-label">Password</label>
          <input type="password" class="form-control" name="pass">
        </div>
        
        <button type="submit" name="submit" class="btn btn-primary">Register Now</button>
        <br><br><span>If you are already registred then<a href="Login.php">login.</a></span>
      </form>
    
  </body>
</html>