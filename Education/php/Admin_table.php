<!-- CREATE TABLE `education_material`.`admin` (`id` INT(15) NOT NULL AUTO_INCREMENT , `img` VARCHAR(800) NOT NULL , `name` VARCHAR(40) NOT NULL , `gender` VARCHAR(10) NOT NULL , `position` VARCHAR(30) NOT NULL , `phone` VARCHAR(10) NOT NULL , `gmail` VARCHAR(50) NOT NULL , `password` VARCHAR(100) NOT NULL , `uniqueid` VARCHAR(10) NOT NULL , PRIMARY KEY (`id`), UNIQUE (`phone`)) ENGINE = InnoDB; -->

<!-- query -->
<!-- INSERT INTO `admin` (`id`, `img`, `name`, `gender`, `position`, `phone`, `gmail`, `password`, `uniqueid`) VALUES (NULL, '', 'udit', '', '', '', '', '', ''); -->
<?php
require 'db.php';
// Create connection
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE `education_material`.`admin` (`id` INT(15) NOT NULL AUTO_INCREMENT , `img` VARCHAR(800) NOT NULL , `name` VARCHAR(40) NOT NULL , `gender` VARCHAR(10) NOT NULL , `position` VARCHAR(30) NOT NULL , `phone` VARCHAR(10) NOT NULL , `gmail` VARCHAR(50) NOT NULL , `password` VARCHAR(100) NOT NULL , `uniqueid` VARCHAR(10) NOT NULL , PRIMARY KEY (`id`), UNIQUE (`phone`)) ENGINE = InnoDB";

if (mysqli_query($conn, $sql)) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>