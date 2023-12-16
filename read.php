<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

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
        </style>
    </head>

    <body class="bg-light">
      <?php include 'menu/header.php'; ?>

        <div class="container p-0 mt-5 bg-white p-4 rounded shadow-sm">
            <div class="row">
                <!-- Left Column -->
                <div class="col-md-6">
                    <div class="card text-black mb-3 shadow-lg" style="background-color: #ffeeee; max-width: 20rem;">
                        <div class="card-header">Choose a book to read.</div>
                        <div class="card-body">
                            <h4 class="card-title">Type your ISBN below</h4>
                            <input type="text" class="form-control isbn" placeholder="Enter your ISBN">
                            <button class="btn btn-light-purple mt-2 mb-2">Start Reading</button>
                        </div>
                    </div>
                </div>

                <!-- Right Column -->
                <div class="col-md-6">
                    <div id="viewerCanvas" style="width: 100%; height: 600px;" class="mr-3"></div>
                </div>
            </div>
        </div>


        <script type="text/javascript" src="https://www.google.com/books/jsapi.js"></script>


        <script>
            const startReadingButton = document.querySelector(".btn-light-purple");
            const isbnInput = document.querySelector(".isbn");

            startReadingButton.addEventListener("click", initialize);

            google.books.load({ "language": "en" });

            
            function alertNotFound() {
                alert("Book not found or the Book doesn't have the online reading feature!");
            }

            function initialize() {
                var viewer = new google.books.DefaultViewer(document.getElementById("viewerCanvas"));
                viewer.load("ISBN:" + isbnInput.value, alertNotFound);
            }

            google.books.setOnLoadCallback(initialize);
        </script>

        <?php include 'menu/footer.php'; ?>
    </body>
</html>
