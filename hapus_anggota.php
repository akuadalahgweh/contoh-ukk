<?php

include("koneksi.php");

$id = $_GET['id_anggota'];
$sql = "DELETE FROM anggota WHERE id_anggota='$id'";
mysqli_query($koneksi, $sql) or die("gagal");
header('location:anggota.php');