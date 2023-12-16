<?php
    include "connection.php";

    // Check if 'userID' key is present in $_POST
    if (isset($_POST['op'], $_POST['np'], $_POST['c_np'])) {
        $oldpassword = $_POST['op'];

        // Hash the old password for comparison
        $hashed_password = password_hash($oldpassword, PASSWORD_DEFAULT);
        $id = $_COOKIE['user_id'];

        // Use prepared statement to prevent SQL injection
        $stmt = $con->prepare("SELECT Userpassword FROM useraccounts WHERE ID = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();

        // Requirements for the password
        $Minlengthpassword = 8;
        $Uppercasepassword = true;
        $Lowercasepassword = true;
        $Numberpassword = true;

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $hashedOldpass = $row["Userpassword"];

            // Change this line to use password_verify for comparison
            if (!password_verify($oldpassword, $hashedOldpass)) {
                // Incorrect password
                echo "<script>alert('Old password does not match.'); window.location.href='../my-account.php';</script>";
                exit();



            } 
            
            elseif ($_POST['np'] != $_POST['c_np']) {
                echo "<script>alert('New password and confirm password do not match.'); window.location.href='../my-account.php';</script>";
                exit();
            } 
            
            elseif (strlen($_POST['np']) < $Minlengthpassword) {
                echo "<script>alert('Password must be at least $Minlengthpassword characters long.'); window.location.href='../my-account.php';</script>";
                exit(); 
            } 
            
            elseif ($Uppercasepassword && !preg_match('/[A-Z]/', $_POST['np'])) {
                echo "<script>alert('Password must contain at least one uppercase letter.'); window.location.href='../my-account.php';</script>";
                exit();   
            } 
            
            elseif ($Lowercasepassword && !preg_match('/[a-z]/', $_POST['np'])) {
                echo "<script>alert('Password must contain at least one lowercase letter.'); window.location.href='../my-account.php';</script>";
                exit();
            } 
            
            elseif ($Numberpassword && !preg_match('/[0-9]/', $_POST['np'])) {
                echo "<script>alert('Password must contain at least one Number.'); window.location.href='../my-account.php';</script>";
                exit(); 
            } 
            
            else {
                $hashedNewpass = password_hash($_POST['np'], PASSWORD_DEFAULT);

                // Use prepared statement for update query
                $stmt = $con->prepare("UPDATE useraccounts SET Userpassword = ? WHERE ID = ?");
                $stmt->bind_param("si", $hashedNewpass, $id);
                $stmt->execute();

                if ($stmt->affected_rows > 0) {

                    header("Location: ../Re-direction.html");
                    exit();
            
                } else {
                    echo "<script>alert('Error updating password.'); window.location.href='../my-account.php';</script>";
                    exit();
                }
            }
        } 
    
        else {
            echo "
                <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                    <strong>Error!</strong> User not found.
                    <a href='../my-account.php'><button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></a>
                </div>
            ";
        }
    } 

    else {
        echo "
            <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                <strong>Error!</strong> Invalid request.
                <a href='../my-account.php'><button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></a>
            </div>
        ";
    }
?>
