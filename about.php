<?php
$tittle = 'About - namaSD';
$pageCSS = 'about.css';
ob_start();
?>


ini adalah data staff namaSD
web ini di buat oleh alfin miftahudin
<?php
$content = ob_get_clean();
include 'layout.php';
?>