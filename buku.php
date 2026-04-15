<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Buku Admin | Aplikasi Perpustakaan Sekolah Digital</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>


    <?php include("header.php"); ?>

    <?php include("menu.php"); ?>

    <section style="min-height: 200px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="mt-3 mb-3">Kelola Data Buku 📚</h1>
                    <a href="tambah_buku.php" class="btn btn-secondary mb-3"> ➕ Tambah Data Buku</a>

                    <table class="table table-bordered border-dark">
                        <thead class="table-dark">
                            <tr class="text-center">
                                <td>No</td>
                                <td>Judul Buku</td>
                                <td>Pengarang</td>
                                <td>Penerbit</td>
                                <td>Tahun Terbit</td>
                                <td>Stock</td>
                                <td>status</td>
                                <td>Aksi</td>
                            </tr>
                        <tbody>
                            <?php
                            include("koneksi.php");
                            $sql = "SELECT * FROM buku";
                            $query = mysqli_query($koneksi, $sql);
                            while ($buku = mysqli_fetch_array($query)) {;
                            ?>
                                <tr class="text-center">
                                    <td><?php echo $buku['id_buku'] ?></td>
                                    <td><?php echo $buku['judul_buku'] ?></td>
                                    <td><?php echo $buku['pengarang'] ?></td>
                                    <td><?php echo $buku['penerbit'] ?></td>
                                    <td><?php echo $buku['tahun_terbit'] ?></td>
                                    <td><?php echo $buku['stock'] > 0 ?  $buku['stock'] : "Stock Habis" ?></td>
                                    <td><?php echo $buku['stock'] > 0 ? "Tersedia" : "Tidak Tersedia" ?></td>
                                    <td>
                                        <a href="edit_buku.php?id_buku=<?php echo $buku['id_buku'] ?>" class="btn btn-warning"> edit</a>
                                        <a href="hapus_buku.php?id_buku=<?php echo $buku['id_buku'] ?>" class="btn btn-danger">🚮Hapus</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                        </thead>
                    </table>
                </div>
            </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>