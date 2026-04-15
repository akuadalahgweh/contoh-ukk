<?php

include("koneksi.php");
session_start();
$nama_admin = $_POST['nama_admin'];
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];


if ($role == 'admin') {
    $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $query = mysqli_query($koneksi, $sql);
    if (mysqli_num_rows($query) > 0) {
        $admin = mysqli_fetch_array($query);
        session_start();
        $_SESSION['id_admin'] = $admin['id_admin'];
        $_SESSION['nama_admin'] = $admin['nama_admin'];
        $_SESSION['username'] = $admin['username'];
        $_SESSION['password'] = $admin['password'];
        header("Location:index.php");
    } else {
    }
} else {
    $sql = "SELECT * FROM anggota WHERE username='$username' AND password='$password'";
    $query = mysqli_query($koneksi, $sql);
    if (mysqli_num_rows($query) > 0) {
        $user = mysqli_fetch_array($query);
        session_start();
        $_SESSION['id_anggota'] = $user['id_anggota'];
        $_SESSION['nama_anggota'] = $user['nama_anggota'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['password'] = $user['password'];
        header("Location:user.php");
    } else {

        echo " <script>alert('❌ Login User(anggota) gagal'); window.location.assign('login.php');</script>";
    }
}