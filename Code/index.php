<!DOCTYPE html>
<html lang="en">

<body style="background-color: #020317;">
    <?php include '../Component/header.php';
     include '../Component/navbar.php'; 
    
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';
    switch ($page) {
        case 'home':
            include '../Page/home.php';
            break;
        case 'browse':
            include '../Page/browse.php';
            break;
        case 'details':
            include '../Page/details.php';
            break;
        default:
            include '../Page/home.php';
            break;
    }
    include '../Component/footer.php'; ?>



</body>
</html>



	<!-- <div style="background-color: #010F26; height: 9dvh; border-top: 0.25dvh solid #ffffff;" class="navmain">
        <a href="wishlist.html" style="color: #ffffff;">WISHLIST</a>
        <a href="community.html" style="color: #ffffff;">COMMUNITY</a>
        <a href="index.html" style="color: #ffffff;">EL GAME</a>
        <a href="categories.html" style="color: #ffffff;">CATEGORIES</a>
        <a href="news.html" style="color: #ffffff;">NEWS</a>
    </div> -->
<!-- 
    <div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../Assets/Gambar/Thumbnail/Subnautica2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../Assets/Gambar/Thumbnail/EldenRing.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../Assets/Gambar/Thumbnail/Deeeer.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> -->


