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
  $mysqli=new mysqli($host,$user,$pass,$database);
  if($mysqli->connect_errno)
  {
  	echo "<h1>Connection Unsuccessful</h1>";
  }
  //mysqli_select_db($con,$database);
  $query="SELECT * FROM $table_name WHERE User_ID='$username' AND User_PWD='$password'";
  //$count=mysqli_num_rows(mysqli_query($con,$query));
  $sql=$mysqli->query($query);
  session_start();
  if($sql->num_rows==1)
  {
  	$query1="SELECT user_master.User_ID FROM user_master where User_ID='$username' AND User_PWD='$password'";
  	$sql=$mysqli->query($query1);
  	$row=$sql->fetch_row();
  	$fname=$row[0];

  	$_SESSION['Sname']=$fname;
  	$_SESSION['Status']="Session Status:Login Success";

  	setcookie("username",$username,time()+60*60*24*30);
  	setcookie("password",$password,time()+60*60*24*30);
  	header("location:lib.html");
  }
  else
  {
  	unset($_SESSION['Sname']);
  	unset($_SESSION['Status']);
  	$_SESSION['Debug']="<h2>$username<br>$password</h2>";
  	header("location:index.html");
  	echo "Username and Password doesnot match!!!";
  }
  ?>
  </body>
</html>