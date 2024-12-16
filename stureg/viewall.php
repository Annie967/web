<?php

include 'conn.php';
$sql = "SELECT * FROM studreg";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "<br> id:   " . $row["student_id"]. " <br>Name:  " . $row["student_name"]. "<br>Course: " . $row["course_name"]."<br>Semester:  " . $row["semester"]."<br>Gender:  ".$row["gender"] ."<br>Hobbies:  ".$row["hobbies"] ."<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>
<html>
 <body>
    <center>
	<a href="homepage.php">< Back</a>
    </center>
 </body>
</html>