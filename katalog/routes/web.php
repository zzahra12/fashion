<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

if ($page == 'genre') {

    if ($action == 'create') {
        include '../page/admin/admin-page/input_genre.php';
    }

    elseif ($action == 'store') {
        include '../page/admin/admin-page/store_genre.php';
    }

    elseif ($action == 'index') {
        include '../page/admin/admin-page/list_genre.php';
    }

    else {
        echo "<h3>Halaman Tidak Ditemukan</h3>";
    }
}
?>
