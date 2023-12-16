 <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require 'connection.php'; // Include the database connection file
    
        // Get user input
        $email = $_POST['email'];
        $password = $_POST['password'];
    
        // Query to check if the email exists in the database
        $emailCheckQuery = "SELECT * FROM useraccounts WHERE email = '$email'";
        $result = $con->query($emailCheckQuery);
    
        if (!$result) {
            die("Query failed: " . $con->error);
        }
    
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            
            // Check if the entered password matches the stored hashed password
            if (password_verify($password, $row['Userpassword'])) {
                // Successful login
                $_SESSION['authenticated'] = true;
                $UserID = $row['ID'];
              
                setcookie('user_id', $UserID, time() + 3600, '/');
    
                // Redirecting to home.php
                header("Location: ../home.php");
                exit();
            } else {
                // Incorrect password
                echo "<script>alert('Incorrect Password.'); window.location.href='../log-in.php';</script>";
                exit();
            }
        } else {
            // Email not found
            echo "<script>alert('Email not Found.'); window.location.href='../log-in.php';</script>";
            exit();
        }
    }
?>