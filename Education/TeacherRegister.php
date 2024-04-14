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


      <div class="row justify-content-center">

        <div class="form-check mt-3 col-md-3 text">
          <input type="radio" class="form-check-input" id="validationFormCheck2" name="gender" value="Male" required>
          <label class="form-check-label" for="validationFormCheck2">Male</label>
        </div>
        <div class="form-check mt-3 col-md-3 text">
          <input type="radio" class="form-check-input" id="validationFormCheck2" value="female" name="gender" required>
          <label class="form-check-label" for="validationFormCheck2">female</label>
        </div>

      </div>
      <!-- visually-hidden -->
      <div class="mb-3 col-md-6  visually-hidden ">
        <label for="validationText" class="form-label">Unique Id</label>
        <input type="text" class="form-control" name="unique_id" id="unique_id" placeholder="Required example textarea" value="<?php $n = 10;
         echo getRandomString($n);?>"
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

</body>

</html>
<?php


require 'php/db.php';
// define variables and set to empty values
global $name, $email, $college, $password, $confirm, $uniqueid, $mobile, $gender;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["Teachername"])) {
    echo "Name is required";
  } else {
    $GLOBALS['name'] = test_input($_POST["Teachername"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/", $GLOBALS['name'])) {
      echo "Only letters and white space allowed";
    } else {
      $GLOBALS['name'] = test_input($_POST["Teachername"]);
      if (empty($_POST["gmail"])) {
        echo "Email is required";
      } else {
        $GLOBALS['email'] = test_input($_POST['gmail']);
        // check if e-mail address is well-formed
        if (!filter_var($GLOBALS['email'], FILTER_VALIDATE_EMAIL)) {
          echo "Invalid email format";
        } else {
          $GLOBALS['email'] = test_input($_POST['gmail']);
          if (empty($_POST["college"])) {
            echo 'please enter your college name';
          } else {
            $GLOBALS['college'] = test_input($_POST["college"]);
            // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
            if (!preg_match("/^[a-zA-Z-' ]*$/", $GLOBALS['college'])) {
              echo 'please enter Valid college  name';
            } else {
              $GLOBALS['college'] = test_input($_POST["college"]);
              if (empty($_POST["mobile"])) {
                echo 'please enter your college name';
              } else {
                $GLOBALS['mobile'] = test_input($_POST["mobile"]);
                if (!preg_match('/^[6-9][0-9]{9}$/', $GLOBALS['mobile'])) {
                  // Valid mobile number
                  echo "Sorry, your mobile number is invalid.";

                } else {
                  // Invalid mobile number
                  $GLOBALS['mobile'] = test_input($_POST["mobile"]);
                  if (empty($_POST["gender"])) {
                    echo "Gender is required";

                  } else {
                    $GLOBALS['gender'] = test_input($_POST["gender"]);
                    if (empty($_POST["password"])) {
                      echo "password is required";
                    } else {
                      $GLOBALS['password'] = test_input($_POST["password"]);
                      if (empty($_POST["Confirmpassword"])) {
                        echo "password is required";
                      } else {
                        $GLOBALS['confirm'] = test_input($_POST["Confirmpassword"]);
                        if ($GLOBALS['confirm'] != $GLOBALS['password']) {
                          echo 'password and confirm password are note same';
                        } else {
                          if (empty($_POST["unique_id"])) {
                            echo "please dont try to over smart";
                          } else {
                            $GLOBALS['uniqueid'] = test_input($_POST["unique_id"]);
                            $mobile_no = $GLOBALS['mobile'];
                            $gmail_id = $GLOBALS['email'];
                            $query = "SELECT * FROM `request` WHERE mobile =  '$mobile_no'  ||  gmail = '$gmail_id'";
                            $result = mysqli_query($conn, $query);
                            if (!mysqli_num_rows($result) == 0) {
                              echo 'you are allredy sended a request please wait for confirmation and or mail on this gmail id ';
                            } else {
                              $mobile_no = $GLOBALS['mobile'];
                              $gmail_id = $GLOBALS['email'];
                              $query = "SELECT * FROM `teachers` WHERE mobile =  '$mobile_no'  ||  gmail = '$gmail_id'";
                              $result = mysqli_query($conn, $query);
                              if (!mysqli_num_rows($result) == 0) {
                                echo 'you are allredy Register please go on the Login Page';
                              } else {
                                // SELECT * FROM `request` WHERE UniqueId =  '$unique'
                                $unique = $GLOBALS['uniqueid'];
                                $query = "SELECT * FROM `teachers` WHERE UniqueId =  '$unique'  ";
                                $result = mysqli_query($conn, $query);
                                if (!mysqli_num_rows($result) == 0) {
                                  echo 'Please Reenter Your data cause of technical issue';
                                } else {
                                  $unique = $GLOBALS['uniqueid'];
                                  $query = "SELECT * FROM `request` WHERE UniqueId =  '$unique'";
                                  $result = mysqli_query($conn, $query);
                                  if (!mysqli_num_rows($result) == 0) {
                                    echo 'Please Reenter Your data cause of technical issue';
                                  } else {
                                   echo '<script>
                            alert("We are Sended a confirmation code at your gmail id")
                            
                                </script>';
                                echo '<script>
                                window.location.href="Teacherverify.php"</script>';
                                $_SESSION['username'] = $GLOBALS['name'];
                                $_SESSION['college'] = $GLOBALS['college'];
                                $_SESSION['mobile'] = $GLOBALS['mobile'];
                                $_SESSION['gmail'] = $GLOBALS['email'];
                                $_SESSION['gender'] = $GLOBALS['gender'];
                                $_SESSION['password'] = $GLOBALS['password'];
                                $_SESSION['unique_id'] = $GLOBALS['uniqueid'];
                                $_SESSION['verify_otp'] = rand(100000, 999999);
                                $_SESSION['sending_status'] = 1;
  
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

              }
            }
          }
        }
      }
    }
  }
}



function getRandomString($n) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }
    return $randomString;
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
<!-- /*
/* -->