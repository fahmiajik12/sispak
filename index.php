<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="website sistem pakar">
    <meta name="author" content="mr k">
    <link rel="icon" href="image/icon.png">

    <title>Sistem Pakar</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">

    <style>
        body {
            background-color: white;
            background-repeat: no-repeat;
            background-size: cover;
            padding-top: 56px; /* Adjusted to match the navbar height */
        }

        main {
            margin-top: 80px; /* Adjusted to add space between navbar and content */
        }

        .carousel-caption {
            background-color: rgba(255, 255, 255, 0.7);
            padding: 20px;
            border-radius: 10px;
        }

        .modal-content {
            border-radius: 10px;
        }

        /* Add more styling as needed */
    </style>
</head>

<body>
    <?php include('navbar.php'); ?>

    <main role="main">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="carouselExample" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="image/pexels-photo-12512669.jpeg" class="d-block w-100" alt="Doctor Image">
                                <div class="carousel-caption text-center text-dark">
                                    <h1>Info Sistem Pakar</h1>
                                    <p>Ini adalah sistem pakar berbasis forward-chaining yang digunakan untuk mendeteksi penyakit demam yang disebabkan oleh gigitan nyamuk.</p>
                                    <p><button type="button" class="btn btn-lg btn-warning" data-target="#exampleModal" data-toggle="modal" data-whatever="@getbootstrap">Mulai</button></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- MODAL -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Identitas User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="simpan-session.php" method="post" enctype="multipart/form-data" role="form">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Nama :</label>
                                <input type="text" name="nama" class="form-control" id="input-ame" placeholder="Isikan nama anda" required autofocus>
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Umur :</label>
                                <input type="number" name="umur" class="form-control col-sm-8" placeholder="Isikan umur anda" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-info">Lanjut ></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>
</body>

</html>
