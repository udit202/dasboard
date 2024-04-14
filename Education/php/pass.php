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
            <label for="userpassword" class="form-label">Enter name</label>
            <input type="text" class="form-control" name="username" id="userpassword" placeholder="password"
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
    if (isset($_POST['username'])) {
        $username = $_POST['username'];
        $password = $_POST['userpassword'];
        $hash =  
        $sql = "INSERT INTO `passcheck` (`name`, `password`) VALUES ( '$username', '$hash')";
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
}
?>

