<?php

require_once __DIR__ . '../vendor/autoload.php';

use app\Config\Router;

$router = new Router;

$router->get('/', function () {
    header('Location: app/Views/Home.php');
});

$router->addNotFoundHandler(function () {
    echo 'Not Found!';
});


// Auth Routes
$router->get('/login', function () {
    header('Location: onhym/supplierportal/src/app/Views/Auth/login.php');
});

$router->post('/login/post', function () {
    header('Location: app/Views/Auth/login.php');
});

$router->get('/signin', function () {
    header('Location: app/Views/Auth/signin.php');
});

$router->post('/signin/fournisseur', function () {
    header('Location: app/Views/Auth/signin.php');
});

$router->post('/signin/entreprise', function () {
    header('Location: app/Views/Auth/signin.php');
});

$router->get('/forgetPassword', function () {
    header('Location: app/Views/Auth/forgetPassword.php');
});
