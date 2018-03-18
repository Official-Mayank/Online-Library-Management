<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 <?php
  extract($_POST);

  $host="localhost";
  $user="Mayank";
  $pass="Mayank@123";
  $database="db_srm_lib";
  $table_name="user_master";
  $con=mysqli_connect($host,$user,$pass,$database);
  mysqli_select_db($con,$database);
  $query="SELECT * FROM $table_name WHERE User_ID='$username' AND User_PWD='$password'";
  $count=mysqli_num_rows(mysqli_query($con,$query));
 
  if($count==1)
  {
  	echo "Login Success!!";
  }
  else
  	echo "Login Failed!!";
 ?>
</body>
</html>