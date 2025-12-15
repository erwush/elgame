<link rel="stylesheet" href="CSS/details.css">

<style>
    #requirement-text{
    color: white;
  }
</style>

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
        <h1 id="hero-card-title" class="card-title">DEEEER Simulator</h1>
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
<div class="under-section">
 <div class="purchase-section">
            <h2 class="purchase-title">Buy DEEEER Simulator</h2>
            <div style="display: flex; align-items: center;">
                <div class="price-box">
                    <div class="discount-badge">-99%</div>
                    <div class="price-info">
                        <div class="original-price">Rp. 1,000,00</div>
                        <div class="current-price">Rp. 112,089.00</div>
                    </div>
                </div>
                <button class="cart-btn">🛒 Add to Cart</button>
            </div>
            <div style="margin-top: 15px; color: #4ade80;">
                ✓ Offer ends soon!
            </div>
        </div>

        <div class="about-section">
            <h2 class="section-title">About DEEEER Simulator</h2>
            <div class="description">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget aliquam nulla. Phasellus dictum tellus nec erat molestie. Sed tempor nulla ornare. Aliquam nibh sit ut mi convallis posuere at ut sem. Nam volutpat augue et tempus ornare.</p>
                <br>
                <p>Donec fermentum, ligula dictum pharetra consectetur, ante erat tincidunt ligula, et dignissim lectus felis ut tortor. Donec nec dolor luctus, malesuada turpis in, fermentum felis. Sed facilisis ligula, condimentum enim bibendum non justo. Nunc non mi consectetur, ultrices elit non, volutpat leo. Nam aliquet nisl non ante tempor, sit amet pellentesque arcu faucibus.</p>
            </div>

            <div class="requirements-grid">
                <div class="requirements-box">
                    <h3 class="requirement-text" style="color: white">Minimum Requirements</h3>
                    <div class="requirement-item">
                        <span class="requirement-label">Memory:</span>
                        <span class="requirement-value">1 KB Ram</span>
                    </div>
                    <div class="requirement-item">
                        <span class="requirement-label">Storage:</span>
                        <span class="requirement-value">1 GB available space</span>
                    </div>
                    <div class="requirement-item">
                        <span class="requirement-label">Graphics:</span>
                        <span class="requirement-value">NVIDIA GeForce 256</span>
                    </div>
                    <div class="requirement-item">
                        <span class="requirement-label">DirectX:</span>
                        <span class="requirement-value">Version 0.1</span>
                    </div>
                    <div class="requirement-item">
                        <span class="requirement-label">Processor:</span>
                        <span class="requirement-value">Intel Core i1 First Gen</span>
                    </div>
                    <div class="requirement-item">
                        <span class="requirement-label">OS:</span>
                        <span class="requirement-value">Linux</span>
                    </div>
                </div>

                <div class="requirements-box">
                    <h3 class="requirement-text" style="color: white"> Recommended Requirements</h3>
                    <div class="requirement-item">
                        <span class="requirement-label">Memory:</span>
                        <span class="requirement-value">1028 GB Ram</span>
                    </div>
                    <div class="requirement-item">
                        <span class="requirement-label">Storage:</span>
                        <span class="requirement-value">1 PB available space</span>
                    </div>
                    <div class="requirement-item">
                        <span class="requirement-label">Graphics:</span>
                        <span class="requirement-value">RTX 9090Ti</span>
                    </div>
                    <div class="requirement-item">
                        <span class="requirement-label">DirectX:</span>
                        <span class="requirement-value">Version 99</span>
                    </div>
                    <div class="requirement-item">
                        <span class="requirement-label">Processor:</span>
                        <span class="requirement-value">Intel Core i9 91st Gen</span>
                    </div>
                    <div class="requirement-item">
                        <span class="requirement-label">OS:</span>
                        <span class="requirement-value">Windows 20 Ultimate</span>
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