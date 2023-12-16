<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require 'connection.php'; // Include the database connection file

        // Collect and sanitize form data
        $username = mysqli_real_escape_string($con, $_POST['username']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, $_POST['password']);

        // Check if the email already exists in the database
        $check_email_query = "SELECT * FROM useraccounts WHERE Email = '$email'";
        $result = $con->query($check_email_query);

        if ($result->num_rows > 0) {
            // Email already exists, display a JavaScript popup
            echo "<script>alert('An account with this email already exists. Please use a different email.'); window.location.href='../sign-up.php';</script>";
            exit(); // Ensure that no further code is executed after displaying the alert and redirecting
        }
        
        else {
            // Validation checks for password
            $Minlengthpassword = 8; // Change this to your desired minimum password length
            $Uppercasepassword = true; // Change this to true if you require an uppercase letter
            $Lowercasepassword = true; // Change this to true if you require a lowercase letter
            $Numberpassword = true; // Change this to true if you require a number in the password

            if (strlen($password) < $Minlengthpassword) {
                echo "<script>alert('Password must be at least $Minlengthpassword characters long.'); window.location.href='../sign-up.php';</script>";
                exit();
            } elseif ($Uppercasepassword && !preg_match('/[A-Z]/', $password)) {
                echo "<script>alert('Password must contain at least one uppercase letter.'); window.location.href='../sign-up.php';</script>";
                exit();
            } elseif ($Lowercasepassword && !preg_match('/[a-z]/', $password)) {
                echo "<script>alert('Password must contain at least one lowercase letter.'); window.location.href='../sign-up.php';</script>";
                exit();
            } elseif ($Numberpassword && !preg_match('/[0-9]/', $password)) {
                echo "<script>alert('Password must contain at least one number.'); window.location.href='../sign-up.php';</script>";
                exit();
            }

            // Hash the password for security
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // SQL query to insert data into the database
            $insert_query = "INSERT INTO useraccounts (Username, Email, Userpassword) VALUES ('$username', '$email', '$hashed_password')";

            // Check if the query is executed successfully
            if ($con->query($insert_query) === TRUE) {
                // Redirect to the login page
                header("Location: ../redirection.php");
                exit(); // Ensure that no further code is executed after the redirect
            } 
            
            else {
                echo "Error: " . $insert_query . "<br>" . $con->error;
            }
        }

        // Close the database connection
        $con->close();
    }
?>
