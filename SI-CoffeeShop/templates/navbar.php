    <!-- Navbar -->
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
    <div class="container">
    <a class="navbar-brand" href="index.php"><img src="<?= $_ENV['base_url'] ?>img/logo1.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
            <a class="nav-link" href="<?= $_ENV['base_url'] ?>index.php">Beranda <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= $_ENV['base_url'] ?>pages/produk/produk.php">Produk</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Hulu
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?= $_ENV['base_url'] ?>pages/hulu/farming.php">Farming</a>
            <a class="dropdown-item" href="<?= $_ENV['base_url'] ?>pages/hulu/proses.php">Processing</a>
            <a class="dropdown-item" href="<?= $_ENV['base_url'] ?>pages/hulu/roasting.php">Roasting</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="<?= $_ENV['base_url'] ?>pages/hilir/hilir.php">Hilir</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Kontak</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= $_ENV['base_url'] ?>pages/tentang kami/tentang_kami.php">Tentang Kami</a>
        </li>
        </ul>
    </div>
    </div>
    </nav>
    <!-- end Navbar -->