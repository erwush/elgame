<link rel="stylesheet" href="CSS/details.css">

<div class="carousel-outer">


</div>
<div class="container-carousel">
  <div class="carousel-section">
    <div class="carousel-top-section">

     <h1 class="section-title"> DEEEER Simulator </h1>
<a href="" class="carousel-top-btn">
      <h4px>BROWSE SIMILAR GAMES</h4>
    </a>
       

    </div>
    
    <div class="carousel-wrapper">
      <div class="main-slide">

        <div class="main-slide-content">
        </div>
      </div>
      <div id="hero-card" class="card" style="width: 18rem; border-radius: 12px;">
        <h1 id="hero-card-title" class="card-title">Subnautica 2</h1>
        <div class="hero-grid1">
          <img src="../Assets/Gambar/Skrinsut/Subnautica2/Sks1.jpg" id="hero-card-img1" class="card-img-top" alt="...">
        </div>
        <div class="genre-box">
          <h6 class="genre-text">genre</h6>
          <h6 class="genre-text">genre</h6>
        </div>


        <div id="hero-card-body" class="card-body">

        <h6>
          DEEEER Simulator is a game where you play as a deer and ramapage the city
        </h6>

          <p id="hero-card-text" class="card-text">
        <h6 class="game-info">
          <p class="game-info-text">
            DEVELOPER: Gibier Games
          </p>
          <p class="game-info-text">
            PUBLISHER: PLAYISM
          </p>
          <p class="game-info-text">
            RELEASE DATE: 24 Nov, 2021
          </p>
          <p class="game-info-text">
            OVERALL RATING: 9.1 / 10 (1.234 Reviews)
          </p>
        </h6>    
        
        </p>
        </div>
        <div style="margin-left: 1rem;">
          Early Access Available Soon
        </div>

        <div id="hero-card" class="card-body" style="border-radius: 12px;">

          <a href="#" id="hero-card-link" class="card-link"> <i class="bi bi-windows"></i> </a>
          <a href="#" id="hero-card-link" class="card-link"> <i class="bi bi-steam"></i></a>
        </div>
      </div>
    </div>
  
  </div>



</div>







<script>
const track = document.querySelector('.carousel-track');
document.querySelector('.nav-btn.left').onclick = () => {
  track.scrollBy({ left: -200, behavior: 'smooth' });
};
document.querySelector('.nav-btn.right').onclick = () => {
  track.scrollBy({ left: 200, behavior: 'smooth' });
};

</script>