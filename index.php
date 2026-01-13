<?php
require_once 'config/config.php';

$page = $_GET['page'] ?? 'home';
$allowed = ['home','about','menu','gallery','order','contact'];

if (!in_array($page, $allowed)) {
    $page = 'home';
}

include 'includes/head.php';
include 'includes/navbar.php';
include 'pages/' . $page . '.php';
include 'includes/footer.php';
