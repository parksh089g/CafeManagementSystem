<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$servername = "localhost:3307";
$username = $_GET["id"];
$password = $_GET["pwd"];
$dbname="testweb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname );

// Check connection
if (!$conn) {
  echo "<script>alert(\"존재하지 않은 아이디거나 비밀번호를 잘못 입력하셨습니다.\");</script>";
  echo "<script>location.href='http://localhost/databasePROJECT/initialScreen.php'</script>";
}
else{

  echo "<script>location.href='http://localhost/databasePROJECT/mainScreen.php'</script>";
}
mysql_close($conn) ;
?>

