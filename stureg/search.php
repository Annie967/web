<?php
include 'conn.php';

if(isset($_POST['submit']))
{
$id1=$_POST['id'];
$sql = "SELECT * FROM studreg where student_id='$id1'";
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

}
else
{
?>
<html>
	<body>
	<center>
		<form action="" method="post">
		Student Id:
		<input type="textbox" name="id"><br>
		
		<input type="submit" name="submit" value="Submit"><br>
	</form>
	</center>
	</body>
</html>
<?php
}
?>