<!DOCTYPE html>
<html lang = "en">

<head>
    <meta charset = "UTF-8">
    <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
    <title> Form Permintaan Data </title>
    <link rel="stylesheet" href="{{ asset('css/data-request.css') }}">
    <script src="{{ asset('js/script.js') }}"></script>
    <link rel="icon" type="image/png" href="{{ asset('images/Logo BPS.png') }}"> 
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>


    <div class = "welcoming-text">
        <span>Mohon isi formulir di bawah ini dengan lengkap dan benar 
            <br>agar permintaan data Anda dapat segera kami proses. 🙂
        </span>
    </div>

    <div class = "container">
        <div class = "permintaan-data">
            <img src = "images/Logo BPS.png" alt = "Logo BPS" class = "logo2">
            <p class = "teks-formulir">Form Permintaan Data</p>
        </div>


        <form id = signupForm>
            <label for = "nama">Nama:</label>
            <input type = "text" id = "nama" name = "nama" required>

            <label for = "email">Email:</label>
            <input type = "email" id = "email" name = "email" required>

            <label for = "handphone">No. Handphone (WhatsApp):</label>
            <input type = "handphone" id = "handphone" name = "handphone" required>

            <label>Jenis Kelamin:</label>
            <select id = "jeniskelamin" name="jeniskelamin" required>
                <option value = "">-- Jenis Kelamin --</option>
                <option value = "SLTA/Sederajat">Laki-Laki</option>
                <option value = "D1/D2/D3">Perempuan</option>     
            </select>

            <label for = "pendidikan">Pendidikan Tertinggi yang Ditamatkan:</label>
            <select id = "pendidikan" name="pendidikan" required>
                <option value = "">-- Pilih Pendidikan --</option>
                <option value = "SLTA/Sederajat">SLTA/Sederajat</option>
                <option value = "D1/D2/D3">D1/D2/D3</option>
                <option value = "D4/S1">D4/S1</option>
                <option value = "S2">S2</option>
                <option value = "S3">S3</option>
            </select>

            <label for = "pekerjaan">Status Pekerjaan Saat Ini:</label>
            <select id = "pekerjaan" name="pekerjaan" required>
                <option value = "">-- Status Pekerjaan --</option>
                <option value = "Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
                <option value = "Peneliti/Dosen">Peneliti/Dosen</option>
                <option value = "ASN/TNI/Polri">ASN/TNI/Polri</option>
                <option value = "Pegawai BUMN/BUMD">Pegawai BUMN/BUMD</option>
                <option value = "Pegawai Swasta">Pegawai Swasta</option>
                <option value = "Lainnya">Lainnya</option>
            </select>

            <label for = "instansi">Nama Instansi:</label>
            <input type = "text" id = "instansi" name = "instansi" required>

            <label for = "permintaan_data">Permintaan Data:</label>
            <textarea id = "permintaan_data" name = "permintaan_data" required></textarea>


            <button type = "button" onclick = "kirimKeWhatsApp()">Kirim Permintaan</button>
            <button type = "button" onclick = "kembali()">Kembali</button>
        </form>
    </div>

</body>

</html>