<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="vh-100 row justify-content-center align-items-center">
        <form action="cek_login.php" method="POST" class="col-md-5 rounded-3 shadow py-4">
            <img src="logo-smk2.png" class="mx-auto d-block mb-3">
            <h3 class="text-center mb-3">Login Perpustakaan Digital</h3>
            <div class="mb-3">
                <label for="form-label">Username</label>
                <input type="text" name="username" class="form-control" placeholder="Masukkan Username Anda" required>
            </div>
            <div class="mb-3">
                <label for="form-label">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Masukkan Password Anda" required>
            </div>
            <div class="mb-3">
                <label for="form-label">Role</label>
                <select name="role" class="form-select" required>
                    <option value="">Pilih Role</option>
                    <option value="admin">Admin </option>
                    <option value="user">User</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success w-100 mb-3">Login</button>
            <div class="text-center">
                <a href="register.php" class="text-decoration-none">Daftar Sebagai User</a>
            </div>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>