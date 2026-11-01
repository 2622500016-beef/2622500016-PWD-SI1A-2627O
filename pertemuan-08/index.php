<?php
date_default_timezone_set('Asia/Jakarta');

$page = 'home';

if (isset($_GET['page'])) {
    $page = $_GET['page'];
}

$pesan = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = isset($_POST['nama']) ? trim($_POST['nama']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $telepon = isset($_POST['telepon']) ? trim($_POST['telepon']) : '';
    $tanggal = isset($_POST['tanggal']) ? trim($_POST['tanggal']) : '';

    if ($nama == '' || $email == '' || $telepon == '' || $tanggal == '') {
        $pesan = 'Mohon lengkapi semua data!';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $pesan = 'Format email tidak valid!';
    } else {
        $pesan = 'Registrasi berhasil! Terima kasih telah mendaftar, ' .
                 htmlspecialchars($nama) . '.';
    }

    $page = 'registrasi';
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kedai Kopi Nizar</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <header class="header">
        <div class="logo">☕︎</div>
        <div>
            <h1>KEDAI KOPI NIZAR</h1>
            <p>Nikmati Kopi Terbaik di Setiap Cangkir</p>
        </div>
    </header>

    <div class="main-layout">

        <nav class="navigasi">
            <h3>MENU</h3>

            <ul>
                <li><a href="index.php?page=home">🏠 Home</a></li>
                <li><a href="index.php?page=profile">👤 Profile</a></li>
                <li><a href="index.php?page=registrasi">📝 Registrasi</a></li>
            </ul>
        </nav>

        <main class="konten">

            <?php if ($page == 'home') { ?>

                <h2>Tempat Nongki Terbaik Di Bangka Kota</h2>
                <p class="intro">
                    Selamat datang di Kedai Kopi Nizar, 
                    tempat nongkrong yang nyaman untuk menikmati berbagai pilihan kopi dan 
                    minuman dengan cita rasa khas. 
                    Kami menghadirkan kopi berkualitas, harga bersahabat, 
                    serta suasana santai yang cocok untuk berkumpul bersama teman, keluarga, 
                    maupun menghabiskan waktu sendiri.
                </p>

                <div class="gallery">

                    <div class="card">
                        <img src="img/pantai-parai.jpg" alt="Americano">
                        <h3>Americano</h3>
                        <p>
                            Espresso dengan air panas, bercita rasa kuat dan khas.
                        </p>
                    </div>

                    <div class="card">
                        <img src="img/pantai-matras.jpg" alt="Espresso">
                        <h3>Espresso</h3>
                        <p>
                            Kopi pekat dengan aroma kuat dan rasa intens.
                        </p>
                    </div>

                    <div class="card">
                        <img src="img/pantai-tanjung.jpg" alt="Cappuccino">
                        <h3>Cappuccino</h3>
                        <p>
                            Perpaduan espresso, susu panas, dan busa lembut.
                        </p>
                    </div>

                    <div class="card">
                        <img src="img/pantai-penyusuk.jpg" alt="Kopi Susu">
                        <h3>Kopi Susu</h3>
                        <p>
                            Perpaduan kopi dan susu dengan rasa creamy.
                        </p>
                    </div>

                </div>

                <h2 class="judul-tambahan">Mengapa Mengunjungi Pantai Bangka?</h2>

                <p>
                    Pulau Bangka memiliki keindahan wisata bahari
                    yang menarik untuk dikunjungi. Keindahan pasir
                    putih, laut biru, serta batu granit menjadi
                    ciri khas pantai-pantai di Bangka.
                    Mari berwisata dan menjaga kebersihan alam.
                </p>

            <?php } elseif ($page == 'profile') { ?>

                <h2>Profile Pembuat Website</h2>

                <div class="profile-box">
                    <img src="img/profile.jpg" alt="Foto Profil">

                    <h3>Biodata Diri</h3>

                    <p><b>Nama:</b> Ahmad Nizar Fadila</p>
                    <p><b>NIM:</b> 2622500016</p>
                    <p><b>Program Studi:</b> Sistem Informasi</p>
                    <p><b>Kelas:</b> SI1A</p>
                    <p><b>Universitas:</b> [Isi nama kampus]</p>

                    <p>
                        Website ini dibuat untuk memperkenalkan
                        keindahan wisata pantai yang ada di Pulau Bangka.
                    </p>
                </div>

            <?php } elseif ($page == 'registrasi') { ?>

                <h2>Form Registrasi Wisata</h2>

                <p>
                    Silakan isi formulir berikut untuk melakukan
                    pendaftaran kunjungan wisata.
                </p>

                <?php if ($pesan != '') { ?>
                    <div class="notifikasi">
                        <?php echo $pesan; ?>
                    </div>
                <?php } ?>

                <form method="POST" action="index.php?page=registrasi"
                      class="form-registrasi">

                    <label>Nama Lengkap</label>
                    <input type="text" name="nama"
                           placeholder="Masukkan nama lengkap">

                    <label>Email</label>
                    <input type="email" name="email"
                           placeholder="Masukkan email">

                    <label>Nomor Telepon</label>
                    <input type="text" name="telepon"
                           placeholder="Masukkan nomor telepon">

                    <label>Tanggal Kunjungan</label>
                    <input type="date" name="tanggal">

                    <label>Pilih Pantai</label>
                    <select name="pantai">
                        <option value="">-- Pilih Pantai --</option>
                        <option value="Parai Tenggiri">Pantai Parai Tenggiri</option>
                        <option value="Matras">Pantai Matras</option>
                        <option value="Tanjung Pesona">Pantai Tanjung Pesona</option>
                        <option value="Penyusuk">Pantai Penyusuk</option>
                    </select>

                    <button type="submit">Kirim Registrasi</button>
                    <button type="reset" class="batal">Batal</button>

                </form>

            <?php } else { ?>

                <h2>Halaman Tidak Ditemukan</h2>
                <p>Silakan pilih menu navigasi yang tersedia.</p>

            <?php } ?>

        </main>

    </div>

    <!-- FOOTER -->
    <footer class="footer">
        ©2622500016_Ahmad_Nizar_Fadila_SI1A_UTS Pemrograman Web Dasar
        <br>
        <small>Pesona Pantai Bangka - <?php echo date('Y'); ?></small>
    </footer>

</div>

<script src="script.js"></script>

</body>
</html>