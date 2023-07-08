<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url(); ?>css/bootstrap.css">
</head>

<body>
    <div class="container">
        <h1>Register</h1>
        <!-- Registration form -->
        <form method="post" action="<?= base_url('auth/processRegister'); ?>">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="mb-3">
                <label for="nama_penumpang" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama_penumpang" name="nama_penumpang" required>
            </div>
            <div class="mb-3">
                <label for="alamat_penumpang" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat_penumpang" name="alamat_penumpang" required>
            </div>
            <div class="mb-3">
                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
            </div>
            <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="telepon" class="form-label">Telepon</label>
                <input type="text" class="form-control" id="telepon" name="telepon" required>
            </div>
            <div class="mb-3">
                <label for="level" class="form-label">Level</label>
                <select class="form-control" id="level" name="level" required>
                    <option value="penumpang">Penumpang</option>
                    <option value="petugas">Petugas</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
</body>

</html>