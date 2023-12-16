<?php
     // Include the file with the database connection
    include 'connection.php';

    // Check if the user ID and email are set in the POST request
    if (isset($_POST['delete_btn'])) {
        $email = $_POST['delete_email'];

        $query = "DELETE FROM useraccounts WHERE email = '$email'";
        $query_run = mysqli_query($con, $query); // Update variable name here

        if ($query_run) {
            $_SESSION['status'] = "Account Deleted Successfully";
            header("Location: ../account-deletion.php");
        } else {
            $_SESSION['status'] = "Account Not Deleted";
            header("Location: ../my-account.php");
        }
}
?>
