<?php
// ambil nilai page dan action yang dikirimkan URL
$page   = isset($_GET['page']) ? $_GET['page'] : 'dashboard';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

// load semua controller yang dibutuhkan
require_once 'controller/GenreController.php';

switch ($page) {

    case 'dashboard':
        include 'page/admin/dashboard/index.php';
        break;

    // ============================
    // ROUTING GENRE (PART 2)
    // ============================
    case 'genre':
        $genre = new GenreController();

        if ($action == 'create') {
            // tampilkan form input genre
            $genre->create();

        } elseif ($action == 'store') {
            // proses simpan data genre
            $genre->store();

        } else {
            // tampilkan daftar genre
            $genre->index();
        }
        break;

    // jika tidak ditemukan
    default:
        echo "Halaman tidak ditemukan";
        break;
}
?>
