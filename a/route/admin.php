<?php
// session_start();
require_once('../../controller/GenreController.php');





$page = $_GET['page'] ?? 'dashboard';
$action = $_GET['action'] ?? 'index';

// $action = $_GET['action'] ?? 'index';

$genre = new GenreController();

// Routes for admin panel

switch ($page) {
    case 'dashboard':
        include "page/dashboard.php";
        break;
    // case 'genre' : include "page/input_genre.php"; break; 
    case 'genre': {
        switch ($action) {
            case 'index':
                $genre->index();
                break;
            case 'create':
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $genre->store();
                } else {
                    $genre->create(); // hanya untuk tampilan form
                }
                break;

        }
    }
        break;
}


// if($_POST) $genre->create();
// }