<?php
// session_start();
require_once('../../config/Database.php');
require_once('../../model/models.php');
require_once('../../controller/controllers.php');



$page = $_GET['page'] ?? 'dashboard';

switch ($page){
    case 'dashboard' : include "page/dashboard.php"; break;
    case 'genre' : include "admin-page/admin_page.php"; break;