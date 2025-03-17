<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portal Layanan Statistik BPS Kota Medan - Konsultasi, Pencarian, dan Permintaan Data Statistik">
    <meta name="keywords" content="BPS, Statistik, Kota Medan, Data, Konsultasi">
    <meta name="author" content="BPS Kota Medan">

    <title>Badan Pusat Statistik Kota Medan</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/script.js') }}"></script>
    <link rel="icon" type="image/png" href="{{ asset('images/Logo BPS.png') }}">    

</head>

<body>
    <section class="permbuka">
        <header class="header">
            <div class="navbar">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('images/Logo BPS Medan Putih.png') }}" alt="Logo BPS" class="logo">
                </a>                
            </div>
            <div class="awal">
                <img src="images/POLASTIK ORANGE.png" alt="POLAETIK">
                <div class="subtitle-container" id="subtitleContainer">
                    <span class="text">Portal Layanan Statistik BPS Kota Medan</span>
                </div>
            </div>
        </header>
    </section>

    <section class="informasi">
        <div class="pre-body">
            <h2>Portal Layanan Statistik</h2>
        </div>
                
        <div class="cards-container">
            <div class="container">
                <div class="card-a">
                    <img src="images/Konsultasi Statistik.png" alt="Konsultasi Statistik">
                </div>
                <div class="text-button-container">
                    <div class="text-container">
                        <h3>Konsultasi Statistik</h3>
                        <p>Klik tombol di bawah ini untuk melakukan konsultasi</p>
                    </div>
                    <a href="#" class="btn">Masuk</a>
                </div>
            </div>

            <div class="container">
                <div class="card-b">
                    <img src="images/Pencarian Data.png" alt="Pencarian Data">
                </div>
                <div class="text-button-container">
                    <div class="text-container">
                        <h3>Pencarian Data</h3>
                        <p>Mencari data publikasi BPS Kota Medan</p>
                    </div>
                    <a href="#" class="btn">Masuk</a>
                </div>
            </div>

            <div class="container">
                <div class="card-c">
                    <img src="images/Permintaan Data.png" alt="Permintaan Data">
                </div>
                <div class="text-button-container">
                    <div class="text-container">
                        <h3>Permintaan Data</h3>
                        <p>Klik tombol di bawah ini untuk melakukan permintaan data</p>
                    </div>
                    <a href="{{ url('/data-request') }}" class="btn">Masuk</a>
                </div>
            </div>
        </div>



        <div class="cards-container1">
            <div class="container1">
                <div class="card1">
                    <img src="images/Perpustakaan Digital.png" alt="Perpustakaan Digital">
                </div>
                <div class="text-button-container1">
                    <div class="text-container1">
                        <h3>Perpustakaan Digital</h3>
                        <p>Publikasi statistik terbitan BPS dari berbagai kategori.</p>
                    </div>
                    <a href="https://perpustakaan.bps.go.id/opac/" class="btn1">Masuk</a>
                </div>
            </div>

            <div class="container1">
                <div class="card1">
                    <img src="images/SILASTIK.png" alt="SILASTIK">
                </div>
                <div class="text-button-container1">
                    <div class="text-container1">
                        <h3>SILASTIK</h3>
                        <p>Layanan penjualan data mikro, publikasi, dan peta digital wilkerstat. </p>
                    </div>
                    <a href="https://silastik.bps.go.id/v3/index.php" class="btn1">Masuk</a>
                </div>
            </div>

            <div class="container1">
                <div class="card1">
                    <img src="images/ROMANTIK.png" alt="ROMANTIK">
                </div>
                <div class="text-button-container1">
                    <div class="text-container1">
                        <h3>ROMANTIK</h3>
                        <p>Layanan bagi instansi pemerintah yang akan melakukan survei dan mengajukan rekomendasi kegiatan statistik.</p>
                    </div>
                    <a href="https://romantik.web.bps.go.id/" class="btn1">Masuk</a>
                </div>
            </div>

            <div class="container1">
                <div class="card1">
                    <img src="images/SIRUSA.png" alt="SIRUSA">
                </div>
                <div class="text-button-container1">
                    <div class="text-container1">
                        <h3>SIRUSA</h3>
                        <p>Layanan informasi mengenai metadata produk statistik.</p>
                    </div>
                    <a href="https://sirusa.web.bps.go.id/metadata/" class="btn1">Masuk</a>
                </div>
            </div>
        </div>
    </section>
    
    <section class="tentang-kami">
        <div class="logo-alamat-container">
            <div class="logo-bps">
                <a href="https://medankota.bps.go.id" class="logo-link">
                    <img src="images/Logo BPS.png" alt="Logo BPS">
                    <span>BADAN PUSAT STATISTIK <br> KOTA MEDAN</span>
                </a>
            </div>
            <div class="alamat-bps">
                <address>
                    Jl. Gaperta/ Brigjend. H. Abdul Manaf Lubis No. 311 Medan - Indonesia,<br> 
                    Telp (62-61) 8449285, 8449289,<br> Faks (62-61) 8449270 <br>
                    Mailbox:bps1275@bps.go.id
                </address>
                <div class="social-icons">
                    <a href="https://www.youtube.com/@badanpusatstatistikkotamed5494" target="_blank">
                        <img src="images/youtube.png" alt="YouTube">
                    </a>
                    <a href="https://www.facebook.com/Bpskotamedan" target="_blank">
                        <img src="images/facebook.png" alt="Facebook">
                    </a>
                    <a href="https://www.instagram.com/bpskotamedan/" target="_blank">
                        <img src="images/instagram.png" alt="Instagram">
                    </a>
                    <a href="https://x.com/bps_statistic?mx=2" target="_blank">
                        <img src="images/x.png" alt="X">
                    </a>
                </div>
            </div>
        </div>

        <div class="tentang-container">
            <div class="tentang-bps">
                <h2>Tentang BPS</h2>
                <ul>
                    <li><a href="https://ppid.bps.go.id/app/konten/1275/Profil-BPS.html?_gl=1*dfosag*_ga*NDU3NTgxMzgzLjE3MjYxMTY0NDA.*_ga_XXTTVXWHDB*MTczOTA5MTUyMC4zLjAuMTczOTA5MTUyMC4wLjAuMA..#pills-0">Informasi Umum</a></li>
                    <li><a href="https://ppid.bps.go.id/app/konten/1275/Profil-BPS.html?_gl=1*dfosag*_ga*NDU3NTgxMzgzLjE3MjYxMTY0NDA.*_ga_XXTTVXWHDB*MTczOTA5MTUyMC4zLjAuMTczOTA5MTUyMC4wLjAuMA..#pills-1">Visi dan Misi</a></li>
                    <li><a href="https://ppid.bps.go.id/app/konten/1275/Profil-BPS.html?_gl=1*dfosag*_ga*NDU3NTgxMzgzLjE3MjYxMTY0NDA.*_ga_XXTTVXWHDB*MTczOTA5MTUyMC4zLjAuMTczOTA5MTUyMC4wLjAuMA..#pills-3">Tugas dan Fungsi</a></li>
                </ul>
            </div>
            <div class="tentang-pst">
                <h2>Tentang PST</h2>
                <ul>
                    <li><a href="https://ppid.bps.go.id/app/konten/1275/Layanan-BPS.html?_gl=1*88xdhl*_ga*NDU3NTgxMzgzLjE3MjYxMTY0NDA.*_ga_XXTTVXWHDB*MTczOTA5MTUyMC4zLjEuMTczOTA5MjQ0NC4wLjAuMA..#pills-0">Pelayanan Statistik Terpadu</a></li>
                    <li><a href="https://ppid.bps.go.id/app/konten/1275/Layanan-BPS.html?_gl=1*88xdhl*_ga*NDU3NTgxMzgzLjE3MjYxMTY0NDA.*_ga_XXTTVXWHDB*MTczOTA5MTUyMC4zLjEuMTczOTA5MjQ0NC4wLjAuMA..#pills-1">Standar Pelayanan dan Maklumat Pelayanan</a></li>
                    <li><a href="https://ppid.bps.go.id/app/konten/1275/Layanan-BPS.html?_gl=1*88xdhl*_ga*NDU3NTgxMzgzLjE3MjYxMTY0NDA.*_ga_XXTTVXWHDB*MTczOTA5MTUyMC4zLjEuMTczOTA5MjQ0NC4wLjAuMA..#pills-2">Kompensasi Pelayanan</a></li>
                </ul>
            </div>
            <div class="bantuan">
                <h2>Bantuan</h2>
                <ul>
                    <li><a href="https://ppid.bps.go.id/app/konten/1275/Layanan-BPS.html?_gl=1*88xdhl*_ga*NDU3NTgxMzgzLjE3MjYxMTY0NDA.*_ga_XXTTVXWHDB*MTczOTA5MTUyMC4zLjEuMTczOTA5MjQ0NC4wLjAuMA..#pills-7">Survei Kepuasan</a></li>
                    <li><a href="https://ppid.bps.go.id/app/keberatan_informasi">Pengaduan</a></li>
                    <li><a href="https://ppid.bps.go.id/app/konten/1275/Layanan-BPS.html">Informasi Pelayanan</a></li>
                </ul>
            </div>
            <div class="website">
                <h2>Website</h2>
                <ul>
                    <li><a href="https://ppid.bps.go.id/app/konten/1275/Profil-BPS.html#pills-0">BPS</a></li>
                    <li><a href="https://ppid.bps.go.id/app/konten/1275/Profil-PPID.html#pills-0">PPID</a></li>
                    <li><a href="#">Pojok Statistik</a></li>
                </ul>
            </div>
            
        </div>
    </section>
    <footer>
        &copy; 2025 Badan Pusat Statistik Kota Medan. All Rights Reserved.
    </footer>
</body>


</html>