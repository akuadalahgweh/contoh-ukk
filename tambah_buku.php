<?php
session_start()
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Tambah Buku | Aplikasi Perpustakaan Sekolah Digital</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>


    <?php include("header.php"); ?>

    <?php include("menu.php"); ?>

    <section style="min-height: 200px;">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <h1 class="mt-3">📚 Tambah Data Buku</h1>
                    <form action="simpan_tambah_buku.php" method="POST">
                        <div class="col-md-3">
                            <label for="text" class="form-label">Judul Buku</label>
                            <input type="text" class="form-control mb-2" name="judul_buku" placeholder="Masukkan Judul Buku" required>
                        </div>
                        <div class="col-md-3">
                            <label for="text" class="form-label">Pengarang</label>
                            <input type="text" class="form-control mb-1" name="pengarang" placeholder="Masukkan Pengarang Buku" required>
                        </div>
                        <div class="col-md-3">
                            <label for="text" class="form-label">Penerbit</label>
                            <input type="text" class="form-control mb-1" name="penerbit" placeholder="Masukkan Penerbit Buku" required>
                        </div>
                        <div class="col-md-3">
                            <label for="number" class="form-label">Tahun Terbit</label>
                            <input type="number" class="form-control mb-1" name="tahun_terbit" placeholder="Masukkan Tahun Terbit Buku" required>
                        </div>
                        <div class="col-md-3">
                            <label for="number" class="form-label">Stock</label>
                            <input type="number" class="form-control mb-1" name="stock" placeholder="Masukkan stock Buku" value="1" min="0" required>
                        </div>
                        <div class="mt-3">
                            <button type="submit" class="btn btn-primary"> Simpan</button>
                            <a href="buku.php" class="btn btn-danger">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>