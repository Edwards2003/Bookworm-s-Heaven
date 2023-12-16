<?php session_start(); 
?>
<!DOCTYPE html>
<html lang="en">


    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <title>Bookworm's Heaven</title>

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Google Fonts Roboto -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />

        <!-- Bootstrap Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        <!-- Bootstrap JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <!-- Your custom stylesheet or additional styles/scripts can be added here -->

        <style>

    .btn-light-purple {
                    background-color: #a98ccc;
                    color: white;
                }
        </style>

    </head>

    <body class="bg-light">
        <!-- PHP Link for the header -->
        <?php include 'menu/header.php'; ?>
    

        <div class="container mt-5">
        <div class="bg-white p-4 rounded shadow-sm">
            <h1 class="text-center">My Account</h1>

            <form action="database/update-password.php" method="post">
                <h2 class="mb-4">Change Password</h2>
            
                <div class="form-group mb-3">
                    <label for="op">Old Password</label>
                    <input type="password"
                        class="form-control"
                        id="op"
                        name="op"
                        placeholder="Old Password">
                </div>

                <div class="form-group mb-3">
                    <label for="np">New Password</label>
                    <input type="password"
                        class="form-control"
                        id="np"
                        name="np"
                        placeholder="New Password">
                </div>

                <div class="form-group mb-3">
                    <label for="c_np">Confirm New Password</label>
                    <input type="password"
                        class="form-control"
                        id="c_np"
                        name="c_np"
                        placeholder="Confirm New Password">
                </div>

                <div class="froum-group mb-3">
                <button type="submit" class="btn btn-light-purple">Change Password</button>
                </div>
            </form>
    <br>

        <!-- The delete account button -->

        <div class="container">
            <div class="row justify-content-center">

            <?php
            if(isset($_SESSION['status']))
            {
                echo "<h4>".$_SESSIONS['status']. "</h4>";
                unset($_SESSION['status']);

            }

            ?>
            
            <form action="database/delete-account.php" method="POST">
                <div class= "froum-group mb-3">
                    <label for =""> Delete Account</label>
                    <input type="text" name="delete_email" class="form-control">
                </div>
                <div class="froum-group mb-3">
                    <button type="submit" name="delete_btn" class="btn btn-light-purple"> Delete Account</button>
                </div>
            </form>
            </div>
        </div>
        </div>
        </div>

        <?php include 'menu/footer.php'; ?>
    </body>
</html>


