<?php
session_start();
?>
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
  <div class="container mt-5">
    <form class="row justify-content-evenly was-validated" method="post"
      action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>' enctype="multipart/form-data">
      <div class="mb-3 col-md-6">
        <label for="validationText" class="form-label">Name</label>
        <input type="text" class="form-control" name="Teachername" id="validationText"
          placeholder="Required example textarea" required></input>
        <div class="invalid-feedback">
          Please enter your Name
        </div>
      </div>
      <div class="mb-3 col-md-6">
        <label for="validationText" class="form-label">Enter Your College Name</label>
        <input type="text" class="form-control" name="college" id="validationText"
          placeholder="Required example textarea" required></input>
        <div class="invalid-feedback">
          Please enter your college Name
        </div>
      </div>

      <div class="mb-3 col-md-6">
        <label for="validationText2" class="form-label">Mobile</label>
        <input type="tel" class="form-control" name="mobile" id="validationText2" maxlength="10"
          pattern="[6789][0-9]{9}" placeholder="Required Mobile Number" required></input>
        <div class="invalid-feedback">
          Please enter your Mobile No
        </div>
      </div>

      <div class="mb-3 col-md-6">
        <label for="validationText2" class="form-label">gmail</label>
        <input type="email" class="form-control" name="gmail" id="validationText2" placeholder="Required gmail"
          required></input>
        <div class="invalid-feedback">
          Please enter your gmail
        </div>
      </div>
      <div class="mb-3 col-md-6">
        <label for="userpassword" class="form-label">Enter password</label>
        <input type="password" name="password" class="form-control" id="userpassword"
          placeholder="Required example textarea" required></input>
        <div class="invalid-feedback">
          Please enter your password
        </div>
      </div>
      <div class="mb-3 col-md-6">
        <label for="Confirmpassword" class="form-label">Confirm password</label>
        <input type="password" name="Confirmpassword" class="form-control" id="Confirmpassword"
          placeholder="Required example textarea" required></input>
        <div class="invalid-feedback">
          Please Confirm your password
        </div>
      </div>
      <div class="mb-3 col-md-6">
        <label for="photo" class="form-label">profile picture</label>
        <input type="file" name="profile_pic" id="photo" class="form-control" aria-label="file example" required>
        <div class="invalid-feedback">Plase select your profile picture</div>
      </div>
      <div class="mb-3 col-md-6">
        <label for="photo" class="form-label">Upload your college or school id Proof</label>
        <input type="file" name="identity" id="photo" class="form-control" aria-label="file example" required>
        <div class="invalid-feedback"> select your ID Proof picture</div>
      </div>

      <div class="row justify-content-center">

        <div class="form-check mt-3 col-md-3 text">
          <input type="radio" class="form-check-input" id="validationFormCheck2" name="gender" required>
          <label class="form-check-label" for="validationFormCheck2">Male</label>
        </div>
        <div class="form-check mt-3 col-md-3 text">
          <input type="radio" class="form-check-input" id="validationFormCheck2" name="gender" required>
          <label class="form-check-label" for="validationFormCheck2">female</label>
        </div>
        <div class="form-check mt-3 mb-3 col-md-3">
          <input type="radio" class="form-check-input" id="validationFormCheck3" name="gender" required>
          <label class="form-check-label" for="validationFormCheck3">Other</label>

          <div class="invalid-feedback">please select your gender</div>
        </div>
      </div>
      <!-- visually-hidden -->
      <div class="mb-3 col-md-6  visually-hidden ">
        <label for="validationText" class="form-label">Unique Id</label>
        <input type="text" class="form-control" name="unique_id" id="unique_id" placeholder="Required example textarea"
          required></input>

      </div>

      <div class="mb-3 mt-5">
        <button class="btn btn-primary" type="submit">Submit form</button>
      </div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script>
    function capture(length) {
      let result = '';
      const cha = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
      const chalen = cha.length;
      let counter = 0;
      while (counter < length) {
        result = result + cha.charAt(Math.floor(Math.random() * chalen));
        counter = counter + 1;
      };
      return result;
    }
    let cap = capture(8);
    document.getElementById('unique_id').value = cap;
  </script>

