<?php 
if(!isset($content))
    {
        die ('halaman tidak dapat diakses langsung');
    }
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'partials/head.php' ?>

<body>
<?php include 'partials/navbar.php'?>

<main>
    <div class="container-fluid">
        <?=  $content?? '' ?>
    </div>
</main>

<?php include 'partials/footer.php'?>
</body>

</html>