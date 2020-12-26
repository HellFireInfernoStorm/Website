<?php
  $DB_Server = "localhost";
  $DB_User = "root";
  $DB_Pass = "";
  $DB_Name = "website";

  $link = mysqli_connect($DB_Server, $DB_User, $DB_Pass, $DB_Name);

  if ($link === false) {
    die("Error : Connection Error." . mysqli_connect_error());
  }
?>