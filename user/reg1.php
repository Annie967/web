<!DOCTYPE html>
<?php

include 'conn.php';

if(isset($_POST['submit']))

{

	$fname=$_POST['first_name'];

	$lname=$_POST['last_name'];

	$cno=$_POST['phone_no'];

	$email=$_POST['email_id'];

	$uname=$_POST['username'];

	$psswrd=$_POST['password'];

	$sql = "INSERT INTO userreg(first_name,last_name,phone_no,email_id,username,password)VALUES ('$fname','$lname','$cno','$email','$uname','$psswrd')";


	if (mysqli_query($conn, $sql)) {

  		echo "New record created successfully";

		} else {

  		echo "Error: " . $sql . "<br>" . mysqli_error($conn);

		}


	mysqli_close($conn);

}

else

{

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .form-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 450px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            font-size: 14px;
            margin-bottom: 5px;
            color: #555;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .form-group input:focus {
            border-color: #007BFF;
            outline: none;
        }

        .form-group button {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .form-group button:hover {
            background-color: #0056b3;
        }

        .form-group .error {
            color: red;
            font-size: 12px;
        }

        .form-footer {
            text-align: center;
            margin-top: 20px;
        }

        .form-footer a {
            color: #007BFF;
            text-decoration: none;
        }

        .form-footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Register</h2>
        <form action="" method="POST">
            <div class="form-group">
                <label for="first_name">first_name</label>
                <input type="text" id="first_name" name="first_name" placeholder="Enter your first name" required>
            </div>

            <div class="form-group">
                <label for="last_name">last_name</label>
                <input type="text" id="last_name" name="last_name" placeholder="Enter your last name" required>
            </div>

            <div class="form-group">
                <label for="phone_no">Phone Number</label>
                <input type="tel" id="phone_no" name="phone_no" placeholder="Enter your phone number" required>
            </div>

            <div class="form-group">
                <label for="email_id">Email</label>
                <input type="email_id" id="email_id" name="email_id" placeholder="Enter your email" required>
            </div>
             <div class="form-group">
                <label for="username">Username</label>
                <input type="username" id="username" name="username" placeholder="Enter your username" required>
            </div>
            
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>

            <div class="form-group">
                <input type="submit" name="submit">Register<value="submit">
            </div>
        </form>

        <div class="form-footer">
            <p>Already have an account? <a href="">Login here</a></p>
        </div>
    </div>
</body>
</html>
<?php
}
?>
