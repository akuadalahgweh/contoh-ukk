<?php
session_start();
if (empty($_SESSION['nama_admin'])) {
    header("Location:login.php");
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Dashoard Admin | Aplikasi Perpustakaan Sekolah Digital</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <?php if (isset($custom_styles)) echo $custom_styles; ?>
</head>

<body>


    <?php include("header.php"); ?>

    <?php include("menu.php"); ?>




    <section style="min-height: 200px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class=" mt-3"> Selamat Datang <?= $_SESSION['nama_admin']; ?> Di Halaman Dashboard Admin</h1>
                    <p class="mt-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat alias dolorum, nesciunt, esse recusandae laborum culpa autem sequi
                        dignissimos quibusdam expedita, accusamus in incidunt quam illum nisi aliquam itaque ipsa.</p>
                </div>
            </div>
        </div>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>