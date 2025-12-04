<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

$view = null; // default

if ($page == 'genre') {

    if ($action == 'create') {
        $view = '../page/admin/admin-page/input_genre.php';
    }

    elseif ($action == 'store') {
        $view = '../page/admin/admin-page/store_genre.php';
    }

    elseif ($action == 'index') {
        $view = '../page/admin/admin-page/list_genre.php';
    }

    else {
        $view = null;
    }
}
?>
