<?php
date_default_timezone_set('Asia/Jakarta');

$page = 'home';

if (isset($_GET['page'])) {
    $page = $_GET['page'];
}

$pesan = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = isset($_POST['nama']) ? trim($_POST['nama']) : '';
    $email = isset($_POST['antrian']) ? trim($_POST['antrian']) : '';
    $telepon = isset($_POST['telepon']) ? trim($_POST['telepon']) : '';
    $tanggal = isset($_POST['tanggal']) ? trim($_POST['tanggal']) : '';

    if ($nama == '' || $email == '' || $telepon == '' || $tanggal == '') {
        $pesan = 'Mohon lengkapi semua data!';
    } elseif (!filter_var($antrian, FILTER_VALIDATE_EMAIL)) {
        $pesan = 'Mohon isi nomor antrian!';
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
                        <img src="img/Americano.jpg" alt="Americano">
                        <h3>Americano</h3>
                        <p>
                            Espresso dengan air panas, bercita rasa kuat dan khas.
                        </p>
                    </div>

                    <div class="card">
                        <img src="img/Espresso.jpg" alt="Espresso">
                        <h3>Espresso</h3>
                        <p>
                            Kopi pekat dengan aroma kuat dan rasa intens.
                        </p>
                    </div>

                    <div class="card">
                        <img src="img/Cappuccino.jpg" alt="Cappuccino">
                        <h3>Cappuccino</h3>
                        <p>
                            Perpaduan espresso, susu panas, dan busa lembut.
                        </p>
                    </div>

                    <div class="card">
                        <img src="img/KopiSusu.jpg" alt="Kopi Susu">
                        <h3>Kopi Susu</h3>
                        <p>
                            Perpaduan kopi dan susu dengan rasa creamy.
                        </p>
                    </div>

                </div>

                <h2 class="judul-tambahan">Mengapa Memilih Kedai Kopi Nizar?</h2>

                <p>
                    Nikmati pengalaman menikmati kopi dengan beragam pilihan menu, 
                    cita rasa istimewa, dan pelayanan terbaik. 
                    Kedai Kopi Nizar menjadi tempat yang tepat untuk bersantai, 
                    berbincang, dan menghabiskan waktu bersama orang-orang terdekat.
                </p>

            <?php } elseif ($page == 'profile') { ?>

                <h2>Profile Pembuat Website</h2>

                <div class="profile-box">
                    <img src="img/profile.png" alt="Foto Profil">

                    <h3>Biodata Diri</h3>

                    <p><b>Nama:</b> Ahmad Nizar Fadila</p>
                    <p><b>NIM:</b> 2622500016</p>
                    <p><b>Program Studi:</b> Sistem Informasi</p>
                    <p><b>Kelas:</b> SI1A</p>
                    <p><b>Universitas:</b> Institut Sains Bisnis Atma Luhur Pangkal Pinang </p>

                    <p>
                        <b>"Website ini dibuat untuk memperkenalkan Kedai Kopi Nizar, 
                           tempat menikmati kopi berkualitas dengan cita rasa khas 
                           dan suasana nyaman bagi para pecinta kopi."
                        </b>
                    </p>
                </div>

            <?php } elseif ($page == 'registrasi') { ?>

                <h2>Form Registrasi Kedai Kopi Nizar</h2>

                <p>
                    Silakan isi formulir berikut untuk melakukan
                    Pemesanan di Kedai Kopi Nizar.
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

                    <label>Nomar Antrian</label>
                    <input type="text" name="Antrian"
                           placeholder="Masukkan nomor antrian">

                    <label>Nomor Telepon</label>
                    <input type="text" name="telepon"
                           placeholder="Masukkan nomor telepon">

                    <label>Tanggal Pemesanan</label>
                    <input type="date" name="tanggal">

                    <label>Jumlah</label>
                    <input type="number" name="jumlah" id="jumlah"
                            placeholder="Masukkan jumlah pesanan"
                            min="1" required>
                    
                    <label>Pilih Menu</label>
                    <select name="Menu">
                        <option value="Americano">Americano</option>
                        <option value="Espresso">Espresso</option>
                        <option value="Cappuccino">Cappuccino</option>
                        <option value="Kopi Susu">Kopi Susu</option>
                    </select>

                    <button type="submit">Kirim Pesanan</button>
                    <button type="reset" class="batal">Batal</button>

                </form>

            <?php } else { ?>

                <h2>Halaman Tidak Ditemukan</h2>
                <p>Silakan pilih menu navigasi yang tersedia.</p>

            <?php } ?>

        </main>

    </div>

    <footer class="footer">
        ©2622500016_Ahmad_Nizar_Fadila_SI1A_UTS Pemrograman Web Dasar
        <br>
        <small>Kedai Kopi Nizar - <?php echo date('Y'); ?></small>
    </footer>

</div>

<script src="script.js"></script>

</body>
</html>