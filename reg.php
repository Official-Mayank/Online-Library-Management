<?php
	extract($_POST);

  $host="localhost";
  $user="Mayank";
  $pass="Mayank@123";
  $database="db_srm_lib";
  $table_name="user_master";
  $student="student";
  $type="super";
  $srm="SRM";
  if($pwd===$cpwd)
  {
  	$pass=$pwd;
  }
  else
  {
  	echo "Password don't match";
  }
  $con=mysqli_connect($host,$user,$pass,$database);
  mysqli_select_db($con,$database);
  $query="INSERT INTO $table_name VALUES ('$regno','$uname','$student','$pass','$type','$gender','$dept','$email','$mobile','$srm') ";
 mysqli_query($con,$query);
 
?>