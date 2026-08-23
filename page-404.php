<?php
 $title = 'page yang anda cari tidak dapat ditemukan';
 $pageCss = '404.css';

 ob_start();
?>
page yang anda cari tidak dapat ditemukan

<?php
$content = ob_get_clean();
include 'layout.php';
?>