// Pesan ketika halaman selesai dibuka
document.addEventListener("DOMContentLoaded", function () {
    console.log("Website Pesona Pantai Bangka berhasil dibuka!");

    // Efek konfirmasi ketika formulir dikirim
    const form = document.querySelector(".form-registrasi");

    if (form) {
        form.addEventListener("submit", function () {
            const nama = form.querySelector('[name="nama"]').value;

            if (nama.trim() === "") {
                alert("Nama lengkap harus diisi!");
            }
        });
    }
});