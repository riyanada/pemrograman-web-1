<?php
$_SITE_TITLE = 'TEDC23';
$_SITE_INFO = 'Project UAS Pemograman Web 1.';
$_SITE_CREDIT = '© ' . date("Y") . ' Hand-crafted & Made with D112121062';
$_PATH_IMAGE = './assets/img/';
$_PATH_ASSETS = './assets/';
$_MENU_TMP = './layout/menus.php';
$_FOOT_TMP = './layout/footer.php';
$_QUERY_LIMIT = 5;


$currentURL = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
if (strpos($currentURL, 'login.php') !== false) {
    session_start();
} else {
    include_once './helper/helper.php';
}