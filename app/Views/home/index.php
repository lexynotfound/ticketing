<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url(); ?>css/bootstrap.css">
</head>

<body>
    <!--Open Navbar  -->
    <!-- Topbar -->
    <header>
        <div class="container mt-4">
            <nav class="navbar navbar-expand-lg bg-white ms-auto ">
                <div class="container ">
                    <a class="navbar-brand" href="<?= base_url('') ?>">
                        Yohanna
                    </a>
                    <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse dropdown" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <div class="topbar-divider d-none d-sm-block"></div>

                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">

                                <div class="d-flex btn-container gap-3 ml-2">
                                    <a href="<?= base_url('auth/login'); ?>" class="text-decoration-none">
                                        <button class="btn btn-info text-white " type="submit">
                                            Login
                                        </button>
                                    </a>
                                    <a href="<?= base_url('atuh/register'); ?> " class="text-decoration-none">
                                        <button class="btn btn-info text-white" type="submit">
                                            Register
                                        </button>
                                    </a>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <div class="section g-3 position-relative">
        <div class="container col-xxl-4 px-6 py-5">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <!-- Container wrapper -->
                <div class="container-fluid">
                    <!-- Toggle button -->
                    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarCenteredExample" aria-controls="navbarCenteredExample" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>
                    </button>

                    <!-- Collapsible wrapper -->
                    <div class="collapse navbar-collapse justify-content-center" id="navbarCenteredExample">
                        <!-- Left links -->
                        <ul class="navbar-nav mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#" onclick="toggleTicketForm('pesawat')">Pesawat</a>
                                <div id="pesawat-form" style="display: none;">
                                    <!-- Form for pesawat ticket booking -->
                                    <form method="post">
                                        <div class="mb-3">
                                            <label for="tujuan" class="form-label">Tujuan</label>
                                            <input type="text" class="form-control" id="tujuan" name="tujuan" placeholder="Masukkan tujuan" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="tanggal" class="form-label">Tanggal Keberangkatan</label>
                                            <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="rute_awal" class="form-label">Rute Awal</label>
                                            <input type="text" class="form-control" id="rute_awal" name="rute_awal" placeholder="Masukkan rute awal" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="rute_akhir" class="form-label">Rute Akhir</label>
                                            <input type="text" class="form-control" id="rute_akhir" name="rute_akhir" placeholder="Masukkan rute akhir" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Cari Tiket</button>
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" onclick="toggleTicketForm('kereta')">Kereta Api</a>
                                <div id="kereta-form" style="display: none;">
                                    <!-- Form for kereta api ticket booking -->
                                    <form>
                                        <!-- Add your input fields for kereta api ticket booking here -->
                                    </form>
                                </div>
                            </li>
                        </ul>
                        <!-- Left links -->
                    </div>
                    <!-- Collapsible wrapper -->
                </div>
                <!-- Container wrapper -->
            </nav>
        </div>
    </div>


</body>
<script>
    // Function to show/hide the ticket booking form based on the selected option
    function toggleTicketForm(option) {
        if (option === 'pesawat') {
            document.getElementById('pesawat-form').style.display = 'block';
            document.getElementById('kereta-form').style.display = 'none';
        } else if (option === 'kereta') {
            document.getElementById('pesawat-form').style.display = 'none';
            document.getElementById('kereta-form').style.display = 'block';
        }
    }

    // Event listener for clicking on "Pesawat" option
    document.querySelector('a[href="#"]').addEventListener('click', function() {
        toggleTicketForm('pesawat');
    });

    // Event listener for clicking on "Kereta Api" option
    document.querySelector('a[href="#"]').addEventListener('click', function() {
        toggleTicketForm('kereta');
    });
</script>

</html>