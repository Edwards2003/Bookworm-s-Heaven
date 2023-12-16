<!DOCTYPE html>
<html lang="en">
    <head>
        <style>
            .has-search .form-control {
                padding-left: 2.375rem;
            }

            .has-search .form-control-feedback {
                position: absolute;
                z-index: 2;
                display: block;
                width: 2.375rem;
                height: 2.375rem;
                line-height: 2.375rem;
                text-align: center;
                pointer-events: none;
                color: #aaa;
            }

            .btn-transparent {
                background-color: transparent;
                border: none;
            }
        </style>

        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="functions/search.js"></script>
    </head>

    <body>
        <header>
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg fixed-top shadow p-1 mb-5 rounded" style="background-color: #ffeeee;">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01" aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>
                    </button>

                    <a href="home.php"><img src="assets/Logo.png" alt="logo"></a>

                    <div class="collapse navbar-collapse" id="navbarExample01">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item active">
                                <a class="nav-link" aria-current="page" href="home.php">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="read.php">Read Now</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Update the form action to point to search.php -->
                    <form method="get" action="home.php">
                        <div class="input-group">
                            <label for="search" class="form-label sr-only">Search a book</label>
                            <input type="text" class="form-control" placeholder="Search books" id="search" name="search_books" required>
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-transparent">
                                    <span class="fa fa-search"></span>
                                </button>
                            </span>
                        </div>
                    </form>

                    <ul class="navbar-nav d-flex flex-row me-1">
                        <!-- Dropdown menu -->
                        <div class="btn-group me-5">
                            <li class="nav-item dropdown">
                                <button type="button" class="btn dropdown-toggle dropdown-toggle-split border-0" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user mx-1"></i> Profile</button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="my-account.php"><i class="fa fa-user"></i> My Account</a></li>
                                    <li><a class="dropdown-item" href="index.php"><i class="fa fa-sign-out"></i> Log Out</a></li>
                                </ul>
                            </li>
                        </div>
                    </ul>
                </div>
            </nav>
        </header>
    </body>
</html>
