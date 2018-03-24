
 <?php
	extract($_POST);

  $host="localhost";
  $user="Mayank";
  $pass="Mayank@123";
  $database="db_srm_lib";
  $table_name="book_master";
  $con=mysqli_connect($host,$user,$pass,$database);
  mysqli_select_db($con,$database);
  $query="DELETE FROM `book_master` WHERE `book_master`.`Book_Id` = $search_string ";
 mysqli_query($con,$query);
 header("location:lib.html"); 
?>
