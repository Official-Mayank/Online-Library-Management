<!DOCTYPE html>
<html>
 <link rel = "stylesheet" 
 type = "text/css" 
 href = "lib.css"/>
<head>
  <title>Logi-n</title>
</head>
<script language="Javascript">

            function isEmpty(){ 

                if(document.remove.search_string.value == "")
                {
                    alert(" The Book Id can not be empty!!");
                }
                return;
            }


        </script>

<body align="center">
<div class="nav" id="home">
  <ul>
    <li style="float:left; margin-left:30px; height:"><a href="#"><img src="image/icon1.png"></a></li>
      <li style="float:left;"><a href="#">ONLINE LIBRARY</a></li>
    <li><a href="index.html">Logout</a></li>
    <li><a href="#register">Issue</a></li>
    <li><a href="#search">Search</a></li>
    <li><a href="#home">Home</a></li> 
  </ul>
 </div>
 <div class="head">
  <img src="image/book1.jpg" width="100%" height="550px">
  <div class="center-text">
   ONLINE LIBRARY
  </div>  
 </div>
 <div class="search" id="search">
  <center>
  <form method="post" action="search.php">
  <table valign="left" border="0" cellspacing="4" cellpadding="4">
          <tr><td><b>Enter</b></td><td><input type="text" name="search_string"></td></tr>
          <tr><td><b></b></td><td><input type="radio" name="type" value="Bookid">Book Id
          <input type="radio" name="type" value="Title">Title
          <input type="radio" name="type" value="Title">Author</td></tr>
          <tr><td></td><td><input type="submit" value=" Submit " name="btnsubmit"></td></tr>
        </table>
  </form>
  </center>
  <br>
  <center>
 <?php
	extract($_POST);

  $host="localhost";
  $user="Mayank";
  $pass="Mayank@123";
  $database="db_srm_lib";
  $table_name="book_master";
  $s="1011";
  $mysqli=new mysqli($host,$user,$pass,$database);
 // if($type=="Bookid")
  //{
  $query="SELECT book_master.Book_Id,book_master.Book_Title,book_master.Author1,book_master.Book_Status,book_master.Library_Name FROM $table_name  WHERE Book_Id=$search_string";
  //}
  /*if($type=="Title")
    {
       $query="SELECT book_master.Book_Id,book_master.Book_Title,book_master.Author1,book_master.Book_Status,book_master.Library_Name FROM $table_name  WHERE Book_Title=$search_string";
    }
  if($type="Author")  {
     $query="SELECT book_master.Book_Id,book_master.Book_Title,book_master.Author1,book_master.Book_Status,book_master.Library_Name FROM $table_name  WHERE Author1=$search_string";
  }*/
 $result=$mysqli->query($query);
 //printing the result
 if($result->num_rows>0)
 {
  echo "<table border='1' id='results'>
  <tr>
  <th>Book Id</th>
  <th>Book Title</th>
  <th>Author</th>
  <th>Status</th>
  <th>Library</th>
  </tr>";
while($row = $result->fetch_assoc())
  {
  echo "<tr>";
  echo "<td>" . $row["Book_Id"] . "</td>";
  echo "<td>" . $row["Book_Title"] . "</td>";
  echo "<td>" . $row["Author1"] . "</td>";
  echo "<td>" . $row["Book_Status"] . "</td>";
  echo "<td>" . $row["Library_Name"]. "</td>";
  echo "</tr>";
  }
 echo "</table>";
}
else
{
  echo "No Matches Found";
}
?>
</center>
</div>
 <div class="Add" id="Add">
 <h1 align="center">Add</h1><br>
 <h4>Enter the Book Details</h4>
<center>
  <form method="post" action="bookadd.php">
  <table valign="left" border="0" cellspacing="4" cellpadding="4">
          <tr><td><b>Book ID</b></td><td><input type="text" name="BookId"></td></tr>
          <tr><td><b>Book Title</b></td><td><input type="text" name="BookTitle"></td></tr>
          <tr><td><b>Edition</b></td><td><input type="text" name="Edition"></td></tr>
          <tr><td><b>Author1</b></td><td><input type="text" name="Author1"></td></tr>
          <tr><td><b>Author2</b></td><td><input type="text" name="Author2"></td></tr>
          <tr><td><b>Author3</b></td><td><input type="text" name="Author3"></td></tr>
          <tr><td><b>Price</b></td><td><input type="text" name="Price"></td></tr>
          <tr><td><b>Publisher</b></td><td><input type="text" name="Publisher"></td></tr>
          <tr><td><b>Book Type</b></td><td><input type="text" name="Type"></td></tr>
          <tr><td><b>Book Status</b></td><td><input type="text" name="BookStatus"></td></tr>
          <tr><td><b>Branch</b></td><td><input type="text" name="Branch"></td></tr>
          <tr><td><b>Location</b></td><td><input type="text" name="Location"></td></tr>
          <tr><td><b>Library</b></td><td><input type="text" name="Library"></td></tr>
          <tr><td></td><td><input type="submit" value=" Submit " name="btnsubmit" ></td></tr>
        </table>


  </form>
  </center>
 </div>
 <div class="Issue" id="Issue">
  <h1 align="center">Issue</h1><br>
  <h4>Enter Book Issue Details</h4>
<center>
  <form method="post" action="bookissue.php">
  <table valign="left" border="0" cellspacing="4" cellpadding="4">
          <tr><td><b>Book Issue ID</b></td><td><input type="text" name="BookIssueId"></td></tr>
          <tr><td><b>Book Issue Date</b></td><td><input type="Date" name="BookIssueDate" size="60">
          <tr><td><b>Book Id</b></td><td><input type="text" name="BookId"></td></tr>
          <tr><td><b>User Id</b></td><td><input type="text" name="UserId"></td></tr>
          <tr><td><b>Return Date</b></td><td><input type="Date" name="ReturnDate" size="60">
          <tr><td><b>Return Status</b></td><td><input type="text" name="ReturnStatus"></td></tr>
          <tr><td><b>Fine Amount</b></td><td><input type="text" name="FineAmount"></td></tr>
          <tr><td><b>Fine Amount Paid</b></td><td><input type="text" name="FineAmountPaid"></td></tr>
          <tr><td><b>Library Name</b></td><td><input type="text" name="LibraryName"></td></tr>
          <tr><td><b>Issued By</b></td><td><input type="text" name="IssuedBy"></td></tr>
          <tr><td><b>Returned By</b></td><td><input type="text" name="ReturnedBy"></td></tr>
          <tr><td></td><td><input type="submit" value=" Submit " name="btnsubmit"></td></tr>
        </table>
  </form>
  </center>
 </div>
 <div class="Remove" id="Remove">
  <center>
  <h1>Remove</h1>
  <h4>Enter the Book ID to remove the book</h4>
  <form method="post" action="remove.php" name="remove">
  <table valign="left" border="0" cellspacing="4" cellpadding="4">
          <tr><td><b>Enter Book ID</b></td><td><input type="text" name="search_string"></td></tr>
          <tr><td></td><td><input type="submit" value=" Remove " name="btnsubmit" onclick="isEmpty()"></td></tr>
        </table>
  </form>
  </center>
 </div>
</body>
</html>