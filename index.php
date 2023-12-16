<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        
        <!--Font Awesome-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <!--Google Fonts Roboto-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
        
        
        <!--Bootstrap Libraries-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

        <!--Bootstrap CSS-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        
        <!--Bootstrap JavaScript-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <title>Bookworm's Heaven</title>

        <style>
            /* Custom CSS to define the light purple color */
            .btn-light-purple {
                background-color: #a98ccc;
                color: white;
            }

            .custom-card {
                width: 300px; /* Set your desired width */
                height: 300px; /* Set your desired height */
            }

            .card {
                margin-left: 10px;
                margin-right: 5px;
            }

            img{
                margin-left: 0px;
                padding: 0px;
            }
        </style>
    </head>

    <body>
        <div class="d-flex align-items-center justify-content-start">
            <img src="assets/banner.png" class="img-fluid" width="80%" alt="Responsive image">
            
            <div class="card custom-card p-4 shadow-lg rounded">
                <div class="card-body text-center">
                    <h5 class="card-title">Sign Up</h5>
                    <p class="card-text">Create your account</p>
                        
                    <!-- Sign Up Button with light purple color -->
                    <a href="sign-up.php" class="btn btn-light-purple btn-lg">Sign Up With Email</a>
                    <hr>
                    <p class="card-text">Already a member? <a href="log-in.php">Sign in</a></p>
                </div>
            </div>
        </div>
    </body>
</html>
