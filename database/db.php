<?php 
  session_start();

  $conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'php_mysql_CRUD_07Dic23'
  ) or die(mysqli_error($mysqli));
?>