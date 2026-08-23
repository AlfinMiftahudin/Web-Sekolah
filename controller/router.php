<?php

if (php_sapi_name() === 'cli-server') {
    # code...$
    $requestedFile = __DIR__ . '/../' . ltrim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH),'/');



    if(is_file($requestedFile)&&pathinfo($requestedFile,PATHINFO_EXTENSION)!=='php')
        {
            return false;
        }
}

$page = trim(parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH),'/');
$allowed = ['about', 'daftar', 'home', '', 'page-404'];

if ($page === '') {
    # code...
    $page = 'home';
}

if(in_array($page, $allowed))
    {
        include (__DIR__ . '/../' . $page ==='' ? 'home.php' : $page . '.php');

    }
    else{http_response_code(404);
    include(__DIR__ . '/../page-404.php');
    }


?>