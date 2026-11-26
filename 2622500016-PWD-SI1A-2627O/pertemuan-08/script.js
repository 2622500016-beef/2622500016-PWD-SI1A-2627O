document.addEventListener("DOMContentLoaded", function () {
    console.log("Website Kedai Kopi Nizar berhasil dibuka!");

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