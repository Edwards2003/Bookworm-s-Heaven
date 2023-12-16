<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

         <!--Bootstrap Libraries-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Bootstrap JS and dependencies (optional) -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

        <!--Log-in javascript file-->
        <script src="log-in.js"></script>

        <title>Login Page</title>

        <style>
            body{
                background-color: #ffeeee;
            }

            .btn-light-purple {
                background-color: #a98ccc;
                color: white;
            }
        </style>

        <?php
            require 'database/connection.php';
            require 'database/sign-in-conn.php';
        ?>

    </head>
        
    <body class="d-flex align-items-center justify-content-center" style="height: 100vh;">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card p-4 shadow-lg rounded">
                    <div class="card-body">
                        
                        <a href="log-in.php" style="display: block; text-align: center; margin-bottom: 20px;">
                            <img src="assets/Logo.png" alt="logo" style="margin: 0 auto;">
                        </a>

                        <h5 class="card-title text-center mb-4" style="margin-bottom: 20px;">Log In</h5>

                            <!-- Sign in Form -->
                            <form method="post" action="database/sign-in-conn.php">

                                <!--Email Field-->
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>

                                <!--Password Field-->
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>

                                <!--Log In-->
                                <div class="text-center">
                                    <button type="submit" class="btn btn-light-purple btn-lg">Login</button>
                                    <div class="mt-3" id="error-message"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>