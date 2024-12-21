<?php
    require_once __DIR__ . '/config/config.php';

    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $uri = explode( '/', $uri );

    if ($uri[1] !== 'api') {
        header("HTTP/1.1 404 Not Found");
        exit();
    }else if($uri[2] !== 'user') {
        header("HTTP/1.1 404 Not Found");
        exit();
    }

    require ROOT_PATH . '/Controller/API/UserController.php';

    $user = new UserController();
    $methodName = $uri[4] . 'Action';
    $user->$methodName();
    ?>