<?php
require 'functions.php';

$id = $_GET['id'];
$b = query("SELECT * FROM buku WHERE id = $id")[0];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (ubah($_POST) > 0) {
        echo "<script>
                alert('Data changed successfully!');
                document.location.href = 'index.php';
              </script>";
    }
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>MyBook | Book List</title>
</head>

<body>


    <nav class="navbar navbar-expand-lg text-dark bg-info">
        <div class="container">
            <a class="navbar-brand" href="index.php">MyBook</a>
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
            <div class="col-md-6">


                <form action="" method="post">
                    <input type="hidden" name="id" value="<?= $b['id'] ?>">
                    <div class="mb-3">
                        <label for="judul" class="fw-bolder">Title</label>
                        <input type="text" class="form-control" id="judul" name="judul" value="<?= $b['judul'] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="penulis" class="fw-bolder">Writer</label>
                        <input type="text" class="form-control" id="penulis" name="penulis" value="<?= $b['penulis'] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="penerbit" class="fw-bolder">Publisher</label>
                        <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?= $b['penerbit'] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="kategori" class="fw-bolder">Type of Book</label>
                        <input type="text" class="form-control" id="kategori" name="kategori" onchange="previewImage()" value="<?= $b['kategori'] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="fw-bolder">Picture</label>
                        <input type="file" class="form-control" id="gambar" name="gambar" value="<?= $b['gambar'] ?>" required>
                    </div>

                    <button type="submit" class="btn btn-success">Change Book Data</button>
                </form>


            </div>
        </div>

    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>