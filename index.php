<?php
$title = 'Home - namaSD';
$pageCss = 'home.css';

ob_start();
?>

<section class="hero-section">
    <div class="dot-pattern"></div>
    <div class="blob blob-1"></div>
    <div class="blob-square squared-1"></div>
    <div class="blob-square squared-2"></div>
    <div class="blob-square squared-3"></div>
    <div class="blob blob-2"></div>
    <div class="section-content">
        <div class="hero-details">
            <p class="quotes"><i class="fa-solid fa-star"></i> Sekolah Unggulan, Generasi Hebat</p>
            <h1 class="tittle">Selamat Datang Di</h1>
            <h2 class="tittle-nama-sekolah">Nama SD</h2>

            <p class="description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum deleniti
                numquam quis odio,
                deserunt consectetur excepturi eligendi expedita quam aliquid inventore quo quidem adipisci
                consequuntur, ab aperiam commodi distinctio officiis.</p>

            <div class="buttons">
                <a href="#" class="button instagram" target="_blank"><i class="fa-solid fa-user-plus"></i>
                    Daftar</a>
                <a href="https://wa.me/6285283713476?text=Halo%20saya%20ingin%20bertanya"
                    class="button contact-us" target="_blank" rel="noopener noreferrer"><i
                        class="fa-brands fa-whatsapp"></i> Contact Us</a>
            </div>

        </div>

        <div class="hero-image-wrapper">
            <div class="hero-image">

                <!-- <img src="asset/img/hero-sdn-walahari.jpg" alt="hero" class="hero-image"> -->
                <p>ini gambar</p>
            </div>
        </div>

    </div>
</section>
<section class="school-desc">
    <div class="section-school-content">
        <div class="section-school-tittle">
            <h1>Mengapa Memilih namaSD?</h1>
        </div>
        <div class="section-school-menu">
            <div class="section-school-list">
                <div class="school-card">
                    <i class="fa-solid fa-school"></i>
                    <h3>
                        Pendidikan Berkualitas
                    </h3>
                    <p>Kurikulum terstruktur dengna pengajar profesional dan fasilitas belajar yang memadai</p>
                </div>
            </div>
            <div class="section-school-list">
                <div class="school-card">
                    <i class="fa-solid fa-children"></i>
                    <h3>
                        Karakter & Akhlak
                    </h3>
                    <p>Menanamkan nilai-nilai karakter dan akhlak mulia dalam setiap kegiatan sekolah</p>
                </div>
            </div>

            <div class="section-school-list">
                <div class="school-card">
                    <i class="fa-solid fa-award"></i>
                    <h3>
                        Prestasi & Kreativitas
                    </h3>
                    <p>Mendorong siswa untuk berprestasi dan mengambangkan bakat serta Kreativitas</p>
                </div>
            </div>

            <div class="section-school-list">
                <div class="school-card">
                    <i class="fa-solid fa-award"></i>
                    <h3>
                        Lingkungan Nyoman
                    </h3>
                    <p>Lingkungan sekolah yang aman, nyoman, dan mendukung proses belajar mengajar</p>
                </div>
            </div>

        </div>
    </div>
</section>

<?php
$content =ob_get_clean();
include 'layout.php';

?>