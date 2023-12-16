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

    <script src="functions/displaybooks.js"></script> 

        <style>
            .img-small {
                max-width: 100px; 
                max-height: 150px; 
            }
        </style>
    </head>

    <body class="bg-light">
        <?php include 'menu/header.php'; ?>

        <div class="container mt-4">
            <div class="row">
                <div class="col-md-4">
                    <!-- Search bar -->
                    <div class="input-group mb-3">
                        <input type="text" id="search" class="form-control" placeholder="Search for books" aria-label="Search for books" aria-describedby="search-btn">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary btn-transparent" type="button" id="search-btn">Search</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Display search results in three columns -->
            <div class="row" id="searchResults"></div>

            <!-- Display most popular books -->
            <h2 class="mt-4 mb-3">Romance Books</h2>
            <div class="row" id="romanceBooks"></div>
        </div>


    

        <?php include 'menu/footer.php'; ?>
    </body>
</html>
