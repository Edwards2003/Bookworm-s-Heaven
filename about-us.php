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
    </head>

    <body class="bg-light">
        <!-- PHP Link for the header -->
        <?php include 'menu/header.php'; ?>
        <div class="container p-0 mt-5 bg-white p-4 rounded shadow-sm">
    
            <!-- Carousel Slideshow without Arrows -->
            <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2500">
                    <!-- Images -->
                    <div class="carousel-inner mx-auto" style="height: 20%; width: 50%;">
                        <div class="carousel-item active">
                            <img src="assets/slideshow1.png" class="d-block mx-auto" style="object-fit: cover; width: 100%; height: 100%;" alt="image1" id="banner_1">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/slideshow2.jpg" class="d-block mx-auto img-fluid" style="object-fit: cover; width: 100%; height: 100%;" alt="image2" id="banner_2">
                        </div>
                    </div>
            </div>
    
                
            <div class="container-xl" id="aboutCenterColumn">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <!-- This is the Introduction Section -->
                        <section>
                            <h2 class="mt-4">Who We Are</h2>
                            <p>Bookworm's Heaven is your ultimate destination for the joy of reading and book
                                recommendations. Our mission is to assist readers in discovering books they love and enhance their
                                reading experiences. Established in 2023, Bookworm's Heaven has been a haven for book lovers since
                                its inception.</p>
                        </section>

                        <!-- In this paragraph bullet points are used -->
                        <section>
                            <h2>What You Can Do On Bookworm's Heaven</h2>

                            <ul>
                                <li>Explore what books your friends are currently reading and get inspired.</li>
                                <li>Keep track of the books you've read, are currently reading, and plan to read in the future.</li>
                                <li>Discover personalized book recommendations tailored to your unique literary tastes. Our
                                    recommendation engine analyzes vast amounts of data to offer suggestions that resonate with
                                    your preferences.</li>
                                <li>Make informed decisions about your next read by exploring community reviews and opinions.</li>
                            </ul>
                        </section>

                        <!-- This is the Conclusion Section -->
                        <section>
                            <h2>A Message From Our Co-Founder</h2>
                            <p>In the world of books, knowledge is both a treasure and a bridge to connect readers. At
                                Bookworm's Heaven, we understand the magic of books and the importance of sharing that magic with
                                others.
                            </p>

                            <p>For me, the journey with books began in childhood when I stumbled upon captivating stories that opened my mind to 
                                new worlds. The joy of reading became a lifelong passion, a passion I shared with my co-founder, Nicole Edwards. 
                                Together, we envisioned a space where book lovers could connect, share their reading experiences, and embark on 
                                literary adventures together.
                            </p>

                            <p>Our vision materialized into Bookworm's Heaven, a platform where you can peek into your friends' bookshelves,
                                engage in discussions about your favorite reads, and uncover hidden literary gems. Here, you can create your 
                                own virtual bookshelves, leave thoughtful reviews, and explore a universe of books recommended by your peers.
                            </p>

                            <p> We believe that knowledge is most impactful when shared among fellow readers. Bookworm's Heaven is not just a 
                                website; it's a community of passionate readers united by the love of books. Join us on this literary journey,
                                where every page turned is a step toward enlightenment.
                            </p>

                            <p> Happy reading!</p>
                        
                            <p>
                                <strong>Co-Founder, Bookworm's Heaven<br>Nicole Edwards</strong>
                            </p>

                        </section>
                    </div>
                </div>
            </div>
        </div>
        
        <br>

        <!-- PHP Link for the footer -->
        <?php include 'menu/footer.php'; ?>
    </body>
</html>
