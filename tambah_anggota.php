<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <?php include('header.php'); ?>
    <?php include('menu.php'); ?>


    <section style="min-height:200px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Tambah Data Anggota</h1>
                    <form action="simpan_tambah_anggota.php" method="POST">
                        <div class="col-md-3">
                            <label for="text" class="form-label">Nama Anggota</label>
                            <input type="text" class="form-control" name="nama_anggota" placeholder="Masukkan Nama Anggota" required>
                        </div>
                        <div class="col-md-3">
                            <label for="text" class="form-label">Nis</label>
                            <input type="text" class="form-control" name="nis" placeholder="Masukkan Nis Anggota" required>
                        </div>
                        <div class="col-md-3">
                            <label for="text" class="form-label">Username</label>
                            <input type="text" class="form-control" name="username" placeholder="Masukkan Username Anggota" required>
                        </div>
                        <div class="col-md-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Masukkan Password Anggota">
                        </div>
                        <div class="col-md-3">
                            <label for="text" class="form-label">Kelas</label>
                            <input type="text" class="form-control" name="kelas" placeholder="Masukkan Kelas Anggota" required>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="anggota.php" class="btn btn-danger">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>