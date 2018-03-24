
<?php
	extract($_POST);

  $host="localhost";
  $user="Mayank";
  $pass="Mayank@123";
  $database="db_srm_lib";
  $table_name="book_master";

  $con=mysqli_connect($host,$user,$pass,$database);
  mysqli_select_db($con,$database);
  $query="INSERT INTO `book_master` (`Book_Id`, `Book_Title`, `Edition`, `Author1`, `Author2`, `Author3`, `Price`, `Publisher`, `Book_Type`, `Book_Status`, `Branch`, `Loc`, `Library_Name`) VALUES ('$BookId', '$BookTitle', '$Edition', '$Author1', '$Author2', '$Author3', '$Price', '$Publisher', '$Type', '$BookStatus', '$Branch', '$Location', '$Library')"; 
 mysqli_query($con,$query);
 header("location:lib.html");
 
?>