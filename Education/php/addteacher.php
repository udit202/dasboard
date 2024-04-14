<?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          if (isset($_POST['add_entry'])) {
            $name = $_POST['teachername'];
            $college = $_POST['college'];
            $mobile = $_POST['mobile'];
            $gmail = $_POST['gmail'];
            $gender = $_POST['gender'];
            $password = $_POST['password'];
            $unique = $_POST['uniqueid'];
            if ($gender == 'Male') {
              $img = 'images/men.jpeg';
            } else {
              $img = 'images/women.png';
            }
            $query = "INSERT INTO `teachers`(`name`, `photo`, `college`, `gender`, `mobile`, `gmail`, `password`,  `UniqueId`) VALUES ('$name','$img','$college','$gender','$mobile','$gmail','$password', '$unique')";
            $result = mysqli_query($conn, $query);
            if ($result) {
              $del_id=$_POST['gmail'];              
              $querydel = "DELETE FROM `request` WHERE `gmail` = '$del_id'";
              $result2 = mysqli_query($conn, $querydel);
              if ($result2) {
                echo "succesful working";
                $loc = $_SERVER["PHP_SELF"];
                echo '<script>
                                window.location.href="http://localhost/EDUCATION/Admin.php"</script>';
                
              } else {
                echo "jlgs";
              }
            } else {
              echo 'sorry';
            }
          }
        }

        ?>