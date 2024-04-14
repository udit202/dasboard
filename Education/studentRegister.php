<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <!-- navbar  -->
  <nav class="navbar navbar-expand-lg  bg-dark border-bottom border-body" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="homepage.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="Admin.html">Admin</a></li>
              <li><a class="dropdown-item" href="studentlogin.html">Student Login</a></li>
              <li><a class="dropdown-item" href="studentRegister.html"> Student Register</a></li>
              <li><a class="dropdown-item" href="Teacherlogin.html"> Teachers Login</a></li>
              <li><a class="dropdown-item" href="TeacherRegister.html"> Teacher Register</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
            </ul>
          </li>

        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <!-- Teachers Register Form -->
  <div class="container-fluid mt-5">
    <div class="row justify-content-center">
      <form class="row col-md-6 was-validated" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' method="post">
        <div class="mb-3 ">
          <label for="validationText" class="form-label">Name</label>
          <input type="text" class="form-control" name="studentname" id="validationText" placeholder="Required example textarea"
            required></input>
          <div class="invalid-feedback">
            Please enter your Name
          </div>
        </div>

        <div class="mb-3">
          <label for="validationText2" class="form-label">Mobile</label>
          <input type="tel" class="form-control" id="validationText2" maxlength="10" pattern="[6789][0-9]{9}"
            placeholder="Required Mobile Number" name="studentMobile" required></input>
          <div class="invalid-feedback">
            Please enter your Mobile No
          </div>
        </div>

        <div class="mb-3 ">
          <label for="validationText2" class="form-label">Email</label>
          <input type="email" class="form-control"  name="email" id="validationText2" placeholder="Required gmail" required></input>
          <div class="invalid-feedback">
            Please enter your gmail
          </div>
        </div>

        <div class="mb-3 ">
          <label for="userpassword" class="form-label">Enter password</label>
          <input type="password" class="form-control" name="userpassword" id="userpassword" placeholder="Required example textarea"
            required></input>
          <div class="invalid-feedback">
            Please enter your password
          </div>
        </div>
        <div class="mb-3">
          <label for="Confirmpassword" class="form-label">Confirm password</label>
          <input type="password" class="form-control"  name="Confirmpassword" id="Confirmpassword" placeholder="Required example textarea"
            required></input>
          <div class="invalid-feedback">
            Please Confirm your password
          </div>
        </div>
        <div class="mb-3 ">
          <label for="photo" class="form-label">profile picture</label>
          <input type="file" id="photo" name="userimage" class="form-control" aria-label="file example" required>
          <div class="invalid-feedback">Plase select your profile picture</div>
        </div>
        <div class="mb-3 mt-5">
          <button class="btn btn-primary" type="submit">Submit form</button>
        </div>
      </form>
    </div>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>
</html>
<?php 
require 'php/db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 if(isset($_POST['studentMobile'])){
  $name =  test_input($_POST["studentname"]);
  if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
    echo  "Only letters and white space allowed";
  }
  else{
    $name = $_POST["studentname"];
  }
  $email =  test_input($_POST["email"]);
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo  "Invalid email format";
  }
  else{
    $email =$_POST["email"];
  }
  $mobile_no = $_POST['studentMobile'];
  $userpassword = $_POST['userpassword'];
  $Confirmpassword = $_POST['Confirmpassword'];
  if($userpassword!=$Confirmpassword){
    echo 'password and confirm password are not same';
  }
  else{
    $password = $Confirmpassword;
  }
  
 
 }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
