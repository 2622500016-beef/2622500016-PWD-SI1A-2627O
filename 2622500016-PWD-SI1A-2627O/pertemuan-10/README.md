pada pertemuan 10 saya melakukan:

1. menyalin artefak pertemuan 9 untuk baseline pertemuan 10
2. menyiapkan direktori dan lingkungan pengembangan pertemuan - 10
3. memeriksa kesiapan phpMyAdmin dan repositori pertemuan - 10
4. menentukan nama basis data dan tabel P10 dengan nama basis data db_pwd_2622500016 dan nama tabel tbl_kontak_2622500016
5. merancang atribut dan tipe data tabel kontak yaitu berjumlah 8 atribut dan tipe data
6. menambahkan 1 atribut bernama id sebagai kunci utama dengan tipe data INT ditetapkan sebagai PRIMERY KEY dan menggunakan AUTO_INCREMENT
7. memeriksa rancangan akhir struktur tabel kontak
8. mempelajari perintah DDL. CREATE DATABASE membuat basis data, USE memilih basis data yang aktif, dan CREATE TABLE membuat tabel beserta atributnya. bentuk SQL dari tabel yang saya buat:
   CREATE DATABASE db_pwd_2622500016;
   USE db_pwd_2622500016;
   CREATE TABLE tbl_kontak_2622500016(
   id INT PRIMARY KEY AUTO_INCREMENT,
   nama VARCHAR(50),
   email VARCHAR(255),
   semester TINYINT,
   tanggal DATE,
   jenis_pesan VARCHAR(20),
   minat VARCHAR(50),
   prodi VARCHAR(2),
   pesan VARCHAR(300)
   );
9. memasukkan data awal ke tabel kontak. data pertama:'Ahmad  nizar  fadila', 'nizar@atmaluhur.ac.id', 2, '2026-11-26', 'saran', 'HTML, CSS', 'TI', 'ini percobaan'),. kolom id dibiarkan kosong dan terisi otomatis menjadi 1.
10. mempelajari perintah SQL INSERT (DML).
    INSERT INTO tbl_kontak_2622500016
    (nama, email, semester, tanggal, jenis_pesan, minat, prodi, pesan)
    VALUES
    ('Andi', 'andi@example.com', 2, '2026-11-26', 'pertanyaan', 'HTML, CSS', 'TI', 'Saya ingin belajar pemrograman web.');
11. memeriksa data awal di tab Browse. kedua data tampil dengan id 1 dan 2 yang terbentuk otomatis, dan kolom minat tampil sebagai teks.
12. menentukan pengaturan ekspor basis data db_pwd_2622500016: Export method Quick dan Format SQL.
13. mengekspor basis data ke berkas db_pwd_2622500016.sql dan memindahkannya ke direktori pertemuan-10.
14. memeriksa kelengkapan berkas ekspor SQL di VS Code:
    ada perintah CREATE TABLE tbl_kontak_2622500016 dengan 9 atribut sesuai struktur tabel.
    ada perintah INSERT INTO dengan 2 data (ahmad nizar fadila dan Andi) yang sama dengan data di tab Browse.
    index yang diekspor hanya ADD PRIMARY KEY (id), tanpa UNIQUE.
    kolom id memakai AUTO_INCREMENT.