</body>

</html>
<?php
require 'php/db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST['mobile']) && isset($_POST['gmail'])) {

    $_SESSION['username'] = test_input($_POST['Teachername']);
    $_SESSION['college'] = test_input($_POST['college']);
    $_SESSION['mobile'] = test_input($_POST['mobile']);
    $_SESSION['gmail'] = test_input($_POST['gmail']);
    $_SESSION['password'] = test_input($_POST['password']);
    $_SESSION['Confirmpassword'] = test_input($_POST['Confirmpassword']);
    // $_SESSION['folder'] = '/img/img-faculty/';
    if (!preg_match("/^[a-zA-Z-' ]*$/", $_SESSION['username'])) {
      echo "Only letters and white space allowed at user name";
    } else {
      if ($_SESSION['password'] != $_SESSION['Confirmpassword']) {
        echo 'password and confirm password are note same';
      } else {
        if (isset($_FILES["profile_pic"])) {
          $profile_pic_Type = $_FILES["profile_pic"]['type'];
          if (
            $profile_pic_Type != "image/jpg" && $profile_pic_Type != "image/png" && $profile_pic_Type != "image/jpeg"
          ) {
            echo "Sorry profile image type , only JPG, JPEG, PNG & GIF files are allowed.";

          } else {
            $profile_pic_size = $_FILES["profile_pic"]['size'];
            if (
              $profile_pic_size > 500000
            ) {
              echo 'please compress your profile image size because its greater than 500kb';
            } else {
              $_SESSION['profile_pic'] = $_FILES["profile_pic"];

              if (isset($_FILES["identity"])) {
                $identity_pic_Type = $_FILES["identity"]['type'];
                if ($identity_pic_Type != "image/jpg" && $profile_pic_Type != "image/png" && $identity_pic_Type != "image/jpeg") {
                  echo "Sorry identity image type , only JPG, JPEG, PNG & GIF files are allowed.";
                } else {
                  $identity_pic_size = $_FILES["identity"]['size'];
                  if (
                    $identity_pic_size > 500000
                  ) {
                    echo 'please compress your identity image size because its greater than 500kb';
                  } else {
                    $_SESSION['identity'] =$_FILES["identity"];
                    $phone= $_SESSION['mobile'];
                      $gmail = $_SESSION['gmail'];
                    $query = "SELECT * FROM `request` WHERE mobile =  '$phone'  ||  gmail = '$gmail'";
                    $result = mysqli_query($conn, $query);
                    if (!mysqli_num_rows($result) == 0) {
                      echo 'you are allredy sended a request please wait for confirmation and or mail on this gmail id ';
                    } else {
                      $phone = $_SESSION['mobile'];
                      $gmail = $_SESSION['gmail'];
                      $query2 = "SELECT * FROM `teachers` WHERE mobile =  '$phone'  ||  gmail = '$gmail'";
                      $result = mysqli_query($conn, $query2);
                      if (!mysqli_num_rows($result) == 0) {
                        echo 'you are alredy user plese go on the Login page';
                      } else {
                        // $_SESSION['identity_pic_filename'] = $_FILES["identity"];
                        // $_SESSION['identity_Tempname'] = $_FILES["identity"]['tmp_name'];
                        
                        // $_SESSION['profile_pic_Tempname'] = $_FILES["profile_pic"]['tmp_name'];
                        $_SESSION['unique_id'] = test_input($_POST['unique_id']);
                        $_SESSION['verify_otp'] = rand(100000, 999999);
                        $_SESSION['sending_status'] = 1;
                        echo 'query working';
                        echo '<script>
                    window.location.href="Teacherverify.php"</script>';
                      }
                    }
                  }
                }
              }
            }
          }
        }
      }
    }



  } else {
    echo 'mobile and gmail not set';
  }
} else {
  echo 'not working';
}
function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



// echo '<div class=" col-11 mx-5 alert alert-danger alert-dismissible fade show" role="alert" style="position: absolute;
// top:60px";>
// <strong>Holy guacamole!</strong> You should check in on some of those fields below.
// <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
// </div>';
?>