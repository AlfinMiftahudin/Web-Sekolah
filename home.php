<?php
$title = 'Home - namaSD';
$pageCss = 'home.css';

ob_start();
?>

<section class="content-section hero-sections">
    <div class="dot-pattern"></div>
    <div class="blobs">
        <div class="blob blob-1"></div>
        <div class="blob-square squared-1"></div>
        <div class="blob-square squared-2"></div>
        <div class="blob-square squared-3"></div>
        <div class="blob blob-2"></div>
    </div>

    <!-- content -->

    <div class="container-fluid hero-section text-justify">
        <p class="quotes"><i class="fa-solid fa-star"></i> Sekolah Unggulan, Generasi Hebat</p>
        <div class="tittles">
            <h1 class="tittle">Selamat Datang di</h1>
            <h1 class="tittle tittle-name">namaSD</h1>
        </div>
        <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident accusantium sequi in suscipit consequuntur dolorum nulla corporis perferendis laudantium? Magnam blanditiis ipsam maxime dolorem tempora! Id, reiciendis exercitationem! Non asperiores dignissimos sapiente aspernatur quis ipsam, architecto quas itaque similique autem?</p>
        <div class="buttons">
            <a href="" class="button btn-regist"><i class="fa-solid fa-user-plus"></i> Daftar</a>
            <a href="" class="button btn-contact"><i class="fa-solid fa-phone"></i> Contact Us</a>
        </div>

    </div>
    <div class="container-fluid hero-section">
        <img src="asset/img/hero-sdn-walahari.jpg" alt="hero">
    </div>



</section>
<section class="content-section vission">

    <div class="tittle">
        <h1 class="tittle tittle-choose">Mengapa Memilih namaSD?</h1>
    </div>

</section>

<?php
$cards =
    [
        [
            'icon' => 'fa-school',
            'tittle' => 'Pendidikan Berkualitas',
            'desc' => 'Kurikulum terstruktur dengna pengajar profesional dan fasilitas belajar yang memadai'
        ],
        [
            'icon' => 'fa-children',
            'tittle' => 'Karakter & Akhlak',
            'desc' => 'Menanamkan nilai-nilai karakter dan akhlak mulia dalam setiap kegiatan sekolah'
        ],
        [
            'icon' => 'fa-award',
            'tittle' => 'Prestasi & Kreativitas',
            'desc' => 'Mendorong siswa untuk berprestasi dan mengambangkan bakat serta Kreativitas'
        ],
        [
            'icon' => 'fa-leaf',
            'tittle' => 'Lingkungan Nyoman',
            'desc' => 'Lingkungan sekolah yang aman, nyoman, dan mendukung proses belajar mengajar'
        ]
    ];

?>

<section class="content-section cards">
    <?Php
    foreach ($cards as $card):
    ?>
        <div class="card">
            <div class="card-desc card-icon"><i class="fa-solid <?= $card['icon']?>"></i></div>
            <div class="card-desc tittle-card">
                <h3><?= $card['tittle'] ?></h3>
            </div>
            <div class="card-desc card-detail">
                <p><?= $card['desc'] ?></p>
            </div>
        </div>
    <?php
    endforeach;
    ?>
</section>


<?php
$content = ob_get_clean();
include 'layout.php';
?>