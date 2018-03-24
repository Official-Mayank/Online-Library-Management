<?php
	extract($_POST);

  $host="localhost";
  $user="Mayank";
  $pass="Mayank@123";
  $database="db_srm_lib";
  $table_name="book_issue_details";

  $con=mysqli_connect($host,$user,$pass,$database);
  mysqli_select_db($con,$database);
  $rawdate1= htmlentities($_POST['BookIssueDate']);
  $rawdate2= htmlentities($_POST['ReturnDate']);
  $date = date('Y-m-d', strtotime($rawdate1));
  $date1 = date('Y-m-d', strtotime($rawdate2));
  $query="INSERT INTO $table_name (`Book_Issue_Id`, `Book_Issue_Date`, `Book_Id`, `User_Id`, `Return_Date`, `Return_Status`, `Fine_Amount`, `Fine_Amount_Paid`, `Library_Name`, `Issued_By`, `Returned_By`) VALUES ('$BookIssueId',$date,'$BookId','$UserId',$date1,'$ReturnStatus','$FineAmount','$FineAmountPaid','$LibraryName','$IssuedBy','$ReturnedBy');"
 mysqli_query($con,$query);
 echo "Book Issued Successfully!!";
 header("location:lib.html");
?>