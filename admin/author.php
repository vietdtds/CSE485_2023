<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "btth01_cse485";

$conn = mysqli_connect($servername, 
    $username, $password, $databasename);
  
  // GET CONNECTION ERRORS
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
  
  // SQL QUERY
  $query = "SELECT * FROM `baiviet`;";
  // FETCHING DATA FROM DATABASE
  $result = mysqli_query($conn, $query);
  
  if (mysqli_num_rows($result) > 0) {
      // OUTPUT DATA OF EACH ROW
      while($row = mysqli_fetch_assoc($result)) {
          echo $row["tieude"];
      }
  } else {
      echo "0 results";
  }
  
  $conn->close();
  
?>
