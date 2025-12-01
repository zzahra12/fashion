<!DOCTYPE html>
<html lang="en">
<?php include "component/header.php"; ?>

<body>
<?php  

include "component/navbar.php";

// routing
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

if($page == 'home') {
    include "page/home.php";
} 
else if($page == 'shopall') {
    include "page/shop all.php";
}
else if($page == 'kemejawanita') {
    include "page/kemejawanita.php";
}
else if($page == 'jeanswanita') {
    include "page/jeanswanita.php";
}
else if($page == 'gaunwanita') {
    include "page/gaunwanita.php";
}
else if($page == 'sepatuwanita') {
    include "page/sepatuwanita.php";
}
else if($page == 'detail') {
    include "page/detail.php";
}
else {
    echo "<h2>Halaman tidak ditemukan</h2>";
}

include "component/footer.php";
?>
</body>
</html>
