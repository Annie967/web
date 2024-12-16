<?php
include 'conn.php';



if (isset($_GET['student_id'])) {
    $student_id = $_GET['student_id'];

    // Fetch the existing data for the given student ID
    $sql = "SELECT * FROM studreg WHERE student_id = '$student_id'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $student = mysqli_fetch_assoc($result);

        // Redirect to the update page with student data
        $query = http_build_query($student);
        header("Location: update2.php?$query");
        exit();
    } else {
        echo "No student found with ID: $student_id";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Retrieve Student Details</title>
</head>
<body>
    <h2>Retrieve Student Details</h2>
    <form method="GET" action="">
        <label for="student_id">Student ID:</label>
        <input type="text" name="student_id" id="student_id" required>
        <button type="submit">Retrieve</button>
    </form>
</body>
</html>