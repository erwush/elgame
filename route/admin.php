require_once(../config/DatabaseController.php);

$page = $_GET['page'] ?? 'dashboard';
switch($page) {
    case 'dashboard' : include "page/dashboard.php"; break;
    case 'genre' : include "page/input_genre.php"; break;
    default : echo "halaman is tidak found";
}