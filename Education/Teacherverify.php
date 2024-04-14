<?php
require 'php/db.php';
session_start();
echo var_dump($_SESSION);

if (isset($_SESSION['mobile']) && (isset($_SESSION['gmail'])) && (isset($_SESSION['sending_status']))) {
    if ($_SESSION['sending_status'] < 5) {
        $Usergmail = $_SESSION['gmail'];
        $username = $_SESSION['username'];
        $otp = $_SESSION["verify_otp"];
        if (sendmail($Usergmail, $username, $otp)) {
            echo 'code sended succesfully';
            $_SESSION['sending_status'] += 1;
            
        } else {
            echo 'please enter a valid Gmail Id';
        }
    }
}
if (isset($_SESSION['mobile']) && (isset($_SESSION['gmail']))) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['Userotp']) && isset($_POST['verify'])) {
            $userotp = test_input($_POST['Userotp']);
            if ($userotp == $_SESSION['verify_otp']) {

                $name = $_SESSION['username'];
                $college = $_SESSION['college'];
                $mobile = $_SESSION['mobile'];
                $gmail = $_SESSION['gmail'];
                $gender = $_SESSION['gender'];
                $password =password_hash($_SESSION['password'], PASSWORD_DEFAULT); 
                $unique = $_SESSION['unique_id'];
                if($gender=='Male'){
                    $img ='images/men.jpeg';
                }
                else{
                    $img ='images/women.png';
                }
                $query ="INSERT INTO `request`(`name`, `photo`, `college`, `gender`, `mobile`, `gmail`, `password`, `UniqueId`) VALUES ('$name','$img','$college','$gender','$mobile','$gmail','$password','$unique')";
                $result = mysqli_query($conn,$query);
                if($result){
                    echo 'data enter succesfully';
                    header('Location: TeacherRegister.php');
                }
                else{
                    echo 'query not working';
                }
            } else {
                echo 'please enter a valid otp';
            }

        }

    }
}
function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
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

    <div class="row d-flex justify-content-center mt-5">
        <div class="col-4 justify-content-center text-center">
            <h1>Logo</h1>
        </div>
    </div>
    <div class="row d-flex justify-content-center mt-5">
        <div class="col-4">
            <p>
                We are Send a Verication code at your <?php echo $_SESSION['gmail']; ?> Gmail Id this So please Enter
                the
                Verifiacation code;
            </p>
        </div>
    </div>
    <form class="row justify-content-center was-validated" method="post"
        action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>'>
        <div class="row d-flex justify-content-center mt-2">
            <div class="mb-3 col-md-4">
                <label for="validationText" class="form-label">Name</label>
                <input type="number" class="form-control" name="Userotp" id="validationText"
                    placeholder="Required example textarea" required></input>
                <div class="invalid-feedback">
                    Please enter your Name
                </div>
            </div>
        </div>

        <div class="row d-flex justify-content-center mt-1">
            <div class="mb-3 col-md-4">
                <input type="submit" name="verify" value="verify" class="btn btn-primary">
            </div>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>

</html>
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function sendmail($usermail, $name, $otp)
{

    //Load Composer's autoloader
    require 'PHPmailer/Exception.php';
    require 'PHPmailer/PHPMailer.php';
    require 'PHPmailer/SMTP.php';

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
//Enable verbose debug output
        $mail->isSMTP();
        $mail->Host = ' smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth = true;                                   //Enable SMTP authentication
        $mail->Username = 'uditdhiman993@gmail.com';                     //SMTP username
        $mail->Password = 'qwlxjmvxgzxdhhbd';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('uditdhiman993@gmail.com', 'learn');
        $mail->addAddress($usermail, $name);     //Add a recipient
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Here is the subject';
        $mail->Body = 'your otp is <b>in bold!</b><br>' . $otp;

        $mail->send();
        return true;
    } catch (Exception $e) {
        return false;
    }
}
?>