<?php
require 'functions.php';
$buku = query(" SELECT * FROM buku");

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MyBook | Book List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg text-dark bg-info">
        <div class="container">
            <a class="navbar-brand" href="#">MyBook</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="tambah.php">Add Book</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row mt-3">
            <div class="col">
                <h2>Book List</h2>
            </div>
        </div>


        <div class="row">
            <?php foreach ($buku as $b) : ?>
                <div class="col-lg-4 col-sm-6">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="img/<?= $b['gambar'] ?>" class="img-fluid rounded-start" alt="<?= $b['judul']; ?>">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <span class="position-absolute top-0 end-0 bg-dark text-white px-2 py-1 opacity-75"><small><?= $b['kategori']; ?></small></span>
                                    <h5 class="card-title"><?= $b['judul']; ?></h5>
                                    <p class="card-text"><small class="text-body-secondary"><?= $b['penulis']; ?> | <?= $b['penerbit']; ?></small></p>

                                    <a href="ubah.php?id=<?= $b['id']; ?>" class="btn btn-warning btn-sm">Change</a>
                                    <a href="hapus.php?id=<?= $b['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure ? ');">Delete</a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>