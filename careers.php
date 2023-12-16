<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

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

        <title>Bookworm's Heaven</title>
        
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

        <div class="container mt-5 bg-white p-4 rounded shadow-sm">

            <div class="row">
                <div class="col-md-6">
                    <!-- the first image -->
                    <img src="assets/career2.jpg" alt="Mission Image" class="img-fluid mb-3">
                </div>
                <div class="col-md-6">
                <h1 class="mb-2">Our Mission</h1>
                    <p class="text-dark">At Bookworm's Heaven, we are on a mission to create a literary haven for book enthusiasts around the globe. Our commitment is to foster a vibrant and inclusive community that celebrates the joy of reading and connects bibliophiles through the magic of literature.</p>

                    <p class="text-dark">We believe that books have the power to transform lives, broaden perspectives, and ignite the imagination. Our goal is to provide a space where individuals of all backgrounds and interests can come together to share their love for books, discover new literary treasures, and engage in meaningful discussions.</p>

                    <p class="text-dark">Whether you are a seasoned bookworm or just beginning your literary journey, Bookworm's Heaven welcomes you with open arms. Join us as we embark on this mission to make reading a central and enriching part of people's lives, fostering connections and building a global community bound by the love of literature.</p>
                </div>
            </div>

            <div class="card mb-4" style="background-color: #ffeeee;">
                <div class="card-body">
                    <h2 class="card-title mb-3">Our Core Values</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-unstyled">
                                <li class="mb-3">
                                    <h5 class="mb-2">Passion for Reading</h5>
                                    <p class="text-muted">We believe in the transformative power of books and are passionate about sharing that belief with the world.</p>
                                </li>
                                <li class="mb-3">
                                    <h5 class="mb-2">Community Building</h5>
                                    <p class="text-muted">We strive to build a vibrant and inclusive community where readers can connect, share recommendations, and engage in meaningful discussions.</p>
                                </li>
                                <li class="mb-3">
                                    <h5 class="mb-2">Innovation</h5>
                                    <p class="text-muted">Constantly pushing boundaries, we embrace innovation to enhance the reading experience and provide cutting-edge features for our users.</p>
                                </li>
                                <li class="mb-3">
                                    <h5 class="mb-2">Respect for Diversity</h5>
                                    <p class="text-muted">We celebrate the diversity of literature and the richness it brings to our community, fostering an environment that respects all voices.</p>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <!-- the second image -->
                            <img src="assets/career1.jpg" alt="Core Values Image" class="img-fluid mb-3">
                        </div>
                    </div>
                </div>
            </div>

            <h2 class="mt-4">Join Our Journey</h2>
            <p>We invite you to be a part of our journey as we embark on a mission to make Bookworm's Heaven the ultimate destination for book lovers. Whether you're a reader, an author, or someone who simply appreciates the world of words, there's a place for you in our community.</p>

            <p class="text-center mt-4">
                <button type="submit" id="contactBtn" class="btn btn-light-purple btn-lg">Contact Us</button>
            </p>

            <script>
                document.getElementById('contactBtn').addEventListener('click', function() {
                    // Open email with the specified address
                    window.location.href = 'mailto:BookwormsHeaven@gmail.com';
                });
            </script>

        </div>
        <!-- PHP Link for the footer -->
        <?php include 'menu/footer.php'; ?>
    </body>
</html>









