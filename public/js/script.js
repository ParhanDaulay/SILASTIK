window.addEventListener("scroll", function () {
    const navbar = document.querySelector(".navbar");
    if (window.scrollY > 50) {
        navbar.classList.add("scrolled");
    } else {
        navbar.classList.remove("scrolled");
    }
});

window.addEventListener("load", function () {
    setTimeout(() => {
        window.scrollTo({ top: 0, behavior: "smooth" });
    }, 100);
});
window.addEventListener("scroll", function() {
    var navbar = document.querySelector(".navbar");
    navbar.classList.toggle("scrolled", window.scrollY > 50);
});



function kirimKeWhatsApp() {
    const teksPembuka = "Halo kak. Saya ingin melakukan Permintaan Data kepada Badan Pusat Statistik Kota Medan. Berikut ini ialah identitas diri saya.";

    const nama = document.getElementById('nama').value.trim();
    const email = document.getElementById('email').value.trim();
    const handphone = document.getElementById('handphone').value.trim();
    const jeniskelamin = document.getElementById('jeniskelamin').value;
    const pendidikan = document.getElementById('pendidikan').value;
    const pekerjaan = document.getElementById('pekerjaan').value;
    const instansi = document.getElementById('instansi').value.trim();
    const permintaan_data = document.getElementById('permintaan_data').value.trim();

    const teksPenutup = "Demikian permintaan data yang saya sampaikan. Terima kasih atas perhatiannya.";

    // Validasi Nama
    const namaRegex = /^[A-Za-z\s]+$/;
    if (nama === "") {
        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Nama tidak boleh kosong!"
        });
        return;
    }

    if (!nama.match(namaRegex)) {
        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Nama hanya boleh mengandung huruf dan spasi!"
        });
        return;
    }

    // Validasi Email
    const emailRegex = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    if (email === "") {
        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Email tidak boleh kosong!"
        });
        return;
    }

    if (!email.match(emailRegex)) {
        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Masukkan email yang valid!"
        });
        return;
    }

    // Validasi Nomor Handphone
    const handphoneRegex = /^[0-9]{10,15}$/;
    if (handphone === "") {
        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "No. Handphone tidak boleh kosong!"
        });
        return;
    }

    if (!handphone.match(handphoneRegex)) {
        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Masukkan No. Handphone yang valid (hanya angka)!"
        });
        return;
    }

    // Validasi Jenis Kelamin
    if (jeniskelamin === "") {
        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Silahkan pilih jenis kelamin!"
        });
        return;
    }

    // Validasi Pendidikan
    if (pendidikan === "") {
        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Silahkan pilih pendidikan terakhir yang ditamatkan!"
        });
        return;
    }

    // Validasi Pekerjaan
    if (pekerjaan === "") {
        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Silahkan pilih status pekerjaan saat ini!"
        });
        return;
    }

    // Validasi Instansi
    if (instansi === "") {
        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Nama instansi tidak boleh kosong!"
        });
        return;
    }

    // Validasi Permintaan Data
    if (permintaan_data === "") {
        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Silahkan isi permintaan data yang Anda inginkan!"
        });
        return;
    }

    // Konfirmasi sebelum mengirim ke WhatsApp
    Swal.fire({
        title: "Apakah data sudah benar?",
        text: "Pastikan semua data sudah diisi dengan benar!",
        icon: "question",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Ya, kirim sekarang!"
    }).then((result) => {
        if (result.isConfirmed) {
            const pesan = `
${teksPembuka}

🔹 *Nama* : ${nama}
🔹 *Email* : ${email}
🔹 *No. Handphone* : ${handphone}
🔹 *Jenis Kelamin* : ${jeniskelamin}
🔹 *Pendidikan* : ${pendidikan}
🔹 *Pekerjaan* : ${pekerjaan}
🔹 *Instansi* : ${instansi}
🔹 *Permintaan Data* : ${permintaan_data}

${teksPenutup}
            `;

            const nomorWhatsApp = '6281363392124'; // Tanpa "+" agar bisa dibuka di WhatsApp Web
            const linkWhatsApp = `https://wa.me/${nomorWhatsApp}?text=${encodeURIComponent(pesan)}`;

            window.open(linkWhatsApp, '_blank');
        }
    });
}

// Fungsi untuk kembali ke halaman utama
function kembali() {
    Swal.fire({
        title: "Apakah Anda yakin?",
        text: "Anda akan kembali ke halaman utama!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Ya, kembali!"
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = "/";
        }
    });
}
