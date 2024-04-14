<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form class="row col-md-6 was-validated" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>'
        method="post">



        <div class="mb-3 ">
            <label for="userpassword" class="form-label">Enter id</label>
            <input type="number" class="form-control" name="id" id="userpassword" placeholder="password"
                required></input>
        </div>
        <br>
        <div class="mb-3 ">
            <label for="userpassword" class="form-label">Enter password</label>
            <input type="password" class="form-control" name="userpassword" id="userpassword" placeholder="password"
                required></input>
        </div>
        <br>
        <div class="mb-3 mt-5">
            <button class="btn btn-primary" type="submit">Submit form</button>
        </div>
    </form>
    <br>
</body>

</html>
<?php
require 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST['id'])) {
    $userid = $_POST['id'];
    $password = $_POST['userpassword'];
    $sql = "SELECT * FROM passcheck WHERE id= $userid ";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      // output data of each row
      while ($row = mysqli_fetch_assoc($result)) {
        echo 'true';
        echo '<br>';
        echo $row['name'];
        echo '<br>';
        echo $row['password'];
        echo '<br>';
        if (password_verify($password, $row['password'])) {
          echo "<br>";
          echo 'same password';
        } else {
          echo "<br>";
          echo 'not same password';
        }
      }
    } else {
      echo "0 results";
    }
  }
}



?>