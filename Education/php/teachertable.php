<!-- verified teachers_table -->

<?php
require 'db.php';
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  
  // sql to create table
  $sql = "CREATE TABLE `education_material`.`teachers` (`id` INT(50) NOT NULL AUTO_INCREMENT , `name` VARCHAR(255) NOT NULL , `photo` VARCHAR(400) NOT NULL , `college` VARCHAR(255) NOT NULL ,  `gender` VARCHAR(255) NOT NULL ,`mobile` VARCHAR(20) NOT NULL , `gmail` VARCHAR(50) NOT NULL , `password` VARCHAR(255) NOT NULL , `token` VARCHAR(255) NULL , `expiretoken` DATE NULL , `UniqueId` VARCHAR(50) NOT NULL , PRIMARY KEY (`id`), UNIQUE (`mobile`(20)), UNIQUE (`gmail`(50)), UNIQUE (`UniqueId`(50))) ENGINE = InnoDB";
  
  if (mysqli_query($conn, $sql)) {
    echo "Table MyGuests created successfully";
  } else {
    echo "Error creating table: " . mysqli_error($conn);
  }
  
  mysqli_close($conn);
  ?>